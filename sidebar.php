<!-- begin l_sidebar -->

<div id="l_sidebar">

	<ul id="l_sidebarwidgeted">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
	
		<li id="categories">
		<h2>文章分类</h2>
			<ul>
				<?php wp_list_categories('sort_column=name&title_li='); ?>
			</ul>
		</li>
                
                
                		<li id="recent-posts">
		<h2>最新文章</h2>
			<ul>
				<?php get_archives('postbypost', 5); ?>
			</ul>
		</li>
		

	
		<li id="meta">
		<h2>站点工具</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://www.wordpress.org/">WordPress</a></li>
				<?php wp_meta(); ?>
				<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
			</ul>
		</li>

	<?php endif; ?>
	</ul>
	
</div>

<!-- end l_sidebar -->