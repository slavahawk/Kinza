<?php


namespace frontend\controllers;

use frontend\models\Category;
use frontend\models\CategoryAlcohol;
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
        $categoryList = Category::find()->where(['status' => $condition])->orderBy(['sort_order' => SORT_ASC])->asArray()->all();

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
        $productList = Product::find()->where($condition)->andWhere($condition2)->orderBy(['sort_order' => SORT_ASC])->all();

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

    public function actionAlcohol()
    {
        $condition = ['type' => 'bar'];
        $condition2 = ['parent_category' => 0];
        $condition3 = ['status' => 1];
        $parentBarCategories = CategoryAlcohol::find()
            ->where($condition)
            ->andWhere($condition2)
            ->andWhere($condition3)
            ->orderBy('sort_order')
            ->all();

        foreach ($parentBarCategories as $category) {
            $condition4[] = $category->category_alcohol_id;
            $childBarCategories = CategoryAlcohol::find()
                ->joinWith('alcohol', 'category_alcohol.category_alcohol_id = alcohol.category_id')
                ->where($condition)
                ->andWhere(['category_alcohol.parent_category' => $condition4])
                ->andWhere('alcohol.status')
                ->orderBy('sort_order')
                ->all();
        }

        $condition5 = ['type' => 'wine'];
        $WineCategories = CategoryAlcohol::find()
            ->joinWith('alcohol', 'category_alcohol.category_alcohol_id = alcohol.category_id')
            ->where($condition5)
            ->andWhere(['alcohol.status' => 1])
            ->orderBy('sort_order')
            ->all();

        return $this->render('alcohol', [
            'parentBarCategories' => $parentBarCategories,
            'childBarCategories' => $childBarCategories,
            'WineCategories' => $WineCategories,
        ]);
    }

//    public function actionParsing()
//    {
//        $row = 0;
//        if (($handle = fopen( $_SERVER['DOCUMENT_ROOT'] . "/wine_alcohol.csv", "r")) !== FALSE) {
//            while (($data = fgetcsv($handle, 1000, "\n")) !== FALSE) {
//                $row++;
//                $item = explode(';',$data[0]);
//                $alcohol_id = $item[0];
//                $name = $item[1];
//                $category_id = $item[2];
//                $weight = $item[3];
//                $price = $item[4];
//                $sort_order = $item[5];
//
//                $result[$row] = array(
//                    'alcohol_id' => $alcohol_id,
//                    'name' => (string)$name,
//                    'category_id' => (int)$category_id,
//                    'weight' => (string)$weight,
//                    'price' => (string)$price,
//                    'sort_order' => (int)$sort_order,
//                );
//            }
//            fclose($handle);
//        }
//
//        foreach ($result as $item) {
//            $test = new Alcohol();
//            $test->name = $item['name'];
//            $test->category_id = $item['category_id'];
//            $test->weight = $item['weight'];
//            $test->price = $item['price'];
//            $test->sort_order = $item['sort_order'];
//            $test->status = 1;
//            $test->save();
//        }
//
//        die('success');
//    }

}