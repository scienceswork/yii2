<?php
$this->params['breadcrumbs'] = [
    ['label' => '微信设置', 'url' => ['']],
    '微信公众号设置'
];
$this->title = '微信公众号设置';
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h1 class="box-title">微信公众号基本配置</h1>
        <span class="help-block">本站仅支持微信服务号，需要用到高级接口，并且需要认证</span>
    </div>
    <div class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">URL(服务器地址):</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">Token(令牌):</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">网页授权:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">在公众平台设置网页回调页面域名：开发者中心 > 网页授权获取用户基本信息 > 修改 > 填写授权回调页面域名；</span>
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label"><span class="text-danger">＊</span>公共账号:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label"><span class="text-danger">＊</span>AppID(应用ID):</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label"><span class="text-danger">＊</span>AppSecret(应用密钥):</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label"><span class="text-danger">＊</span>微信二维码:</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control no-border">
                    <span class="help-block">图片建议尺寸：200像素*200像素
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