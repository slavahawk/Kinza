<?php


namespace frontend\controllers;


use yii\web\Controller;

/**
 * Class MenuController
 * @package frontend\controllers
 */
class MenuController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}