<?php 
if(!is_singular()) { $header = 'h3'; } else { $header = 'h2'; }

echo '<'.$header.' class="entry-title">';
	$match = 'matchups';
	if(has_term('',$match)) {
		$terms = get_the_terms( $post->ID, $match );
		foreach ( $terms as $term ) {
			echo '<span class="matchup"><a href="'.get_term_link($term->slug, $match).'">'.$term->name.'</a> </span>';
		}
	}

	if(!is_singular()) {
		echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
	} else {
		the_title(); 
	}
echo '</'.$header.'>';
?>