<?php
use yii\helpers\Html;
use frontend\assets\BaseAsset;

BaseAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="//g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
    <script type='text/javascript' src='//g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
    <script>
        $.config = {
            swipePanelOnlyClose: true,
            autoInit: true
        };
    </script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="">
    <?php $this->beginBody() ?>
        <?= $content ?>
    <?php $this->endBody() ?>
    <script>
        // 关闭sui默认路由
        $.config = {router: false};
    </script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='//g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='./js/app.js'></script>
    <script>
        // 滑动轮播初始化
        $(function() {
          $(".swiper-container").swiper({
                autoplay: 3000,// 可选选项，自动滑动
                // spaceBetween: 0,// 图片间隙为0px
                // speed: 400,// 速度为400
                // pagination : '.swiper-pagination',
                autoplayDisableOnInteraction : false,
          });
        });
        // 应用初始化
        // $.init();

        // $(document).on("click", ".my-btn", function() {
        //   $.openPanel("#panel-js-demo");
        // });
        //  data-space-between='0' data-swiper-autoplay="2000"
    </script>
</body>
</html>
<?php $this->endPage() ?>