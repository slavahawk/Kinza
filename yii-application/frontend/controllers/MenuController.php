<?php


namespace frontend\controllers;


use frontend\models\Product;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

/**
 * Class MenuController
 * @package frontend\controllers
 */
class MenuController extends Controller
{

    public function actionIndex()
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $productList = Product::find()->where($condition)->orderBy('id')->all();

        return $this->render('index', [
            'productList' => $productList,
        ]);
    }

    public function actionCategory($categoryId)
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $condition2 = ['category_id' => $categoryId];
        $productList = Product::find()->where($condition)->andWhere($condition2)->orderBy('id')->all();

        return $this->render('category', [
            'productList' => $productList,
        ]);
    }

    public function actionProduct($productId)
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $condition2 = ['id' => $productId];
        $product = Product::find()->where($condition)->andWhere($condition2)->one();

        return $this->render('product', [
            'product' => $product,
        ]);
    }

}