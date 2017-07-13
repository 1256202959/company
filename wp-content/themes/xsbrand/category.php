<?php get_header(); ?>
<Section id="content">
<div class="container">
<div class="row">
<div class="col-md-9 col-sm-9 col-xs-12 content-list">
<?php the_crumbs(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content/content', get_post_format() ); ?>
<?php endwhile;  endif;?>
<?php wpdx_paging_nav();?>
</div>
<div class="col-md-3 col-sm-3 hidden-xs sidebar">
<?php get_sidebar();?>
</div>
</div>
</section>
</div>
<?php get_footer(); ?>
  
  
  

  
  
