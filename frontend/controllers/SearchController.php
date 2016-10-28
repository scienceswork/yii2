<?php
namespace frontend\controllers;

use yii\web\Controller;

class SearchController extends Controller
{
    /**
     * 优店搜索页面
     */
    public function actionIndex()
    {
        $this->layout = 'layout';
        return $this->render('searchIndex');
    }
}