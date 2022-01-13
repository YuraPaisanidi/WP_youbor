<?php get_header(); ?>

<header class="header header--dark">
	<div class="header__container container">

		<div class="header__wrap">
			<a href="/" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
			</a>

			<div class="header__search">
				<?php echo do_shortcode( '[aws_search_form]' ); ?>
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

			<div class="header__auth">
				<a href="<?php echo get_home_url(); ?>/login" class="header__btn header__btn--auth btn">
					Авторизация
				</a>
				<a href="<?php echo get_home_url(); ?>/my-account" class="header__btn header__btn--profile btn hidden">
					Мой аккаунт
				</a>
				<?php 
					wp_nav_menu( array(
						'menu'=>'user_menu',
						'menu_class'=>'header__auth_submenu',
							'theme_location'=>'menu',
					) );
				?>
			</div>

			<button class="hamburger" type="button">
				<span class="hamburger__item"></span>
			</button>
		</div>

		<div class="header__search header__search--mobile">
			<?php echo do_shortcode( '[aws_search_form]' ); ?>
		</div>
	</div>

</header>

<main class="main">

	<section class="article">
		<div class="article__container">

			<div class="article__bread">
				<a href="<?php echo get_home_url(); ?>/news" class="article__link">
					<span></span>
					К новостям
				</a>
			</div>

			<div class="article__wrap">
				<?php the_field('news'); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>