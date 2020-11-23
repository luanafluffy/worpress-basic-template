<?php

// Menu e suporte a miniaturas de posts
function themeCreci_menu(){
	register_nav_menus(
		array(
			'menu' => 'Menu'
		)
	);
	$args = array(
		'height' => 300,
		'width'  => 1200
    );
	add_theme_support('post-thumbnails'); //imagem destacada
}
add_action('after_setup_theme', 'themeCreci_menu', 0);


function url_theme(){
	return get_site_url(null, '/wp-content/themes/tema-creci/', 'http');
}