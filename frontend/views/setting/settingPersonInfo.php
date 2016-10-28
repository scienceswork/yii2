<?php
use yii\helpers\Url;

$this->title = '个人信息';
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['setting/index']); ?>" class="icon icon-left pull-left"></a>
            <h1 class="title">个人信息</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul>
                    <li class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title">头像</div>
                          <div class="item-after">xxx</div>
                        </div>
                    </li>
                    <li class="item-content item-link">
                        <div class="item-inner">
                          <div class="item-title">昵称</div>
                          <div class="item-after">无敌的串猪神</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content-block-title">帐号绑定</div>
            <div class="list-block">
                <ul>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">手机</div>
                            <div class="item-after">15113992194</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bar bar-footer-secondary">
            <button class="button button-fill button-block button-big">退出登陆</button>
        </div>
    </div>
</div>