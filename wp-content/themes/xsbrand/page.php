<?php get_header(); ?>
<Section id="content">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3 col-xs-3 sidebar">
<?php get_sidebar();?>
</div>
<div class="col-md-9 col-sm-9 col-xs-9 content">
<?php the_crumbs(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content/content-page'); ?>
<?php endwhile;  endif;?>

</div>




</section>
</div>
<?php get_footer(); ?>
  
  
  
