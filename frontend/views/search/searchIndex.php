<?php
use yii\helpers\Url;

$this->title = '搜索';
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['index/index']); ?>" class="icon icon-left pull-left"></a>
            <h1 class="title">搜索</h1>
        </header>
        <!-- <div class="content"> -->
            <div class="bar bar-header-secondary">
              <div class="searchbar">
                <a class="searchbar-cancel">取消</a>
                <div class="search-input">
                  <label class="icon icon-search" for="search"></label>
                  <input type="search" id='search' placeholder='三周年感恩大回馈'/>
                </div>
              </div>
            </div>
        <!-- </div> -->
        <div class="content">
            <div class="content-block-title">热门搜索</div>
        </div>
    </div>
</div>