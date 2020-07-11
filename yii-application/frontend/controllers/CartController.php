<?php


namespace frontend\controllers;


use frontend\models\Cart;
use frontend\models\Product;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class CartController extends Controller
{

    public function actionIndex()
    {
        $session = Yii::$app->session;
        $session->open();

        return $this->render('index', [
            'session' => $session,
        ]);
    }

    public function actionAdd()
    {

        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);

        if (empty($product)) return false;

        $session = Yii::$app->session;
        $session->open();

        $cart = new Cart();
        $cart->addToCart($product);

        return $_SESSION['cart.qty'];
    }

    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');

        return $this->redirect(['cart/index']);
    }

    public function actionDelete($id)
    {

        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalc($id);

        return $this->redirect(['cart/index']);
    }

}