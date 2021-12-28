<?php get_header(); ?>

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

			<a href="#" class="header__btn btn">
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

<main class="main">

	<section class="article">
		<div class="article__container">

			<div class="article__bread">
				<a href="<?php echo get_home_url(); ?>/action" class="article__link">
					<span></span>
					К акциям
				</a>
			</div>

			<div class="article__wrap">
				<?php the_field('action'); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>