<?php 
if(get_field('video_embed')) {
	echo '<div class="video-player">';
	echo the_field('video_embed');
	echo '</div>';
} ?>
