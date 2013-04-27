<?php
	$match = 'matchups';
	if(has_term('',$match)) {
		$terms = get_the_terms( $post->ID, $match );
		foreach ( $terms as $term ) {
			echo '<span class="matchup"><a href="'.get_term_link($term->slug, $match).'">'.$term->name.'</a> | </span>';
		}
	}

	the_category('| ');
?>