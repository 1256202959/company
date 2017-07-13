<section id="footer">

<div class="container">

<div class="row">
<div class="col-md-7 col-xs-12 col-sm-6">
<div class="link"><h3>友情链接</h3><ul><?php wp_list_bookmarks('title_li=&categorize=0'); ?></ul></div>
<div class="copyr">
<p>Copyright © 2017 <a href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> All Rights Reserved <a target="_blank" href="http://www.miibeian.gov.cn/" rel="nofollow"><?php the_field('icp','option') ?></a><?php the_field('tjgj','option') ?></p>
</div>
</div>
<div class="col-md-5 col-sm-6 hidden-xs">
<div class="sns clearfix">
 <a href="<?php bloginfo('url')?>/sitemap.html" alt="网站地图" target="_blank"><i class="fa fa-sitemap"></i></a>
 <a href="<?php the_field('weibo','option') ?>" alt="新浪微博" target="_blank" rel="nofollow"><i class="fa fa-weibo"></i></a> 
 <a rel="nofollow" target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php the_field('qq','option') ?>&amp;site=qq&amp;menu=yes"><i class="fa fa-qq"></i></a> 
 <a href="javascript:void(0);" alt="官方微信" class="wechat"><i class="fa fa-wechat"></i>
 <div class="img-wechat" style="display: none;"><img src="<?php the_field('wechat','option') ?>" alt="扫一扫"><span class="text">扫一扫 有惊喜</span></div>
 </a> 

 </div>
	<div class="btm-search">
	<form class="pull-right" method="get" action="<?php bloginfo('url'); ?>" >
	<input type="text" name="s" class="text" autocomplete="off"  placeholder="输入搜索内容">
	<button class="btn-search"> <i class="fa fa-search"></i></button>
	</form>
	</div>
</div>
</div>
</div>
</section>

<?php wp_footer(); ?>
</body>
</html>