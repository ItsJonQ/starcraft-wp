<?php get_header(); ?>

	<div id="content" class="content span8">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php get_template_part('/templates/post'); ?>

	<?php endwhile; ?>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
