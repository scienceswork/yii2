<?php
namespace frontend\controllers;

use yii\web\Controller;

class SettingController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'layout';
        return $this->render('index');
    }

    /**
     * 个人设置-个人信息
     */
    public function actionPersonInfo()
    {
        $this->layout = 'layout';
        return $this->render('settingPersonInfo');
    }

    /**
     * 个人设置-帮助中心
     */
    public function actionHelp()
    {
        $this->layout = 'layout';
        return $this->render('settingHelp');
    }

    /**
     * 个人设置-帮助中心-吐槽几句
     */
    public function actionHelpFeedback()
    {
        $this->layout = 'layout';
        return $this->render('settingHelpFeedback');
    }

    /**
     * 个人设置-帮助中心-常见问题
     */
    public function actionHelpFaq()
    {
        $this->layout = 'layout';
        return $this->render('settingHelpFaq');
    }

    /**
     * 个人设置-解绑手机
     */
    public function actionUnbindPhone()
    {
        $this->layout = 'layout';
        return $this->render('settingUnbindPhone');
    }

    /**
     * 个人设置-修改密码
     */
    public function actionChangePassword()
    {
        $this->layout = 'layout';
        return $this->render('settingChangePassword');
    }

    /**
     * 个人设置-我要开店
     */
    public function actionOpenShop()
    {
        $this->layout = 'layout';
        return $this->render('settingOpenShop');
    }

    /**
     * 个人设置-关于我们
     */
    public function actionAbout()
    {
        $this->layout = 'layout';
        return $this->render('settingAbout');
    }
}