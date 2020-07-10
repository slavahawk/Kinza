<?php


namespace frontend\widgets\categoryList;


use frontend\models\Category;
use Yii;
use yii\base\Widget;

class CategoryList extends Widget
{

    public function run()
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $categoryList = Category::find()->where($condition)->orderBy('id')->all();

        return $this->render('index', [
            'categoryList' => $categoryList,
        ]);
    }

}