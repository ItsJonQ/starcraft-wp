<?php

function add_custom_taxonomies() {

	register_taxonomy('maps', 'post', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Maps', 'taxonomy general name' ),
			'singular_name' => _x( 'Map', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Maps' ),
			'all_items' => __( 'All Maps' ),
			'parent_item' => __( 'Parent Map' ),
			'parent_item_colon' => __( 'Parent Map:' ),
			'edit_item' => __( 'Edit Map' ),
			'update_item' => __( 'Update Map' ),
			'add_new_item' => __( 'Add New Map' ),
			'new_item_name' => __( 'New Map Name' ),
			'menu_name' => __( 'Maps' ),
		),
		'rewrite' => array(
			'slug' => 'maps',
			'with_front' => false,
			'hierarchical' => true
		),
	));

	register_taxonomy('casters', 'post', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Casters', 'taxonomy general name' ),
			'singular_name' => _x( 'Caster', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Casters' ),
			'all_items' => __( 'All Casters' ),
			'parent_item' => __( 'Parent Caster' ),
			'parent_item_colon' => __( 'Parent Caster:' ),
			'edit_item' => __( 'Edit Caster' ),
			'update_item' => __( 'Update Caster' ),
			'add_new_item' => __( 'Add New Caster' ),
			'new_item_name' => __( 'New Caster Name' ),
			'menu_name' => __( 'Casters' ),
		),
		'rewrite' => array(
			'slug' => 'casters',
			'with_front' => false,
			'hierarchical' => true
		),
	));

	register_taxonomy('matchups', 'post', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Matchups', 'taxonomy general name' ),
			'singular_name' => _x( 'Matchup', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Matchups' ),
			'all_items' => __( 'All Matchups' ),
			'parent_item' => __( 'Parent Matchup' ),
			'parent_item_colon' => __( 'Parent Matchup:' ),
			'edit_item' => __( 'Edit Matchup' ),
			'update_item' => __( 'Update Matchup' ),
			'add_new_item' => __( 'Add New Matchup' ),
			'new_item_name' => __( 'New Matchup Name' ),
			'menu_name' => __( 'Matchups' ),
		),
		'rewrite' => array(
			'slug' => 'matchups',
			'with_front' => false,
			'hierarchical' => true
		),
	));

	register_taxonomy('players', 'post', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Players', 'taxonomy general name' ),
			'singular_name' => _x( 'Player', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Players' ),
			'all_items' => __( 'All Players' ),
			'parent_item' => __( 'Parent Player' ),
			'parent_item_colon' => __( 'Parent Player:' ),
			'edit_item' => __( 'Edit Player' ),
			'update_item' => __( 'Update Player' ),
			'add_new_item' => __( 'Add New Player' ),
			'new_item_name' => __( 'New Player Name' ),
			'menu_name' => __( 'Players' ),
		),
		'rewrite' => array(
			'slug' => 'players',
			'with_front' => false,
			'hierarchical' => true
		),
	));

	register_taxonomy('series', 'post', array(
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Series', 'taxonomy general name' ),
			'singular_name' => _x( 'Series', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Series' ),
			'all_items' => __( 'All Series' ),
			'parent_item' => __( 'Parent Series' ),
			'parent_item_colon' => __( 'Parent Series:' ),
			'edit_item' => __( 'Edit Series' ),
			'update_item' => __( 'Update Series' ),
			'add_new_item' => __( 'Add New Series' ),
			'new_item_name' => __( 'New Series Name' ),
			'menu_name' => __( 'Series' ),
		),
		'rewrite' => array(
			'slug' => 'series',
			'with_front' => false,
			'hierarchical' => true
		),
	));

}

add_action( 'init', 'add_custom_taxonomies', 0 );

?>