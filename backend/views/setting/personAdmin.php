<?php
$this->params['breadcrumbs'] = [
    ['label' => '基本设置', 'url' => ['']],
    '管理员管理'
];
$this->title = '管理员管理';
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h1 class="box-title">管理员设置</h1>
        <span class="help-block">请勿乱删除管理员，以免不能登录，此处列表不包含自己超级管理员帐号</span>
        <div class="box-tools pull-right">
            <button class="btn btn-block btn-success">添加管理员</button>
        </div>
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>选择</th>
                    <th>用户名</th>
                    <th>真实姓名</th>
                    <th>创建时间</th>
                    <th>上次登陆时间</th>
                    <th>上次登录ip</th>
                    <th>登录次数</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>xiezehui</td>
                    <td>谢泽辉</td>
                    <td>2016-10-24 10:03:57</td>
                    <td>2016-10-27 11:25:11</td>
                    <td>192.168.1.101</td>
                    <td>0</td>
                    <td>开通</td>
                    <td><a href="#">编辑</a> | <a href="#">删除</a></td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>xiezehui</td>
                    <td>谢泽辉</td>
                    <td>2016-10-24 10:03:57</td>
                    <td>2016-10-27 11:25:11</td>
                    <td>192.168.1.101</td>
                    <td>0</td>
                    <td>开通</td>
                    <td><a href="#">编辑</a> | <a href="#">删除</a></td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>xiezehui</td>
                    <td>谢泽辉</td>
                    <td>2016-10-24 10:03:57</td>
                    <td>2016-10-27 11:25:11</td>
                    <td>192.168.1.101</td>
                    <td>0</td>
                    <td>开通</td>
                    <td><a href="#">编辑</a> | <a href="#">删除</a></td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                    <td>xiezehui</td>
                    <td>谢泽辉</td>
                    <td>2016-10-24 10:03:57</td>
                    <td>2016-10-27 11:25:11</td>
                    <td>192.168.1.101</td>
                    <td>0</td>
                    <td>开通</td>
                    <td><a href="#">编辑</a> | <a href="#">删除</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="box-footer">
        <button class="btn btn-inline btn-success pull-left">删除所选</button>
        <ul class="pagination pagination-sm no-margin pull-right">
            <li>
                <a href="#">«</a>
            </li>
            <li>
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">»</a>
            </li>
        </ul>
    </div>
</div>