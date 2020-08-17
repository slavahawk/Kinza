<?php


namespace frontend\controllers;


use frontend\models\Cart;
use frontend\models\Order;
use frontend\models\OrderItems;
use frontend\models\Product;
use Yii;
use yii\web\Controller;

class CartController extends Controller
{

    public function actionIndex()
    {
        $session = Yii::$app->session;

        if (Yii::$app->request->post('order')) {
            return $this->actionOrder();
        } elseif (Yii::$app->request->post('clear')) {
            return  $this->actionClear();
        }

        return $this->render('index', [
            'session' => $session,
        ]);
    }

    public function actionAdd()
    {

        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);

        if (empty($product)) return false;

        $cart = new Cart();
        $cart->addToCart($product);

        return $_SESSION['cart.qty'];
    }

    protected function actionClear()
    {
        $session = Yii::$app->session;
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');

        return $this->redirect(['cart/index']);
    }

    public function actionDelete($id)
    {
        $cart = new Cart();
        $cart->recalc($id);

        return $this->redirect(['cart/index']);
    }

    protected function actionOrder()
    {
        $session = Yii::$app->session;
        $order = new Order();

        if ($order->load(Yii::$app->request->post())) {
            $order->qty = $session['cart.qty'];
            $order->sum = $session['cart.sum'];
            if (Yii::$app->request->post('order') && $order->save()) {
                $this->saveOrderItems($session['cart'], $order->id);
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                return $this->actionSuccess();
            }
        }

        return $this->render('order', [
            'session' => $session,
            'order' => $order,
        ]);
    }

    protected function saveOrderItems($items, $order_id)
    {
        foreach ($items as $id => $item) {
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty'] * $item['price'];
            $order_items->save();
        }
    }

    protected function actionSuccess()
    {
        return $this->render('success', []);
    }

}