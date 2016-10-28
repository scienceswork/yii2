<?php
namespace frontend\controllers;

use yii\web\Controller;

class SectionController extends Controller
{
    /**
     * 城市选择
     */
    public function actionCity()
    {
        $this->layout = 'layout';
        return $this->render('sectionCity');
    }
}