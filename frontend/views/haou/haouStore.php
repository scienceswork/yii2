<?php
use yii\helpers\Url;

$this->title = '好友Store-好友店';
?>
<div class="page-group">
    <div class="page page-current">
        <!-- 顶部导航 -->
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['haou/index']); ?>" class="icon icon-left pull-left"></a>
            <h1 class="title">无敌的串猪神</h1>
            <a href="#" class="icon icon-menu pull-right my-btn"></a>
        </header>
<!--         <div class="bar bar-header-secondary text-small" style="line-height: 2.2rem;height: 2rem;">
            <marquee behavior="" direction="" style="height:100%;">兄弟们，点开看看！只为满足你深夜的饥渴难耐.....
我的营业时间是21：00至23：30！除非特殊情况，一定接单后立即行动，尽力5分钟之内飞到你的床哦！    </marquee>
        </div> -->
        <!-- 底部购物车 -->
        <div class="bar bar-tab haou-cart-bar">
            <p class="haou-cart-area">
                <i class="icon icon-cart"></i>
                <span style="">13件</span>
                <span style="color: #F9A502;">¥</span>
                <span style="color: #F9A502;">268</span>
            </p>
            <p class="haou-settlement-btn">结算</p>
        </div>
        <!-- 中间内容，使用ajax进行无限底部滚动 -->
        <div id="haou-store-show-content" class="content infinite-scroll infinite-scroll-bottom">
            <div class="list-block media-list no-margin-top-buttom">
                <ul>
                </ul>
            </div>
            <!-- 加载提示符 -->
            <div class="infinite-scroll-preloader">
                <div class="preloader"></div>
            </div>
        </div>
    </div>
</div>
<!-- 侧栏 -->
<div class="panel panel-right panel-cover theme-white" id='panel-js-demo'>
  <div class="content-block">
    <p>我是从右边出现的</p>
    <p>并且我是覆盖在页面上而不是推开页面</p>
    <p></p>
  <div class="list-block">
    <ul>
      <li class="item-content item-link">
        <div class="item-media">
            <i class="icon icon-home"></i>
        </div>
        <div class="item-inner">
          <div class="item-title">我的订单</div>
        </div>
      </li>
      <li class="item-content item-link">
        <div class="item-media">
            <i class="icon icon-menu"></i>
        </div>
        <div class="item-inner">
          <div class="item-title">我的优惠券</div>
        </div>
      </li>
      <li class="item-content item-link">
        <div class="item-media">
            <i class="icon icon-settings"></i>
        </div>
        <div class="item-inner">
          <div class="item-title">我要开店</div>
        </div>
      </li>
      <li class="item-content item-link">
        <div class="item-media">
            <i class="icon icon-app"></i>
        </div>
        <div class="item-inner">
          <div class="item-title">帮助中心</div>
        </div>
      </li>
    </ul>
  </div>
    <!-- Click on link with "close-panel" class will close panel -->
    <p><a href="#" class="close-panel">关闭</a></p>
  </div>
</div>