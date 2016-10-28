<?php
use yii\helpers\Url;

$this->title = '吐槽几句';
?>
<div class="page-group">
    <div class="page page-current">
        <header class="bar bar-nav">
            <a href="<?php echo Url::to(['setting/help']); ?>" class="icon icon-left pull-left"></a>
            <h1 class="title">吐槽几句</h1>
        </header>
        <div class="content">
          <div class="list-block">
            <ul>
              <li>
                <div class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">姓名</div>
                    <div class="item-input">
                      <input class="text-small-imp" type="text" placeholder="输入您的姓名">
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">联系方式</div>
                    <div class="item-input">
                      <input class="text-small-imp" type="email" placeholder="输入您的联系方式">
                    </div>
                  </div>
                </div>
              </li>
              <li class="align-top">
                <div class="item-content">
                  <div class="item-inner">
                    <div class="item-title label">意见反馈</div>
                    <div class="item-input">
                      <textarea class="text-small-imp" placeholder="如果您有任何关于好友Store的意见或建议，欢迎反馈给我们，帮助我们变得更好。"></textarea>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
            <div class="content-block haou-auth-margin-top-mid">
                <a href="#" class="button button-big button-fill button-primary">提交</a>
            </div>
        </div>
    </div>
</div>