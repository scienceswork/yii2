<?php
use yii\helpers\Url;

$this->title = '好友Store';
?>
<div class="page-group">
    <div class="page page-current" id="index1">
        <header class="bar bar-nav">
            <h1 class="title">好友Store</h1>
            <a href="<?php echo Url::to(['search/index']); ?>" class="icon icon-search pull-right"></a>
        </header>
        <nav class="bar bar-tab">
            <a href="<?php echo Url::to(['index/index']); ?>" class="tab-item external active">
                <span class="icon icon-home"></span>
                <span class="tab-label">优店</span>
            </a>
            <a href="<?php echo Url::to(['haou/index']); ?>" class="tab-item external">
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
            <!-- 轮播组件 -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="http://cimgs1.fenqile.com/ibanner/M00/00/51/wicJAFgIFc2APzQCAACS4lTOfwM284_641x350.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="http://imgs1.fenqile.com/oa/M00/03/42/MlcFAFfuI4WAPgWHAADSYgU-uZM091_641x350.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="http://cimgs1.fenqile.com/ibanner/M00/00/53/wycJAFgNWRuAN7-WAAEJoibOuEM845_641x350.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="http://imgs1.fenqile.com/oa/M00/03/CD/MVcFAFf7bxKAANhsAAEofDFlXqo452_641x350.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="http://imgs1.fenqile.com/oa/M00/03/76/MVcFAFfuEoKABB4WAAGBW7n4CVQ485_641x350.jpg" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- 分类导航 -->
            <div class="row text-center bg-white haou-home">
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/BF/MVcFAFf6E2yAf2DXAAAJJiha1LE224.png)"></i>
                    <div class="text-small">水果</div>
                </a>
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/BF/MVcFAFf6E_uAb2t5AAAI3TIqVK8112.png)"></i>
                    <div class="text-small">零食</div>
                </a>
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/BF/MVcFAFf6FEKAWT9TAAAI5fLdA-M206.png)"></i>
                    <div class="text-small">方便面</div>
                </a>
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/87/MlcFAFf6FJuAGkLVAAAIdjKlLfo008.png)"></i>
                    <div class="text-small">生活用品</div>
                </a>
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/87/MlcFAFf6FNKAecfFAAAKknwKovs487.png)"></i>
                    <div class="text-small">烟酒饮料</div>
                </a>
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/87/MlcFAFf6FS2AfkDhAAALrKxU3y4837.png)"></i>
                    <div class="text-small">调料干货</div>
                </a>
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/88/M1cFAFf6FWiAJzn_AAAODR3y898127.png)"></i>
                    <div class="text-small">土特产</div>
                </a>
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/88/M1cFAFf6FZmADpzqAAAYJSoro3I999.png)"></i>
                    <div class="text-small">常购品</div>
                </a>
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/88/M1cFAFf6Fc6AINQVAAAHfyX5wsU077.png)"></i>
                    <div class="text-small">话费充值</div>
                </a>
                <a class="col-20">
                    <i style="background-image:url(http://img1.fenqile.com/oa/M00/03/BF/MVcFAFf6Ff6ABC1JAAAMjqyCsvI108.png)"></i>
                    <div class="text-small">云打印</div>
                </a>
            </div>
            <div class="row text-center bg-white haou-home">
              <img src="http://cimgs1.fenqile.com/ibanner/M00/00/50/wycJAFf7ckCAXI2BAAChAwW0C8Q847_600x160.jpg" alt="">
            </div>
            <!-- 热门商品 -->
            <div class="list-block">
              <ul>
                <li class="item-content item-link">
                  <div class="item-media">
                    <i class="icon icon-app"></i>
                  </div>
                  <div class="item-inner no-margin-imp">
                    <div class="item-title">热门商品</div>
                    <div class="item-after">更多</div>
                  </div>
                </li>
              </ul>
              <div class="row haou-show">
                <div class="col-50">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/52/wScJAFfuO7eAE8bfAABJ-yERZEo412_288x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-50">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/50/wScJAFfrQH2ASy3SAAB1rrcbPqo580_288x200.jpg" alt="" class="fill-width">
                </div>
              </div>
              <div class="row haou-show">
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/4B/wicJAFfqEf6AD2bWAABlUzi4Xf0738_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/51/wicJAFgGAaOAeJ3dAABin_U9_Ks148_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/3B/wScJAFejCC-ACmwMAABnz45CCtY445_194x200.jpg" alt="" class="fill-width">
                </div>
              </div>
              <div class="row haou-show">
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/38/wycJAFei_jCABC66AABtT5gnj_M680_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/56/wScJAFgEnhWAZ8tKAAC06KoBkg8607_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/41/wicJAFfFOkCALAmOAAA-tuHxSHc326_194x200.jpg" alt="" class="fill-width">
                </div>
              </div>
            </div>
            <!-- 新品首发 -->
            <div class="list-block">
              <ul>
                <li class="item-content item-link">
                  <div class="item-media">
                    <i class="icon icon-app"></i>
                  </div>
                  <div class="item-inner no-margin-imp">
                    <div class="item-title">新品首发</div>
                    <div class="item-after">更多</div>
                  </div>
                </li>
              </ul>
              <div class="row haou-show">
                <div class="col-50">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/52/wScJAFfuO7eAE8bfAABJ-yERZEo412_288x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-50">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/50/wScJAFfrQH2ASy3SAAB1rrcbPqo580_288x200.jpg" alt="" class="fill-width">
                </div>
              </div>
              <div class="row haou-show">
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/4B/wicJAFfqEf6AD2bWAABlUzi4Xf0738_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/51/wicJAFgGAaOAeJ3dAABin_U9_Ks148_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/3B/wScJAFejCC-ACmwMAABnz45CCtY445_194x200.jpg" alt="" class="fill-width">
                </div>
              </div>
              <div class="row haou-show">
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/38/wycJAFei_jCABC66AABtT5gnj_M680_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/56/wScJAFgEnhWAZ8tKAAC06KoBkg8607_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/41/wicJAFfFOkCALAmOAAA-tuHxSHc326_194x200.jpg" alt="" class="fill-width">
                </div>
              </div>
            </div>
            <!-- 促销商品 -->
            <div class="list-block">
              <ul>
                <li class="item-content item-link">
                  <div class="item-media">
                    <i class="icon icon-app"></i>
                  </div>
                  <div class="item-inner no-margin-imp">
                    <div class="item-title">促销商品</div>
                    <div class="item-after">更多</div>
                  </div>
                </li>
              </ul>
              <div class="row haou-show">
                <div class="col-50">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/52/wScJAFfuO7eAE8bfAABJ-yERZEo412_288x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-50">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/50/wScJAFfrQH2ASy3SAAB1rrcbPqo580_288x200.jpg" alt="" class="fill-width">
                </div>
              </div>
              <div class="row haou-show">
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/4B/wicJAFfqEf6AD2bWAABlUzi4Xf0738_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/51/wicJAFgGAaOAeJ3dAABin_U9_Ks148_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/3B/wScJAFejCC-ACmwMAABnz45CCtY445_194x200.jpg" alt="" class="fill-width">
                </div>
              </div>
              <div class="row haou-show">
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/38/wycJAFei_jCABC66AABtT5gnj_M680_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/56/wScJAFgEnhWAZ8tKAAC06KoBkg8607_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/41/wicJAFfFOkCALAmOAAA-tuHxSHc326_194x200.jpg" alt="" class="fill-width">
                </div>
              </div>
            </div>
            <!-- 游戏充值 -->
            <div class="list-block">
              <ul>
                <li class="item-content item-link">
                  <div class="item-media">
                    <i class="icon icon-app"></i>
                  </div>
                  <div class="item-inner no-margin-imp">
                    <div class="item-title">游戏充值</div>
                    <div class="item-after">更多</div>
                  </div>
                </li>
              </ul>
              <div class="row haou-show">
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/4B/wicJAFfqEf6AD2bWAABlUzi4Xf0738_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/51/wicJAFgGAaOAeJ3dAABin_U9_Ks148_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/3B/wScJAFejCC-ACmwMAABnz45CCtY445_194x200.jpg" alt="" class="fill-width">
                </div>
              </div>
            </div>
            <!-- 手机通讯 -->
            <div class="list-block">
              <ul>
                <li class="item-content item-link">
                  <div class="item-media">
                    <i class="icon icon-app"></i>
                  </div>
                  <div class="item-inner no-margin-imp">
                    <div class="item-title">手机通讯</div>
                    <div class="item-after">更多</div>
                  </div>
                </li>
              </ul>
              <div class="row haou-show">
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/4B/wicJAFfqEf6AD2bWAABlUzi4Xf0738_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/51/wicJAFgGAaOAeJ3dAABin_U9_Ks148_194x200.jpg" alt="" class="fill-width">
                </div>
                <div class="col-33">
                  <img src="http://cimgs1.fenqile.com/ibanner/M00/00/3B/wScJAFejCC-ACmwMAABnz45CCtY445_194x200.jpg" alt="" class="fill-width">
                </div>
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