<?php
namespace backend\controllers;

use yii\web\Controller;

class SettingController extends Controller
{
    /**
     * 个人设置
     */
    public function actionPerson()
    {
        return $this->render('personSetting');
    }

    /**
     * 平台设置
     */
    public function actionPlatform()
    {
        return $this->render('personPlatform');
    }

    /**
     * 邮箱设置
     */
    public function actionEmail()
    {
        return $this->render('personEmail');
    }

    /**
     * 短信设置
     */
    public function actionMessage()
    {
        return $this->render('personMessage');
    }

    /**
     * 管理员管理
     */
    public function actionAdmin()
    {
        return $this->render('personAdmin');
    }
}