<?php
//chmando o nosso aquivo customizer.php
require get_template_directory() . '/customizer.php';

function carrega_scripts(){
	// Enfileirando Bootstrap
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
	
	// Enfileirando estilos e scripts próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0', 'all');

	wp_enqueue_style( 'owl.theme.default', get_template_directory_uri() . '/css/owl.theme.default.css', array(), '1.0', 'all');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0', 'all');

	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0', 'all');
	



}


register_nav_menus(
    array(
       'meu_menu_principal' => 'Menu Principal'   
    )
);

add_action('wp_enqueue_scripts', 'carrega_scripts');

add_theme_support('post-thumbnails');  //imagem destacada

register_sidebar(
	array(
		'name'		=> 'Redes sociais',
		'id'		=> 'redes-sociais',
		'description'	=> 'Widgts para redes sociais',
		'before_widget'	=> '<div class="widget-wrapper">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2 class="widget-titulo">',
		'after_title'	=> '</h2>',			
	)
);


?>