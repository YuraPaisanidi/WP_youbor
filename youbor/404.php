<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package youbor
 */

get_header();
?>

<header class="header header--dark">
	<div class="header__container container">

		<div class="header__wrap">
			<a href="/" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
			</a>

			<div class="header__search">
				<input type="text" name="search" placeholder="Найдите свою звезду">
			</div>

			<div class="header__lang">
				<div class="header__lang_item">
					<span>RU</span>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow.svg" alt="">
				</div>
				<ul class="header__lang_submenu">
					<li>
						<a href="#">UZ</a>
					</li>
				</ul>
			</div>

			<a href="" class="header__btn btn">
				Авторизация
			</a>

			<button class="hamburger" type="button">
				<span class="hamburger__item"></span>
			</button>
		</div>

		<div class="header__search header__search--mobile">
			<input type="text" name="search" placeholder="Найдите свою звезду">
		</div>
	</div>
</header>

<section class="error404">
	<div class="container">

		<div class="error404__description">
			<h1 class="error404__title h1"><?php esc_html_e( 'Cтраница не найдена "404"', 'schoolstudy' ); ?></h1>
			<div class="error404__btn">
				<a href="<?php echo get_home_url(); ?>">На главную</a>
			</div>
		</div>

	</div>
</section>

<?php
get_footer();
