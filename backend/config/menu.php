<?php
return [
    'options' => ['class' => 'sidebar-menu'],
    'items' => [
        ['label' => '管理首页', 'icon' => 'fa fa-home', 'url' => ['index/index']],
        [
            'label' => '基本设置',
            'icon' => 'fa fa-cog',
            'url' => '#',
            'items' => [
                ['label' => '个人设置', 'icon' => 'fa fa-genderless', 'url' => ['setting/person']],
                ['label' => '平台设置', 'icon' => 'fa fa-genderless', 'url' => ['setting/platform']],
                ['label' => '邮箱设置', 'icon' => 'fa fa-genderless', 'url' => ['setting/email']],
                ['label' => '短信配置', 'icon' => 'fa fa-genderless', 'url' => ['setting/message']],
                ['label' => '管理员管理', 'icon' => 'fa fa-genderless', 'url' => ['setting/admin']],
            ],
        ],
        [
            'label' => '微信设置',
            'icon' => 'fa fa-wechat',
            'url' => '#',
            'items' => [
                ['label' => '微信公众号设置', 'icon' => 'fa fa-genderless', 'url' => ['wechat/base']],
                ['label' => '图文素材管理', 'icon' => 'fa fa-genderless', 'url' => ['wechat/img-and-text']],
                ['label' => '被添加自动回复设置', 'icon' => 'fa fa-genderless', 'url' => ['wechat/passive-auto-reply']],
                ['label' => '消息自动回复设置', 'icon' => 'fa fa-genderless', 'url' => ['wechat/auto-reply']],
                ['label' => '自定义菜单设置', 'icon' => 'fa fa-genderless', 'url' => ['wechat/menu']],
                ['label' => '微信支付设置', 'icon' => 'fa fa-genderless', 'url' => ['wechat/pay']],
            ],
        ],
        [
            'label' => '数据中心',
            'icon' => 'fa fa-database',
            'url' => '#'
        ],
        [
            'label' => '区域管理',
            'icon' => 'fa fa-sitemap',
            'url' => '#',
        ],
        [
            'label' => '会员管理',
            'icon' => 'fa fa-user',
            'url' => '#'
        ],
        [
            'label' => '微仓管理',
            'icon' => 'fa fa-edit',
            'url' => '#',
            'items' => [
                ['label' => '产品管理', 'icon' => 'fa fa-genderless', 'url' => ['#']],
                ['label' => '订单管理', 'icon' => 'fa fa-genderless', 'url' => ['#']],
                ['label' => '产品报损', 'icon' => 'fa fa-genderless', 'url' => ['#']],
                ['label' => '微仓管理员', 'icon' => 'fa fa-genderless', 'url' => ['#']],
            ],
        ],
        [
            'label' => '好友店管理',
            'icon' => 'fa fa-clone',
            'url' => '#',
            'items' => [
                ['label' => '好友店', 'icon' => 'fa fa-genderless', 'url' => ['#']],
                ['label' => '好友店订单', 'icon' => 'fa fa-genderless', 'url' => ['#']],
            ],
        ],
        [
            'label' => '优店管理',
            'icon' => 'fa fa-bookmark-o',
            'url' => '#',

        ],
        [
            'label' => '导航管理',
            'icon' => 'fa fa-navicon',
            'url' => '#',
            'items' => [
                ['label' => 'web端', 'icon' => 'fa fa-genderless', 'url' => ['#']],
                ['label' => '微信端', 'icon' => 'fa fa-genderless', 'url' => ['#']],
            ],
        ],
    ]
];