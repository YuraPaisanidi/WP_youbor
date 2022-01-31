<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//--------------------------Remove fields in account-----------------------
add_filter ( 'woocommerce_account_menu_items', 'misha_remove_my_account_links' );
function misha_remove_my_account_links( $menu_links ){
    unset( $menu_links['edit-address'] ); // Адреса
    unset( $menu_links['dashboard'] ); // Инструментальная панель
    unset( $menu_links['payment-methods'] ); // Способ оплаты
    //unset( $menu_links['orders'] ); // Заказы
    unset( $menu_links['downloads'] ); // Загрузки
    //unset( $menu_links['edit-account'] ); // Детали аккаунта
    //unset( $menu_links['customer-logout'] ); // Выход
 
    return $menu_links;
 
}


/**
 * Rename WooCommerce MyAccount menu items
 */
add_filter( 'woocommerce_account_menu_items', 'rename_menu_items' );
function rename_menu_items( $items ) {

    // $items['downloads']    = 'Download MP3s';
    $items['orders']       = 'Заказы';
    $items['edit-account'] = 'Профиль';

    return $items;
}

//------------------------------Redirect after login-----------------------
add_filter( 'woocommerce_login_redirect', 'truemisha_login_redirect', 25, 2 );
 
function truemisha_login_redirect( $redirect, $user ) {
 
	$redirect = site_url();
	return $redirect;
 
}

