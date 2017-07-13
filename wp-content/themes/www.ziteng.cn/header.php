<!DOCTYPE html>
<html>
<head>


    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/home.css" type="text/css" media="screen" />
    <link href="css/home.css" rel="stylesheet" type="text/css">
    <script language="javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
    <script language="javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
    <script language="javascript" src="<?php bloginfo('template_url'); ?>/js/i.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.superslide.2.1.1.js"></script>
    <meta charset="utf-8" />
    <title><?php if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - "; bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "搜索结果"; echo " - "; bloginfo('name');
        } elseif (is_404() ) {
            echo '页面未找到!';
        } else {
            wp_title('',true);
        } ?></title>
    <style>
        /* 本例子css */

    </style>

</head>
<body>

<!--导航-->
<div class="nav_box">
    <div class="nav_con">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/picture/logo.png"></a>
        <ul>
            <?php
            wp_list_pages('depth=1&title_li=&sort_column=menu_order');
            ?>
        </ul>

    </div>
</div>