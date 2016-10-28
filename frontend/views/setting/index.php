<?php
use yii\helpers\Url;
$this->title = "个人中心";
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['index/index']); ?>" class="icon icon-left pull-left external"></a>
            <h1 class="title">个人中心</h1>
            <a href="<?php echo Url::to(['setting/person-info']); ?>" class="icon icon-settings pull-right external"></a>
        </header>
        <!-- 底部导航 -->
        <nav class="bar bar-tab">
            <a href="<?php echo Url::to(['index/index']); ?>" class="tab-item external">
                <span class="icon icon-home"></span>
                <span class="tab-label">优店</span>
            </a>
            <a href="<?php echo Url::to(['haou/index']); ?>" class="tab-item external">
                <span class="icon icon-friends"></span>
                <span class="tab-label">好友店</span>
            </a>
            <a href="<?php echo Url::to(['cart/index']); ?>" class="tab-item external">
                <span class="icon icon-cart"></span>
                <span class="tab-label">购物车</span>
                <span class="badge">3</span>
            </a>
            <a href="<?php echo Url::to(['setting/index']); ?>" class="tab-item external active">
                <span class="icon icon-settings"></span>
                <span class="tab-label">个人中心</span>
            </a>
        </nav>
        <!-- 中间内容 -->
        <div class="content">
            <div class="row text-center haou-setting-head">
                <div class="col-100 text-center">
                    <div class="avator-lg block-center">
                        <img src="./images/miaomiao.jpeg" alt="头像">
                    </div>
                </div>
                <div class="col-100 text-center">
                    无敌的串猪神
                </div>
            </div>
            <div class="list-block no-margin-top-buttom with-border-bottom">
                <ul>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">全部订单</div>
                            <div class="item-after">查看全部订单</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row text-center">
                <nav class="bar bar-tab bar-tab-relative">
                  <a class="tab-item external" href="#">
                    <span class="icon icon-home"></span>
                    <span class="tab-label">待付款</span>
                  </a>
                  <a class="tab-item external" href="#">
                    <span class="icon icon-me"></span>
                    <span class="tab-label">待发货</span>
                  </a>
                  <a class="tab-item external" href="#">
                    <span class="icon icon-star"></span>
                    <span class="tab-label">待收货</span>
                  </a>
                  <a class="tab-item external" href="#">
                    <span class="icon icon-cart"></span>
                    <span class="tab-label">待评价</span>
                    <span class="badge">2</span>
                  </a>
                  <a class="tab-item external" href="#">
                    <span class="icon icon-settings"></span>
                    <span class="tab-label">退货/退款</span>
                  </a>
                </nav>
            </div>
            <div class="row text-center bg-white haou-setting">
                <div class="col-33">
                    <div class="color-danger text">¥0.00</div>
                    <div class="text-small">账户余额</div>
                </div>
                <div class="col-33">
                    <div class="color-danger text">--</div>
                    <div class="text-small">我的积分</div>
                </div>
                <div class="col-33">
                    <div class="color-danger text">--</div>
                    <div class="text-small">我的红包</div>
                </div>
                <div class="col-33">
                    <i class="icon icon-settings"></i>
                    <div class="text-small">地址管理</div>
                </div>
                <a href="<?php echo Url::to(['setting/open-shop']); ?>" class="col-33">
                    <i class="icon icon-settings"></i>
                    <div class="text-small">我要开店</div>
                </a>
                <a href="<?echo Url::to(['setting/change-password']); ?>" class="col-33 external">
                    <i class="icon icon-settings"></i>
                    <div class="text-small">密码管理</div>
                </a>
                <a href="<?php echo Url::to(['setting/unbind-phone']); ?>" class="col-33 external">
                    <i class="icon icon-settings"></i>
                    <div class="text-small">解绑手机</div>
                </a>
                <a href="<?php echo Url::to(['setting/about']); ?>" class="col-33">
                    <i class="icon icon-settings"></i>
                    <div class="text-small">关于我们</div>
                </a>
                <a href="<?echo Url::to(['setting/help']); ?>" class="col-33 external">
                    <i class="icon icon-settings"></i>
                    <div class="text-small">帮助中心</div>
                </a>
            </div>
            <div class="haou-footer">
                <div class="haou-footer-text">
                    Copyright © 2016 深圳市启航网讯科技有限公司
                </div>
            </div>
        </div>
    </div>
</div>