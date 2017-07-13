
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row">
	<figure class="entry-img col-md-4 col-sm-4 col-xs-6"> 


<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
	 <img  src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo post_thumbnail_src(); ?>&h=250&w=400&zc=1" alt="<?php the_title(); ?>" />
			</a>
		</figure>
		<div class="entry-content col-md-8 col-sm-8 col-xs-6">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="entry-des hidden-xs">
				<?php the_excerpt(); ?></div>
						<div class="entry-meta">
				
		    <div class="time fl hidden-xs"><i class="fa fa-calendar-check-o"></i> <a href="javascript:void(0);"><?php the_time('Y /n/j G:i'); ?></a></div>
			
	
		</div>
	
		</div>
	
</div>

</article>
