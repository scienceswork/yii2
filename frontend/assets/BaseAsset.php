<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * 基础资源
 */
class BaseAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/sui.css',
        'css/app.css'
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
