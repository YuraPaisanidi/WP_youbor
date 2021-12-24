<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<meta name="description" content="youbor.uz">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<link rel="stylesheet" href="css/app.min.css?v=1">
	<script src="js/app.min.js" defer></script>

	<?php wp_head(); ?>

</head>

<body>

	<?php get_template_part( 'parts/header' ); ?>

