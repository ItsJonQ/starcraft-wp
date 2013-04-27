<?php get_header(); ?>

	<div class="content span8">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php scwp_video(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<?php the_category('| ') ?>

				<?php scwp_title(); ?>

				<?php scwp_meta(); ?>

				<div class="entry-content">
					
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>
				
					<?php posted_on(); ?>

				</div>
				
				<?php edit_post_link('Edit this entry','','.'); ?>
				
			</article>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>

	</div>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>