<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<h1><?php the_title(); ?></h1>
		<?php the_content(__('Read more'));?><div style="clear:both;"></div>
		
		<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
                
                		<h3>添加评论</h3>
		<?php comments_template(); // Get wp-comments.php template ?>
		
	</div>
		
	<?php include(TEMPLATEPATH."/sidebar.php");?>

</div>

<!-- The main column ends  -->

<?php get_footer(); ?>