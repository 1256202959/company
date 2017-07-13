<?php get_header(); ?>
<!-- 幻灯片 -->
<section id="slider" class="container-full">
<?php get_template_part( 'content/slider' ); ?>
</section>
<!-- 幻灯片结束 -->
<Section id="content">
<div class="container">
<div class="row">
<div class="col-md-4 col-xs-12 col-sm-6">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a href="#home" aria-controls="idx-about" role="tab" data-toggle="tab">公司介绍</a></li>
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="idx-about">
         <div class="media">
                     <?php the_field('intro','option') ?>                 
                    </div>
                </div>
            </div>
 <ul class="nav nav-tabs" role="tablist">
         <li role="presentation" class="active"><a href="#idxcontact" aria-controls="idxcontact" role="tab" data-toggle="tab" aria-expanded="false">联系我们</a></li>
 </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active text-muted" id="idxcontact">
                     <?php the_field('contact','option') ?>
                </div>
            </div>     
 </div>
			<div class="col-md-5 col-xs-12 col-sm-6">
            <?php $cate1 = get_field('news1','option');$cate2 = get_field('news2','option');$cate3 = get_field('news3','option');?>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#idxnews" aria-controls="idxNews" role="tab" data-toggle="tab" aria-expanded="true"><?php echo $cate1->name; ?></a></li>
                    <li role="presentation" class=""><a href="#idxnotice" aria-controls="idxNotice" role="tab" data-toggle="tab" aria-expanded="false"><?php echo $cate2->name; ?></a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="idxnews">

                        <ul>
                          <?php 
						$args = array(
						'posts_per_page' => 10,      // 显示多少条
						'orderby' => 'date',         // 时间排序
						'order' => 'desc',           // 降序（递减，由大到小）    
						'ignore_sticky_posts' => 1	,
						'category__in' => $cate1->term_id,
					);
					query_posts($args); while (have_posts()) : the_post();?>
								<li> <a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title(); ?>"><em></em>
								<?php echo wp_trim_words( get_the_title(), 25 ); ?><span><?php the_time('y-m-d')?></span></a> 
								</li>
									<?php endwhile; wp_reset_query(); ?>
                        </ul>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="idxnotice">
                        <ul>
                          <?php 
						$args = array(
						'posts_per_page' => 10,      // 显示多少条
						'orderby' => 'date',         // 时间排序
						'order' => 'desc',           // 降序（递减，由大到小）    
						'ignore_sticky_posts' => 1	,
						'category__in' => $cate2->term_id,
					);
					query_posts($args); while (have_posts()) : the_post();?>
								<li><a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title(); ?>"><em></em> 
								<?php echo wp_trim_words( get_the_title(), 25 ); ?><span><?php the_time('y-m-d')?></span></a> 
								</li>
									<?php endwhile; wp_reset_query(); ?>
                        </ul>
                    </div>
                </div>
               
            </div>
<div class="col-md-3 hidden-xs hidden-sm"> 
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="idx-about" role="tab" data-toggle="tab"><?php echo $cate3->name; ?></a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="idx-images">
                     <div class="swiper-container">
					<div class="swiper-wrapper">
                          <?php 
						$args = array(
						'posts_per_page' => 3,      // 显示多少条
						'orderby' => 'date',         // 时间排序
						'order' => 'desc',           // 降序（递减，由大到小）    
						'ignore_sticky_posts' => 1	,
						'category__in' => $cate3->term_id,
					);query_posts($args);?>
					 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<div class="swiper-slide">

	 <a href="<?php the_permalink(); ?>"  title="详细阅读 <?php the_title(); ?>">
	 <img  src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&h=290&w=262&zc=1" alt="<?php the_title(); ?>" />
	 </a> 
	 <div class="shadow"></div>
	<p><a class="banner-title" href="<?php the_permalink(); ?>"  title="详细阅读 <?php the_title(); ?>"><?php the_title(); ?></a></p>	  
  </div>						
                       <?php endwhile; ?>
<?php else : ?>
<?php endif; wp_reset_query(); ?>
                </div><div class="swiper-pagination big-p1"></div>
            </div>
            </div>
</div>
</div>
</section>
<?php get_footer();?>



  
  
  
