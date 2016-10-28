<?php
use yii\helpers\Url;

$this->title = '我要开店';
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['setting/index']); ?>" class="icon icon-left pull-left"></a>
            <h1 class="title">我要开店</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">城市名称</div>
                            <div class="item-after">
                                <div class="item-input">
                                    <input type="text" class="text-small-imp text-right" placeholder="请输入城市名称">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">区域名称</div>
                            <div class="item-after">
                                <div class="item-input">
                                    <input type="text" class="text-small-imp text-right" placeholder="请输入区域名称">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">学校名称</div>
                            <div class="item-after">
                                <div class="item-input">
                                    <input type="text" class="text-small-imp text-right" placeholder="请输入学校名称">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">校内区域</div>
                            <div class="item-after">
                                <div class="item-input">
                                    <input type="text" class="text-small-imp text-right" placeholder="请输入校内区域">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">楼栋位置</div>
                            <div class="item-after">
                                <div class="item-input">
                                    <input type="text" class="text-small-imp text-right" placeholder="请输入楼栋位置">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="list-block">
                <ul>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">真实姓名</div>
                            <div class="item-after">
                                <div class="item-input">
                                    <input type="text" class="text-small-imp text-right" placeholder="请输入真实姓名">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="list-block">
                <ul>
                    <li class="item-content item-link">
                        <div class="item-inner">
                            <div class="item-title">手机号码</div>
                            <div class="item-after">
                                <div class="item-input">
                                    <input type="text" class="text-small-imp text-right" placeholder="请输入手机号码">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content padding-left-and-right">
                            <div class="item-inner">
                                <div class="item-input">
                                    <input type="password" class="text-small-imp no-padding-imp" placeholder="输入验证码">
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
                <a href="#" class="button button-big button-fill button-primary">提交申请</a>
            </div>
        </div>
    </div>
</div>