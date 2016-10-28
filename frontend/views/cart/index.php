<?php
use yii\helpers\Url;

$this->title = '购物车'
?>
<div class="page-group">
  <div class="page page-current" id="index1">
    <header class="bar bar-nav">
      <h1 class="title">我的购物车</h1>
    </header>
    <nav class="bar bar-tab">
      <a href="<?php echo Url::to(['index/index']); ?>" class="tab-item external">
        <span class="icon icon-home"></span>
        <span class="tab-label">优店</span>
      </a>
      <a href="<?php echo Url::to(['haou/index']); ?>" class="tab-item external">
        <span class="icon icon-friends"></span>
        <span class="tab-label">好友店</span>
      </a>
      <a href="<?php echo Url::to(['cart/index']); ?>" class="tab-item external active">
        <span class="icon icon-cart"></span>
        <span class="tab-label">购物车</span>
        <span class="badge">3</span>
      </a>
      <a href="<?php echo Url::to(['setting/index']); ?>" class="tab-item external">
        <span class="icon icon-settings"></span>
        <span class="tab-label">个人中心</span>
      </a>
    </nav>
    <div class="content">
        <div class="haou-footer">
            <div class="haou-footer-text">
                Copyright © 2016 深圳市启航网讯科技有限公司
            </div>
        </div>
    </div>
  </div>
</div>