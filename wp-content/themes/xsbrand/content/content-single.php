<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-header">
<h1><?php the_title(); ?></h1>
<div class="single-meta">
<span class="time">时间：<?php the_time('Y-n-j'); ?></span>
<span class="author">作者：<?php the_author(); ?></span>
<span class="bdsharebuttonbox"><span class="pull-left">分享到：</span><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_more" data-cmd="more"></a></span>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
 </div>
</div>

	<div class="entry-content">
			<?php the_content();?> 
				</div>

</article>
				
			
