<?php


namespace frontend\controllers;


use frontend\models\Category;
use frontend\models\Product;
use Yii;
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
        $categoryList = Category::find()->where(['status' => $condition])->asArray()->all();

        foreach ($categoryList as $category) {
            $products = Product::find()
                ->where(['category_id' => $category['id']])
                ->andWhere(['status' => $condition])
                ->limit(7)
                ->all();

            Product::setResizeImage($products);

            $menuList[] = array(
                'category_id' => $category['id'],
                'category_name' => $category['name'],
                'products' => $products,
            );
        }

        return $this->render('index', [
            'menuList' => $menuList,
        ]);
    }

    public function actionCategory($categoryId)
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $condition2 = ['category_id' => $categoryId];
        $productList = Product::find()->where($condition)->andWhere($condition2)->orderBy('product_id')->all();

        Product::setResizeImage($productList);

        return $this->render('category', [
            'productList' => $productList,
        ]);
    }

    public function actionProduct($productId)
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $condition2 = ['product_id' => $productId];
        $product = Product::find()->where($condition)->andWhere($condition2)->one();

        return $this->render('product', [
            'product' => $product,
        ]);
    }

}