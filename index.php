
<!-- get header.php file -->
<?php get_header(); ?>
<div class="content">
<!-- run the Wordpress loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post-container">
		<h2 class="post-title"><?php the_title(); ?></h2>
		<h4 class="post-info">Posted on <?php the_time('F jS, Y') ?></h4>
		<p class="post-content"><?php the_content(__('(more...)')); ?></p>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>


<!-- get sidebar.php file -->
<?php get_sidebar(); ?>

<!-- get footer.php file -->
<?php get_footer(); ?>

<!-- Activate toolbar when logged in -->
<?php wp_footer(); ?> 

