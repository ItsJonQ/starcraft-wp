<?php

	function scwp_post() {
		get_template_part('/templates/post');
	}

	function scwp_terms() {
		get_template_part('templates/taxonomy');
	}

	function scwp_title() {
		get_template_part('templates/entry-title');
	}

	function scwp_video() {
		get_template_part('templates/video');
	}

	function scwp_meta() {
		printf( __( '<span class="sep">By </span><span class="byline author vcard">%5$s</span> on <time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a>', '' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_author() )
		);
	}
?>