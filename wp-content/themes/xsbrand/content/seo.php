<?php if ( is_home()  ) { ?>
<title><?php  the_field('title','option'); ?></title>
<meta name="description" content="<?php  the_field('description','option');?>" />
<meta name="keywords" content="<?php the_field('keywords','option');?>" />
<?php } ?>
<?php if ( is_search() ) { ?><title>搜索结果| <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_single() ) { ?><title><?php $page_id = get_queried_object();if( get_field('title',$page_id) ): ?><?php the_field('title',$page_id); ?><?php else : ?><?php the_title();?><?php endif; ?> | <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_page() && !is_front_page()) { ?><title><?php $page_id = get_queried_object();if( get_field('title',$page_id) ): ?><?php the_field('title',$page_id); ?><?php else : ?><?php the_title();?><?php endif; ?> | <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_category() ) { ?><title><?php $page_id = get_queried_object();if( get_field('title',$page_id) ): ?><?php the_field('title',$page_id); ?><?php else : ?><?php single_cat_title();?><?php endif; ?> | <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_tag() ) { ?><title><?php  single_tag_title("", true); ?> | <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_year() ) { ?><title><?php the_time('Y年'); ?>所有文章 | <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_month() ) { ?><title><?php the_time('F'); ?>份所有文章 | <?php bloginfo('name'); ?></title><?php } ?>
<?php if ( is_day() ) { ?><title><?php the_time('Y年n月j日'); ?>所有文章 | <?php bloginfo('name'); ?></title><?php } ?>
<?php echo "\n"; ?>
<?php if ( is_single() ) { ?>
<meta name="description" content="<?php $page_id = get_queried_object(); the_field('description',$page_id);?>" />
<meta name="keywords" content="<?php $page_id = get_queried_object(); the_field('keywords',$page_id);?>" />
<?php } ?>
<?php if ( is_page() && !is_front_page() ) { ?>
<meta name="description" content="<?php $page_id = get_queried_object(); the_field('description',$page_id);?>" />
<meta name="keywords" content="<?php $page_id = get_queried_object(); the_field('keywords',$page_id);?>" />
<?php } ?>
<?php if ( is_category() ) { ?>
<meta name="description" content="<?php $page_id = get_queried_object(); the_field('description',$page_id);?>" />
<meta name="keywords" content="<?php $page_id = get_queried_object();  the_field('keywords',$page_id); ?>" />
<?php } ?>
<?php if ( is_tag() ) { ?>
<meta name="description" content="<?php $page_id = get_queried_object(); the_field('description',$page_id);?>" />
<meta name="keywords" content="<?php $page_id = get_queried_object();  the_field('keywords',$page_id); ?>" />
<?php } ?>