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

	//posts types
	function posts_types(){
		//especialidades
		register_post_type('especialidades',
			array(
				'labels' 			=> array(
					'name' 			=> __('Especialidades'),
					'singular_name' => __('Especialidade')
					),
				'public' 		=> true,
				'has_archive' 	=> true,
				'menu_icon'		=> 'dashicons-heart',
				'supports'		=> array('title', 'editor', 'thumbnail', 'page-attributes'),
			)
		);
	}
	add_action( 'init', 'posts_types' );