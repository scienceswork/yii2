<?php
$this->params['breadcrumbs'] = [
    ['label' => '基本设置', 'url' => ['']],
    '邮箱设置'
];
$this->title = '邮箱设置';
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h1 class="box-title">邮箱设置</h1>
    </div>
    <div class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">邮箱服务器:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">例如:smtp.163.com、smtp.qq.com</span>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">邮箱端口:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">默认端口:25</span>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">邮箱:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">输入邮箱</span>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">邮箱用户:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">输入邮箱账户</span>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">邮箱密码:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control">
                    <span class="help-block">输入邮箱密码</span>
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