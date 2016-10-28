<?php
namespace frontend\controllers;

use yii\web\Controller;

class AuthController extends Controller
{
    /**
     * 帐号登陆
     */
    public function actionLogin()
    {
        $this->layout = 'layout';
        return $this->render('authLogin');
    }
}