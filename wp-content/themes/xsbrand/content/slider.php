<div class="swiper-container">
<div class="swiper-wrapper">
<?php 
$terms = get_field('sliders','option');
if( $terms ): ?>
	<?php foreach( $terms as $value ): ?>
	<div class="swiper-slide">
	<a href="<?php echo $value['url']?>" title="<?php echo $value['title']?>">
	<img src="<?php echo $value['images']?>" alt="<?php echo $value['title']?>">
	</a>
	</div>
	
	<?php endforeach;?>
	<?php else : ?>
		<div class="swiper-slide">

	<img src="<?php bloginfo('template_url')?>/images/s1.png" >
	
	</div>
	 <?php  endif; ?>
</div>
<!-- Add Pagination -->
        <div class="swiper-pagination big-p1"></div>
        <!-- Add Navigation -->
        <div class="icon-arrows-left icon"></div>
        <div class="icon-arrows-right icon"></div>
</div>
