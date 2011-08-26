<?php
/*
 Template name:TechTheme
 */
?>


<?php get_header(); ?>

<div id="content">
	<div id="contentleft">

		<h2>Linux系列</h2>
		<p>折腾你所愿意折腾的，明白你所需要明白的。折腾Linux的你，肯定是一个充满好奇和激情的人。</p>
		<?php query_posts('category_name=Linux&showposts=15');?>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink() ?>"rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;?>


		<h2>ARM/MIPS/X86</h2>
		<p>CPU体系架构，这家伙可是一门基本功，是所有武功的宗师，相当与江湖流传的《易筋经》。</p>
		<?php query_posts('category_name=cpu体系架构&showposts=15');?>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink() ?>"rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;?>


		<h2>嵌入式开发</h2>
		<p>嵌入式千变万化，各式各样，要做到融会贯通，举一反三，实属不易。需要总结，再总结……</p>
		<?php query_posts('category_name=嵌入式开发&showposts=15');?>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink() ?>"rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;?>


		<h2>Android</h2>
		<p>现在就属它最火，折腾Linux的人，怎么会不喜欢Android呢？</p>
		<?php query_posts('category_name=Android&showposts=15');?>
		<?php while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink() ?>"rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile;?>

	</div>

	<?php include(TEMPLATEPATH."/sidebar.php");?>
</div>




<!-- The main column ends  -->

<?php get_footer(); ?>
