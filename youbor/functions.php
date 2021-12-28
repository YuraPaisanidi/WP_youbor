<?php

/**
 * Implement the Script-Style
 */
require get_template_directory() . '/includes/style-script.php';

/**
 * Implement the Additional functions
 */
require get_template_directory() . '/includes/additional-functions.php';

/**
 * Implement the Menu
 */
require get_template_directory() . '/includes/menu.php';

/**
 * Implement the ACF
 */
require get_template_directory() . '/includes/acf.php';

/**
 * Implement the PAGINATION
 */
require get_template_directory() . '/includes/pagination.php';

/**
 * Implement the Breadcrumbs
 */
require get_template_directory() . '/includes/breadcrumbs.php';

/**
 * Implement the Post-type
 */
require get_template_directory() . '/includes/post-type.php';

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
}












