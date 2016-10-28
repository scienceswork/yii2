<?php
use yii\helpers\Url;
$this->title = '解绑手机';
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['setting/index']); ?>" class="icon icon-left pull-left"></a>
            <h1 class="title">解绑手机</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul>
                    <li>
                        <div class="item-content padding-left-and-right">
                            <div class="item-inner">
                                <div class="item-input">
                                    <input type="text" class="text-small-imp" placeholder="输入手机号">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content padding-left-and-right">
                            <div class="item-inner">
                                <div class="item-input">
                                    <input type="password" class="text-small-imp" placeholder="输入验证码">
                                </div>
                            </div>
                            <div class="item-media">
                                <button class="button button-fil1l button-primary">获取验证码</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content-block haou-auth-margin-top-mid">
                <a href="#" class="button button-big button-fill button-primary">解绑手机号</a>
            </div>
        </div>
    </div>
</div>