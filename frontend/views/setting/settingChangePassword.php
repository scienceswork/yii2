<?php
use yii\helpers\Url;

$this->title = '修改密码';
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['setting/index']); ?>" class="icon icon-left pull-left"></a>
            <h1 class="title">修改密码</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul>
                    <li>
                        <div class="item-content padding-left-and-right">
                            <div class="item-inner">
                                <div class="item-input">
                                    <input type="text" class="text-small-imp" placeholder="输入原密码">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content padding-left-and-right">
                            <div class="item-inner">
                                <div class="item-input">
                                    <input type="password" class="text-small-imp" placeholder="输入新密码">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content-block haou-auth-margin-top-mid">
                <a href="#" class="button button-big button-fill button-primary">确认修改密码</a>
            </div>
        </div>
    </div>
</div>