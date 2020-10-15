<?php


namespace frontend\widgets\categoryList;


use frontend\models\Category;
use frontend\models\Product;
use Yii;
use yii\base\Widget;
use yii\helpers\Url;

class CategoryList extends Widget
{

    public function run()
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $categoryList = Category::find()->where($condition)->orderBy(['sort_order' => SORT_ASC])->all();

        foreach ($categoryList as $category) {
            if (Url::current() == Url::to(['menu/category', 'categoryId' => $category->id])) {
                $categoryItem = $category->name;
            }
        }



        $productCategory = Product::find()->where($condition)->all();

        foreach ($productCategory as $product) {
            if (Url::current() == Url::to(['menu/product', 'productId' => $product->product_id])) {
                $categoryOfProduct = Category::findOne(['id' => $product->category_id]);
            }
        }

        return $this->render('index', [
            'categoryList' => $categoryList,
            'categoryItem' => $categoryItem,
            'categoryOfProduct' => $categoryOfProduct,
        ]);
    }

}