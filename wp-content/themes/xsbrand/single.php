<?php get_header(); ?>
<Section id="content">
<div class="container">
<div class="row">

<div class="col-md-9 col-sm-9 col-xs-12 content">
<?php the_crumbs(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content/content-single'); ?>
<?php endwhile;  endif;?>
<nav id="nav-single" class="clearfix">
		<div class="nav-previous"><?php if (get_previous_post()) { previous_post_link('下一篇: %link');} else {echo "没有了，已经是最后文章";} ?></div>
		<div class="nav-next"><?php if (get_next_post()) { next_post_link('上一篇: %link');} else {echo "没有了，已经是最新文章";} ?></div>
	</nav>
</div>
<div class="col-md-3 col-sm-3 hidden-xs sidebar">
<?php get_sidebar();?>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>
  
  
  

  
