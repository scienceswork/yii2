<?php
use yii\helpers\Url;

$this->title = '好友店';
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <h1 class="title">东丽B区<i class="icon icon-settings text-small-imp"></i></h1>
            <button class="button button-link button-nav pull-right">
                <a href="<?php echo Url::to(['setting/open-shop']); ?>">我要开店</a>
            </button>
        </header>
        <nav class="bar bar-tab">
          <a href="<?php echo Url::to(['index/index']); ?>" class="tab-item external">
            <span class="icon icon-home"></span>
            <span class="tab-label">优店</span>
          </a>
          <a href="<?php echo Url::to(['haou/index']); ?>" class="tab-item external active">
            <span class="icon icon-friends"></span>
            <span class="tab-label">好友店</span>
          </a>
          <a href="<?php echo Url::to(['cart/index']); ?>" class="tab-item external">
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
            <!-- 好友店滑动轮播，默认3张，如果校园经理没有设置则显示默认 -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="http://imgs1.fenqile.com/oa/M00/03/42/MlcFAFfuI4WAPgWHAADSYgU-uZM091_641x350.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="http://imgs1.fenqile.com/oa/M00/03/CD/MVcFAFf7bxKAANhsAAEofDFlXqo452_641x350.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="http://imgs1.fenqile.com/oa/M00/03/76/MVcFAFfuEoKABB4WAAGBW7n4CVQ485_641x350.jpg" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="card">
              <div class="card-content">
                <div class="list-block media-list no-margin-top-buttom">
                  <ul>
                    <li>
                      <a href="<?php echo Url::to(['haou/store']); ?>" class="item-link1 item-content">
                        <div class="item-media">
                          <img src="http://zhaime.qiniudn.com/uploads/store/yemao_store.jpg" style='width: 4rem;'>
                        </div>
                        <div class="item-inner">
                          <div class="item-title-row">
                            <div class="item-title color-default">五山区20栋</div>
                            <div class="item-after">
                              <!-- <span class="badge bg-success">营</span> -->
                              营
                            </div>
                          </div>
                          <div class="item-subtitle color-gray">共43种商品</div>
                          <div class="item-text color-gray">
                            头和尾的卡片。卡头是用来显示一些额外的信息，或自定义操作卡标题和页脚。
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="content-padded no-margin-top-buttom" style="margin-left: .75rem;">
                  <i class="icon icon-settings"></i>
                  <span>D12楼106</span> | <span>起送价0元</span> | <span>下单即送</span>
                </div>
              </div>
              <div class="card-footer">
                <!-- <i class="icon icon-edit"></i> -->欢迎光临小店哟~~跨楼配送时间在...
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                <div class="list-block media-list no-margin-top-buttom">
                  <ul>
                    <li>
                      <a href="#" class="item-link1 item-content">
                        <div class="item-media">
                          <img src="http://zhaime.qiniudn.com/uploads/store/0dbdc5100ed77903d9d1d6c873e14c3c.png" style='width: 4rem;'>
                        </div>
                        <div class="item-inner">
                          <div class="item-title-row">
                            <div class="item-title color-default">华山8，9栋零食铺</div>
                            <div class="item-after">
                              <!-- <span class="badge bg-success">营</span> -->
                              营
                            </div>
                          </div>
                          <div class="item-subtitle color-gray">共60种商品</div>
                          <div class="item-text color-gray">
                            头和尾的卡片。卡头是用来显示一些额外的信息，或自定义操作卡标题和页脚。
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="content-padded no-margin-top-buttom" style="margin-left: .75rem;">
                  <i class="icon icon-settings"></i>
                  <span>D12楼106</span> | <span>起送价0元</span> | <span>下单即送</span>
                </div>
              </div>
              <div class="card-footer">
                <!-- <i class="icon icon-edit"></i> -->开店啦~~~
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                <div class="list-block media-list no-margin-top-buttom">
                  <ul>
                    <li>
                      <a href="#" class="item-link1 item-content">
                        <div class="item-media">
                          <img src="http://zhaime.qiniudn.com/uploads/store/yemao_store.jpg" style='width: 4rem;'>
                        </div>
                        <div class="item-inner">
                          <div class="item-title-row">
                            <div class="item-title color-default">五山区20栋</div>
                            <div class="item-after">
                              <!-- <span class="badge bg-success">营</span> -->
                              营
                            </div>
                          </div>
                          <div class="item-subtitle color-gray">共43种商品</div>
                          <div class="item-text color-gray">
                            头和尾的卡片。卡头是用来显示一些额外的信息，或自定义操作卡标题和页脚。
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="content-padded no-margin-top-buttom" style="margin-left: .75rem;">
                  <i class="icon icon-settings"></i>
                  <span>D12楼106</span> | <span>起送价0元</span> | <span>下单即送</span>
                </div>
              </div>
              <div class="card-footer">
                <!-- <i class="icon icon-edit"></i> -->欢迎光临小店哟~~跨楼配送时间在...
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                <div class="list-block media-list no-margin-top-buttom">
                  <ul>
                    <li>
                      <a href="#" class="item-link1 item-content">
                        <div class="item-media">
                          <img src="http://zhaime.qiniudn.com/uploads/store/yemao_store.jpg" style='width: 4rem;'>
                        </div>
                        <div class="item-inner">
                          <div class="item-title-row">
                            <div class="item-title color-default">五山区20栋</div>
                            <div class="item-after">
                              <!-- <span class="badge bg-success">营</span> -->
                              营
                            </div>
                          </div>
                          <div class="item-subtitle color-gray">共43种商品</div>
                          <div class="item-text color-gray">
                            头和尾的卡片。卡头是用来显示一些额外的信息，或自定义操作卡标题和页脚。
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="content-padded no-margin-top-buttom" style="margin-left: .75rem;">
                  <i class="icon icon-settings"></i>
                  <span>D12楼106</span> | <span>起送价0元</span> | <span>下单即送</span>
                </div>
              </div>
              <div class="card-footer">
                <!-- <i class="icon icon-edit"></i> -->欢迎光临小店哟~~跨楼配送时间在...
              </div>
            </div>
            <div class="haou-footer">
                <div class="haou-footer-text">
                    Copyright © 2016 深圳市启航网讯科技有限公司
                </div>
            </div>
        </div>
    </div>
</div>