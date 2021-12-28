<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//------------------підключення додаткових функцій для постов ----------------------
function myfirsttheme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
add_action( 'after_setup_theme', 'myfirsttheme_setup' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
//------------------delet Post Type ----------------------
function remove_menus(){
	// remove_menu_page( 'index.php' );                  //Консоль
	remove_menu_page( 'edit.php' );                   //Записи
	// remove_menu_page( 'upload.php' );                 //Медиафайлы
	// remove_menu_page( 'edit.php?post_type=page' );    //Страницы
	// remove_menu_page( 'edit-comments.php' );          //Комментарии
	// remove_menu_page( 'themes.php' );                 //Внешний вид
	// remove_menu_page( 'users.php' );                  //Пользователи
	// remove_menu_page( 'tools.php' );                  //Инструменты
	// remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menus' );

//------------------чистка від лишнього ----------------------
remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head','wp_generator');  // скрыть версию wordpress
// add_action( 'init', 'true_jquery_register' );
// function true_jquery_register() {
// 	if ( !is_admin() ) {
// 		wp_deregister_script( 'jquery' );
// 		wp_register_script( 'jquery', ( get_template_directory_uri() . '/assets/libs/jquery.min.js' ), false, null, true );
// 		wp_enqueue_script( 'jquery' );
// 	}
// }