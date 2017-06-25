<?php
add_action('after_setup_theme', 'mytheme_setup');
function mytheme_setup() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_theme_support('post-formats', array(
    'aside',
    'image',
    'video',
    'gallery'
  ));
  register_nav_menu('primary', 'главное меню');
}


function true_register_wp_sidebars() {
	register_sidebar(
		array(
			'id' => 'true_side', // уникальный id
			'name' => 'Левая колонка', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в левую колонку.', // описание
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'true_foot',
			'name' => 'Правая колонка',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в правую колонку.',
			'before_widget' => '<div id="%1$s" class="foot widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
add_action( 'widgets_init', 'true_register_wp_sidebars' );

add_action('wp_enqueue_scripts', 'mytheme_scripts');
function mytheme_scripts() {
  wp_enqueue_style('style-css', get_stylesheet_uri());
  wp_enqueue_style('grid', get_template_directory_uri() . '/css/grid.css');
  wp_enqueue_style('grid', get_template_directory_uri() . '/css/reset.css');
  wp_enqueue_script('html5', get_template_directory_uri() . '/js/html5.js');
  wp_enqueue_script('jquery');
  wp_enqueue_script('roundabout_shapes', get_template_directory_uri() . '/js/roundabout_shapes.js');
  wp_enqueue_script('roundabout', get_template_directory_uri() . '/js/roundabout.js');
}
 ?>
