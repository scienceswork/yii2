<?php
use yii\helpers\Url;

$this->title = '帮助中心';
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['setting/index']); ?>" class="icon icon-left pull-left"></a>
            <h1 class="title">帮助中心</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">好友Store客服</div>
                            <div class="item-after color-danger"><a href="tel:15113992194">15113992194</a></div>
                        </div>
                    </li>
                    <a href="<?php echo Url::to(['setting/help-feedback']); ?>" class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">吐槽几句</div>
                        </div>
                    </a>
                    <a href="<?php echo Url::to(['setting/help-faq']); ?>" class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">常见问题</div>
                        </div>
                    </a>
                </ul>
            </div>
            <div class="haou-footer">
                <div class="haou-footer-text">
                    Copyright © 2016 深圳市启航网讯科技有限公司
                </div>
            </div>
        </div>
    </div>
</div>