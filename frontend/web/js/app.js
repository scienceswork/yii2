$(function () {
    // 好友店商品ajax无限滚动加载
      var loading = false;
      // 最多可加载的条目
      var maxItems = 60;
$.detachInfiniteScroll($('.infinite-scroll'));
      // 每次加载添加多少条目
      var itemsPerLoad = 20;

      function addItems(number, lastIndex) {
              // 生成新条目的HTML
              var html = '';
              for (var i = lastIndex + 1; i <= lastIndex + number; i++) {
                  html += '<li>' +
                          '<a href="#" class="item-link1 item-content">' +
                          '<div class="item-media">' +
                          '<img src="http://image.59store.com/Food/r31.jpg!small" style="width: 4rem;">' +
                          '</div>' +
                          '<div class="item-inner">' +
                          '<div class="item-title-row">' +
                          '<div class="item-title">韩国进口 海飘 即食烤海苔袋装 2g/包</div>' +
                          '<!-- <div class="item-after">$15</div> -->' +
                          '</div>' +
                          '<div class="item-title-row">' +
                          '<span style="color:#F9A502">￥1.00</span>' +
                          '</div>' +
                          '<div class="item-title-row">' +
                          '<span class="color-gray text-small" style="line-height:1.25rem;">库存:36 销量:435</span>' +
                          '<i class="icon icon-cart"></i>' +
                          '</div>' +
                          '</div>' +
                          '</a>' +
                          '</li>';
              }
              // 添加新条目
              $('#haou-store-show-content ul').append(html);

          }
          //预先加载20条
      addItems(itemsPerLoad, 0);

      // 上次加载的序号

      var lastIndex = 20;
      // 注册'infinite'事件处理函数
      $(document).on('infinite', '#haou-store-show-content',function() {

          // 如果正在加载，则退出
          if (loading) return;

          // 设置flag
          loading = true;
              if (lastIndex >= maxItems) {
                  // 加载完毕，则注销无限加载事件，以防不必要的加载
                  $.detachInfiniteScroll($('.infinite-scroll'));
                  // 删除加载提示符
                  $('.infinite-scroll-preloader').remove();
                  return;
              }
          // 模拟1s的加载过程
          setTimeout(function() {
              // 重置加载flag
              loading = false;
            console.log('lastIndex');
            console.log(lastIndex);
            console.log('maxItems');
            console.log(maxItems);
              if (lastIndex >= maxItems) {
                  // 加载完毕，则注销无限加载事件，以防不必要的加载
                  $.detachInfiniteScroll($('.infinite-scroll'));
                  // 删除加载提示符
                  $('.infinite-scroll-preloader').remove();
                  return;
              }

              // 添加新条目
              addItems(itemsPerLoad, lastIndex);
              // 更新最后加载的序号
              lastIndex = $('#haou-store-show-content ul li').length;
              //容器发生改变,如果是js滚动，需要刷新滚动
              $.refreshScroller();
          }, 1000);
      });
    $.init();
});