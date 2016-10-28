<?php
$this->params['breadcrumbs'] = [
    ['label' => '基本设置', 'url' => ['']],
    '短信配置'
];
$this->title = '短信配置';
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h1 class="box-title">短信配置</h1>
        <span class="help-block">需要把短信接口配置好，否则没法使用，如不会请联系短信提供商，推荐使用阿里大鱼，如没申请，请先到阿里大鱼注册</span>
    </div>
    <div class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label"><span class="text-danger">＊</span>接口名称:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">无作用，方便自己记录而已；</span>
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label"><span class="text-danger">＊</span>接入方式:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">需要去阿里大鱼平台里面添加签名，并且把最下面的模板添加到阿里大鱼模板管理平台去；</span>
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">appkey:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">secret:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">签名:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">短信签名必须是在阿里大鱼“管理中心-短信签名管理”中的可用签名；</span>
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">验证码模板ID:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">把“验证码短信提醒”添加到阿里大鱼模板中，在此输入添加后得到的模板ID；</span>
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">验证码短信提醒模板:</label>
                    <div class="col-sm-6">
                    <span class="control-label text-left text-label">
                        您的注册验证码：${code}，请不要把验证码泄露给其他人。如非本人操作，可不用理会！
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">好友店审核通过提醒模板:</label>
                    <div class="col-sm-6">
                    <span class="control-label text-left text-label">
                        您好，${haouname}，您已经成功加盟好友店，关注微信公众号:{$wechat}，开始推广您的好友店吧！
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">好友店审核拒绝提醒模板:</label>
                    <div class="col-sm-6">
                    <span class="control-label text-left text-label">
                        您好，${haouname}，您申请加盟填写的资料不完整，请核实，如有问题请联系${sitename}客服，客服电话：${sitetel}！
                    </span>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="form-group">
                <label for="" class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success">保存修改</button>
                </div>
            </div>
        </div>
    </div>
</div>