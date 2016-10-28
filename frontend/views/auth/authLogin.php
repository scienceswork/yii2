<?php
use yii\helpers\Url;
$this->title = '帐号登陆';
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['index/index']); ?>" class="icon icon-left pull-left external"></a>
            <h1 class="title">好友Store</h1>
        </header>
        <!-- 内容 -->
        <div class="content">
            <!-- 标签 -->
            <div class="buttons-tab">
                <a href="#normal-login" class="tab-link active button">账号密码登陆</a>
                <a href="#phone-login" class="tab-link button">手机验证登录</a>
            </div>
            <!-- 标签内容 -->
            <div class="tabs">
                <div class="tab active" id="normal-login">
                    <div class="list-block">
                        <ul>
                            <li>
                                <div class="item-content">
                                    <div class="item-inner">
                                        <div class="item-input">
                                            <input type="text" class="text-small" placeholder="手机号/用户名">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item-content">
                                    <div class="item-inner">
                                        <div class="item-input">
                                            <input type="password" class="text-small" placeholder="输入登陆密码">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="content-block haou-auth-margin-top-mid">
                        <a href="#" class="button button-big button-fill button-primary">登陆</a>
                    </div>
                    <div class="content-block haou-auth-margin-top-mid">
                            <a href="#" class="pull-left text-small">立即注册</a>
                            <a href="#" class="pull-right text-small">忘记密码</a>
                    </div>
                </div>
                <!-- 手机验证码登陆 -->
                <div class="tab" id="phone-login">
                    <div class="list-block">
                        <ul>
                            <li>
                                <div class="item-content padding-left-and-right">
                                    <div class="item-inner">
                                        <div class="item-input">
                                            <input type="text" class="text-small" placeholder="输入手机号">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item-content padding-left-and-right">
                                    <div class="item-inner">
                                        <div class="item-input">
                                            <input type="password" class="text-small" placeholder="输入验证码">
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
                        <a href="#" class="button button-big button-fill button-primary">登陆</a>
                    </div>
                    <div class="content-block haou-auth-margin-top-mid">
                            <a href="#" class="pull-left text-small">立即注册</a>
                            <a href="#" class="pull-right text-small">忘记密码</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>