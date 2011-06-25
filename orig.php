<h1> <?php the_title(); ?></h1>

<div class="date">
	<?php the_time('F j, Y'); ?>  by <?php the_author_posts_link(); ?><br />Filed under: <?php the_category(', ') ?>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?>
</div>