<?php

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('book', array(
		'labels'             => array(
			'name'               => 'Главная', // Основное название типа записи
			'singular_name'      => 'Главная', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую запись',
			'add_new_item'       => 'Добавить новую запись',
			'edit_item'          => 'Редактировать запись',
			'new_item'           => 'Новая запись',
			'view_item'          => 'Посмотреть запись',
			'search_items'       => 'Найти запись',
			'not_found'          =>  'Записей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Главная'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'taxonomies'          => array('category'),
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}
 ?>
