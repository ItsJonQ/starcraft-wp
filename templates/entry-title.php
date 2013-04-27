<?php 
if(!is_singular()) { $header = 'h3'; } else { $header = 'h2'; }

echo '<'.$header.' class="entry-title">';
	if(!is_singular()) {
		echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
	} else {
		the_title(); 
	}
echo '</'.$header.'>';
?>