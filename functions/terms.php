<?php

function add_custom_terms_casters() {
	wp_insert_term('Day9','casters',
	  array(
	    'slug' 			=> 'day9'
	));
	wp_insert_term('TotalBiscuit','casters',
	  array(
	    'slug' 			=> 'total-biscuit'
	));
}

function add_custom_terms_maps() {
	wp_insert_term('Cloud Kingdom','maps',
	  array(
	    'slug' 			=> 'cloud-kingdom'
	));
	wp_insert_term('Ohana','maps',
	  array(
	    'slug' 			=> 'ohana'
	));
}

function add_custom_terms_matchups() {
	wp_insert_term('ZvZ','matchups',
	  array(
	    'description'	=> 'Zerg vs Zerg',
	    'slug' 			=> 'zvz'
	));
	wp_insert_term('TvZ','matchups',
	  array(
	    'description'	=> 'Terran vs Zerg',
	    'slug' 			=> 'tvz'
	));
	wp_insert_term('PvZ','matchups',
	  array(
	    'description'	=> 'Protoss vs Zerg',
	    'slug' 			=> 'pvz'
	));
	wp_insert_term('PvT','matchups',
	  array(
	    'description'	=> 'Protoss vs Terran',
	    'slug' 			=> 'pvt'
	));
	wp_insert_term('PvP','matchups',
	  array(
	    'description'	=> 'Protoss vs Protoss',
	    'slug' 			=> 'pvp'
	));
	wp_insert_term('TvT','matchups',
	  array(
	    'description'	=> 'Terran vs Terran',
	    'slug' 			=> 'tvt'
	));
}

function add_custom_terms_players() {
// Example Teams
	wp_insert_term('Acer','players',
	  array(
	    'description'	=> 'Team Acer',
	    'slug' 			=> 'acer'
	));
	wp_insert_term('ROOT','players',
	  array(
	    'description'	=> 'Team ROOT Gaming',
	    'slug' 			=> 'root'
	));
	wp_insert_term('SlayerS','players',
	  array(
	    'description'	=> 'Team SlayerS',
	    'slug' 			=> 'slayers'
	));

// Example Players
	// Defining The Team IDs
		$teamAcer_te = term_exists( 'acer', 'players' );
		$teamAcer = $teamAcer_te['term_id'];

		$teamROOT_te = term_exists( 'root', 'players' );
		$teamROOT = $teamROOT_te['term_id']; 

		$teamSlayerS_te = term_exists( 'slayers', 'players' );
		$teamSlayerS = $teamSlayerS_te['term_id']; 

	// Inserting the Players Under Their Teams
		wp_insert_term('Scarlett','players',
		  array(
		    'slug' 			=> 'scarlett',
		    'parent'		=> $teamAcer
		));
		wp_insert_term('CatZ','players',
		  array(
		    'slug' 			=> 'catz',
		    'parent'		=> $teamROOT
		));
		wp_insert_term('BoxeR','players',
		  array(
		    'slug' 			=> 'boxer',
		    'parent'		=> $teamSlayerS
		));
}

function add_custom_terms_series() {
// Example Series
	wp_insert_term('IPL','series',
	  array(
	    'slug' 			=> 'ipl'
	));
	wp_insert_term('MLG','series',
	  array(
	    'slug' 			=> 'mlg'
	));

// Example Series Events
	// Defining The Series IDs
		$IPL_te = term_exists( 'ipl', 'series' );
		$IPL = $IPL_te['term_id'];

		$MLG_te = term_exists( 'mlg', 'series' );
		$MLG = $MLG_te['term_id'];

	// Inserting the Series Events
		wp_insert_term('IPL 5','series',
		  array(
		    'slug' 			=> 'ipl-5',
		    'parent'		=> $IPL
		));

		wp_insert_term('MLG Dallas 2013','series',
		  array(
		    'slug' 			=> 'mlg-dallas-2013',
		    'parent'		=> $MLG
		));
}

add_action( 'init', 'add_custom_terms_casters', 0 );
add_action( 'init', 'add_custom_terms_matchups', 0 );
add_action( 'init', 'add_custom_terms_maps', 0 );
add_action( 'init', 'add_custom_terms_players', 0 );
add_action( 'init', 'add_custom_terms_series', 0 );

?>