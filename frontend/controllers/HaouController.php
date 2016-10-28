<?php
namespace frontend\controllers;

use yii\web\Controller;

class HaouController extends Controller
{
    /**
     * 好友店店铺列表首页
     */
    public function actionIndex()
    {
        $this->layout = 'layout';
        return $this->render('index');
    }

    /**
     * 好友店店铺首页
     */
    public function actionStore()
    {
        $this->layout = 'layout';
        return $this->render('haouStore');
    }
}