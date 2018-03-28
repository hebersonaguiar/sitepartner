<?php
	//ativando suporte a imagem destacada
	add_theme_support( 'post-thumbnails' );	

	//ativando menus dinamicos
	function register_menu(){
		register_nav_menus(
			array(
					'header-menu' => __('Menu Topo')
			)
		);
	}
	add_action( 'init', 'register_menu' );