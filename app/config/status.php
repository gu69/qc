<?php
    return [
        // 游戏app
        'apps' => [
            //审核+上下架状态
            'status' => [
                'copy' => '草稿',
                'pass' => '审核通过',
                'nopass' => '审核不通过',
                'onshelf' => '上架', 
                'offshelf' => '下架',
            ],
            //是否有广告
            'is_ads' => [
                'yes' => '有', 'no' => '无',
            ],
            
            //是否安全认证
            'is_verify' => [
                'yes' => '是', 'no' => '否',
            ],
            // 系统
            'os' => [
                'Android',
            ],
        ],
        // 广告
        'ads' => [
            //是否上架
            'is_onshelf' => [
                'yes' => '线上展示', 'no' => '下架',
            ],
            //是否过期
            'is_expire' => [
                'yes' => '已过期', 'no' => '',
            ],
            //是否置顶
            'is_top' => [
                'yes' => '是', 'no' => '否',
            ],
            //排行广告区域
            'ranklocation' => [
                'new' => '最新',
                'hot' => '最热',
                'up' => '飙升',
            ],
            //首页，图片，编辑广告区域
            'location' => [
                'search' => '搜索页推广',
                'new' => '新品抢玩',
                'hotdown' => '热门下载',
                'suggest' => '精品推荐',
            ],
        ],
        //关键词
        'keywords' => [
            //是否轮播
            'is_slide' => [
                'yes' => '是', 'no'=>'否',
            ],
        ],
    ];
?>
