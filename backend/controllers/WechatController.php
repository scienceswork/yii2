<?php
namespace backend\controllers;

use  yii\web\Controller;

class WechatController extends Controller
{
    /**
     * 微信公众号基本设置
     */
    public function actionBase()
    {
        return $this->render('wechatBase');
    }

    /**
     * 图文素材管理
     * @return [type] [description]
     */
    public function actionImgAndText()
    {
        return $this->render('wechatImgAndText');
    }

    /**
     * 被添加自动回复消息
     */
    public function actionPassiveAutoReply()
    {
        return $this->render('wechatPassiveAutoReply');
    }

    /**
     * 消息自动回复设置
     */
    public function actionAutoReply()
    {
        return $this->render('wechatAutoReply');
    }

    /**
     * 自定义菜单设置
     */
    public function actionMenu()
    {
        return $this->render('wechatMenu');
    }

    /**
     * 微信支付设置
     */
    public function actionPay()
    {
        return $this->render('wechatPay');
    }
}