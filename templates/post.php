<?php scwp_video(); ?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<?php scwp_terms(); ?>

	<?php scwp_title(); ?>

	<?php scwp_meta(); ?>

	<div class="entry">
		<?php the_content(); ?>
	</div>

	<div class="postmetadata">
		<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
	</div>

</article>