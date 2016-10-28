<?php
namespace frontend\controllers;

use yii\web\Controller;

class CartController extends Controller
{
    /**
     * 购物车
     */
    public function actionIndex()
    {
        $this->layout = 'layout';
        return $this->render('index');
    }
}