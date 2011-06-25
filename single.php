<?php get_header(); ?>

<div id="content">
	<div id="content_head">
		<div class="content_title">
			<h1> <?php the_title(); ?></h1>
		</div>
		<div class="ny_two_column">
			    <div class="ny_column column_first">
				    <p>
					    <strong>简介:</strong><?php the_excerpt(); ?>
				    </p>
			    </div>
			    <div class="ny_column column_second">
				    <p>
					<strong>发布日期：</strong><?php the_time('F j, Y'); ?><br />
					<strong>关于作者：</strong><?php the_modified_author(); ?><?php the_author_description(); ?><br />
					<strong>技术主题：</strong><?php the_category(', ') ?>
				    </p>

			    </div>
		</div>
	</div>



	<div id="contentleft">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php the_content(__('Read more'));?><div style="clear:both;"></div>
				
		<!--
		<?php trackback_rdf(); ?>
		-->
		
		<div class="postmeta">
			<p>Tags: <?php the_tags('') ?> </p>
		</div>
					
		<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		
		<h3>Comments</h3>
		<?php comments_template(); // Get wp-comments.php template ?>
	
	</div>

<?php include(TEMPLATEPATH."/sidebar.php");?>


</div>

<!-- The main column ends  -->

<?php get_footer(); ?>