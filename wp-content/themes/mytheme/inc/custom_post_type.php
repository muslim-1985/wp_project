<?php
//таксономия страницы "главная"
add_action( 'init', 'create_book_taxonomies', 0 );
// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_taxonomies(){
	// определяем заголовки для 'genre'
	$labels = array(
		'name' => _x( 'Категории', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
		'search_items' =>  __( 'Найти Категории' ),
		'all_items' => __( 'Все категории' ),
		'parent_item' => __( 'Родительская категория' ),
		'parent_item_colon' => __( 'Родительская категория:' ),
		'edit_item' => __( 'Изменить Категорию' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить новую категорию' ),
		'new_item_name' => __( 'Имя новой категории' ),
		'menu_name' => __( 'Категория' ),
	);
	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('genre', array('book'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'genre' ),
	));
}

//таксономия страницы "компания"
add_action( 'init', 'create_book_taxonomies1', 0 );
// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_taxonomies1(){
	// определяем заголовки для 'genre'
	$labels = array(
		'name' => _x( 'Категории', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
		'search_items' =>  __( 'Найти Категории' ),
		'all_items' => __( 'Все категории' ),
		'parent_item' => __( 'Родительская категория' ),
		'parent_item_colon' => __( 'Родительская категория:' ),
		'edit_item' => __( 'Изменить Категорию' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить новую категорию' ),
		'new_item_name' => __( 'Имя новой категории' ),
		'menu_name' => __( 'Категория' ),
	);

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('cat', array('company'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'cat' ),
	));
}



//таксономия страницы "сервис"
add_action( 'init', 'create_book_taxonomies2', 0 );
// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_taxonomies2(){
	// определяем заголовки для 'genre'
	$labels = array(
		'name' => _x( 'Категории', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
		'search_items' =>  __( 'Найти Категории' ),
		'all_items' => __( 'Все категории' ),
		'parent_item' => __( 'Родительская категория' ),
		'parent_item_colon' => __( 'Родительская категория:' ),
		'edit_item' => __( 'Изменить Категорию' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить новую категорию' ),
		'new_item_name' => __( 'Имя новой категории' ),
		'menu_name' => __( 'Категория' ),
	);

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('cat1', array('services'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'cat1' ),
	));
}


//таксономия страницы "продукция"
add_action( 'init', 'create_book_taxonomies3', 0 );
// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_taxonomies3(){
	// определяем заголовки для 'genre'
	$labels = array(
		'name' => _x( 'Категории', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
		'search_items' =>  __( 'Найти Категории' ),
		'all_items' => __( 'Все категории' ),
		'parent_item' => __( 'Родительская категория' ),
		'parent_item_colon' => __( 'Родительская категория:' ),
		'edit_item' => __( 'Изменить Категорию' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить новую категорию' ),
		'new_item_name' => __( 'Имя новой категории' ),
		'menu_name' => __( 'Категория' ),
	);

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('cat2', array('products'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'cat2' ),
	));
}


//таксономия страницы "проектирование"
add_action( 'init', 'create_book_taxonomies4', 0 );
// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_taxonomies4(){
	// определяем заголовки для 'genre'
	$labels = array(
		'name' => _x( 'Категории', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
		'search_items' =>  __( 'Найти Категории' ),
		'all_items' => __( 'Все категории' ),
		'parent_item' => __( 'Родительская категория' ),
		'parent_item_colon' => __( 'Родительская категория:' ),
		'edit_item' => __( 'Изменить Категорию' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить новую категорию' ),
		'new_item_name' => __( 'Имя новой категории' ),
		'menu_name' => __( 'Категория' ),
	);

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('cat3', array('project'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'cat3' ),
	));
}


//таксономия страницы "поддержка"
add_action( 'init', 'create_book_taxonomies5', 0 );
// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_taxonomies5(){
	// определяем заголовки для 'genre'
	$labels = array(
		'name' => _x( 'Категории', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
		'search_items' =>  __( 'Найти Категории' ),
		'all_items' => __( 'Все категории' ),
		'parent_item' => __( 'Родительская категория' ),
		'parent_item_colon' => __( 'Родительская категория:' ),
		'edit_item' => __( 'Изменить Категорию' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить новую категорию' ),
		'new_item_name' => __( 'Имя новой категории' ),
		'menu_name' => __( 'Категория' ),
	);

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('cat4', array('support'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'cat4' ),
	));
}


//таксономия страницы "котакты"
add_action( 'init', 'create_book_taxonomies6', 0 );
// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_taxonomies6(){
	// определяем заголовки для 'genre'
	$labels = array(
		'name' => _x( 'Категории', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
		'search_items' =>  __( 'Найти Категории' ),
		'all_items' => __( 'Все категории' ),
		'parent_item' => __( 'Родительская категория' ),
		'parent_item_colon' => __( 'Родительская категория:' ),
		'edit_item' => __( 'Изменить Категорию' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить новую категорию' ),
		'new_item_name' => __( 'Имя новой категории' ),
		'menu_name' => __( 'Категория' ),
	);

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('cat5', array('contacts'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'cat5' ),
	));
}



//таксономия карусели
add_action( 'init', 'create_book_taxonomies7', 0 );
// функция, создающая 2 новые таксономии "genres" и "writers" для постов типа "book"
function create_book_taxonomies7(){
	// определяем заголовки для 'genre'
	$labels = array(
		'name' => _x( 'Категории', 'taxonomy general name' ),
		'singular_name' => _x( 'Категория', 'taxonomy singular name' ),
		'search_items' =>  __( 'Найти Категории' ),
		'all_items' => __( 'Все категории' ),
		'parent_item' => __( 'Родительская категория' ),
		'parent_item_colon' => __( 'Родительская категория:' ),
		'edit_item' => __( 'Изменить Категорию' ),
		'update_item' => __( 'Обновить категорию' ),
		'add_new_item' => __( 'Добавить новую категорию' ),
		'new_item_name' => __( 'Имя новой категории' ),
		'menu_name' => __( 'Категория' ),
	);

	// Добавляем древовидную таксономию 'genre' (как категории)
	register_taxonomy('cat6', array('carousel'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'cat6' ),
	));
}

add_action('init', 'my_custom_carousel');
function my_custom_carousel(){
	register_post_type('carousel', array(
		'labels'             => array(
			'name'               => 'Карусель', // Основное название типа записи
			'singular_name'      => 'Карусель', // отдельное название записи типа Book
			'add_new'            => 'Добавить новое изображение',
			'add_new_item'       => 'Добавить новое изображение',
			'edit_item'          => 'Редактировать изображение',
			'new_item'           => 'Новое изображение',
			'view_item'          => 'Посмотреть изображение',
			'search_items'       => 'Найти запись',
			'not_found'          =>  'Записей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Карусель'

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
    'taxonomies'          => array('cat6'),
		'supports'           => array('thumbnail')
	) );
}

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
    'taxonomies'          => array('genre'),
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}


add_action('init', 'my_custom_init1');
function my_custom_init1(){
	register_post_type('company', array(
		'labels'             => array(
			'name'               => 'Компания', // Основное название типа записи
			'singular_name'      => 'Компания', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую запись',
			'add_new_item'       => 'Добавить новую запись',
			'edit_item'          => 'Редактировать запись',
			'new_item'           => 'Новая запись',
			'view_item'          => 'Посмотреть запись',
			'search_items'       => 'Найти запись',
			'not_found'          =>  'Записей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Компания'

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
    'taxonomies'          => array('cat'),
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	));

		// определяем заголовки для 'writer'
		$labels = array(
			'name' => _x( 'Метки', 'taxonomy general name' ),
			'singular_name' => _x( 'Метки', 'taxonomy singular name' ),
			'search_items' =>  __( 'Поиск меток' ),
			'popular_items' => __( 'Популярные метки' ),
			'all_items' => __( 'Все метки' ),
			'parent_item' => null,
			'parent_item_colon' => null,
			'edit_item' => __( 'Изменить метку' ),
			'update_item' => __( 'Обновить метку' ),
			'add_new_item' => __( 'Добавить новую метку' ),
			'new_item_name' => __( 'Название новой метки' ),
			'separate_items_with_commas' => __( 'Separate writers with commas' ),
			'add_or_remove_items' => __( 'Добавление или удаление метки' ),
			'choose_from_most_used' => __( 'Выберите наиболее используемые метки' ),
			'menu_name' => __( 'Метки' ),
		);

		// Добавляем НЕ древовидную таксономию 'writer' (как метки)
		register_taxonomy('writer', 'company',array(
			'hierarchical' => false,
			'labels' => $labels,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'writer' ),
		));
}


add_action('init', 'my_custom_init2');
function my_custom_init2(){
	register_post_type('services', array(
		'labels'             => array(
			'name'               => 'Сервис', // Основное название типа записи
			'singular_name'      => 'Сервис', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую запись',
			'add_new_item'       => 'Добавить новую запись',
			'edit_item'          => 'Редактировать запись',
			'new_item'           => 'Новая запись',
			'view_item'          => 'Посмотреть запись',
			'search_items'       => 'Найти запись',
			'not_found'          =>  'Записей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Сервис'

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
    'taxonomies'          => array('cat1'),
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );

			// определяем заголовки для 'writer'
			$labels = array(
				'name' => _x( 'Метки', 'taxonomy general name' ),
				'singular_name' => _x( 'Метки', 'taxonomy singular name' ),
				'search_items' =>  __( 'Поиск меток' ),
				'popular_items' => __( 'Популярные метки' ),
				'all_items' => __( 'Все метки' ),
				'parent_item' => null,
				'parent_item_colon' => null,
				'edit_item' => __( 'Изменить метку' ),
				'update_item' => __( 'Обновить метку' ),
				'add_new_item' => __( 'Добавить новую метку' ),
				'new_item_name' => __( 'Название новой метки' ),
				'separate_items_with_commas' => __( 'Separate writers with commas' ),
				'add_or_remove_items' => __( 'Добавление или удаление метки' ),
				'choose_from_most_used' => __( 'Выберите наиболее используемые метки' ),
				'menu_name' => __( 'Метки' ),
			);

			// Добавляем НЕ древовидную таксономию 'writer' (как метки)
			register_taxonomy('writer1', 'services',array(
				'hierarchical' => false,
				'labels' => $labels,
				'show_ui' => true,
				'query_var' => true,
				'rewrite' => array( 'slug' => 'writer1' ),
			));
}


add_action('init', 'my_custom_init3');
function my_custom_init3(){
	register_post_type('products', array(
		'labels'             => array(
			'name'               => 'Продукция', // Основное название типа записи
			'singular_name'      => 'Продукция', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую запись',
			'add_new_item'       => 'Добавить новую запись',
			'edit_item'          => 'Редактировать запись',
			'new_item'           => 'Новая запись',
			'view_item'          => 'Посмотреть запись',
			'search_items'       => 'Найти запись',
			'not_found'          =>  'Записей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Продукция'

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
    'taxonomies'          => array('cat2'),
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}

add_action('init', 'my_custom_init4');
function my_custom_init4(){
	register_post_type('project', array(
		'labels'             => array(
			'name'               => 'Проектирование', // Основное название типа записи
			'singular_name'      => 'Проектирование', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую запись',
			'add_new_item'       => 'Добавить новую запись',
			'edit_item'          => 'Редактировать запись',
			'new_item'           => 'Новая запись',
			'view_item'          => 'Посмотреть запись',
			'search_items'       => 'Найти запись',
			'not_found'          =>  'Записей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Проектирование'

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
    'taxonomies'          => array('cat3'),
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}


add_action('init', 'my_custom_init5');
function my_custom_init5(){
	register_post_type('support', array(
		'labels'             => array(
			'name'               => 'Поддержка', // Основное название типа записи
			'singular_name'      => 'Поддержка', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую запись',
			'add_new_item'       => 'Добавить новую запись',
			'edit_item'          => 'Редактировать запись',
			'new_item'           => 'Новая запись',
			'view_item'          => 'Посмотреть запись',
			'search_items'       => 'Найти запись',
			'not_found'          =>  'Записей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Поддержка'

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
    'taxonomies'          => array('cat4'),
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}


add_action('init', 'my_custom_init6');
function my_custom_init6(){
	register_post_type('contacts', array(
		'labels'             => array(
			'name'               => 'Контакты', // Основное название типа записи
			'singular_name'      => 'Контакты', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую запись',
			'add_new_item'       => 'Добавить новую запись',
			'edit_item'          => 'Редактировать запись',
			'new_item'           => 'Новая запись',
			'view_item'          => 'Посмотреть запись',
			'search_items'       => 'Найти запись',
			'not_found'          =>  'Записей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Контакты'

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
    'taxonomies'          => array('cat5'),
		'supports'           => array('title','editor','author','thumbnail','excerpt')
	) );
}
 ?>
