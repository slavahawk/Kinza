<?php
namespace frontend\controllers;

use frontend\models\Category;
use frontend\models\Product;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $categoryList = Category::find()->where($condition)->orderBy('sort_order')->all();

        return $this->render('index', [
            'categoryList' => $categoryList,
        ]);
    }

    /**
     * @return string
     */
    public function actionContact()
    {
//        $test = $this->start();

        return $this->render('contact');
    }

    public function actionDelivery()
    {

        return $this->render('delivery');

    }

//    public function start()
//    {
//        $row = 0;
//        if (($handle = fopen( $_SERVER['DOCUMENT_ROOT'] . "/ETC.csv", "r")) !== FALSE) {
//            while (($data = fgetcsv($handle, 1000, "\n")) !== FALSE) {
//                $row++;
//                $item = explode(';',$data[0]);
//                $id = $item[0];
//                $name = $item[1];
//                $category_id = $item[2];
//                $weight = $item[3];
//                $proteins = $item[4];
//                $fats = $item[5];
//                $carbohydrates = $item[6];
//                $calories = $item[7];
//                $description = $item[8];
//                $price = $item[9];
//                $img = $item[10];
//
//                if (strpos($proteins, ',')) {
//                    $proteins = str_replace(',', '.', $proteins);
//                }
//
//                if (strpos($fats, ',')) {
//                    $fats = str_replace(',', '.', $fats);
//                }
//
//                if (strpos($carbohydrates, ',')) {
//                    $carbohydrates = str_replace(',', '.', $carbohydrates);
//                }
//
//                $result[$row] = array(
//                    'id' => $id,
//                    'name' => (string)$name,
//                    'category_id' => (int)$category_id,
//                    'weight' => (string)$weight,
//                    'proteins' => (float)$proteins,
//                    'fats' => (float)$fats,
//                    'carbohydrates' => (float)$carbohydrates,
//                    'calories' => (int)$calories,
//                    'description' => (string)$description,
//                    'price' => (int)$price,
//                    'img' => (string)$img,
//                );
//            }
//            fclose($handle);
//        }
//
//        foreach ($result as $item) {
//            $test = new Product();
//            $test->name = $item['name'];
//            $test->category_id = $item['category_id'];
//            $test->weight = $item['weight'];
//            $test->proteins = $item['proteins'];
//            $test->fats = $item['fats'];
//            $test->carbohydrates = $item['carbohydrates'];
//            $test->calories = $item['calories'];
//            $test->description = $item['description'];
//            $test->price = $item['price'];
//            $test->img = $item['img'];
//            $test->save();
//        }
//
//        die();
//
//    }

}
