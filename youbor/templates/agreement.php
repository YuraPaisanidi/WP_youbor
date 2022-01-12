<?php
	/**
		* Template name: Пользовательское соглашение
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

			<a href="#" class="header__btn btn">
				Авторизация
			</a>

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

		<section class="policy">
			<div class="policy__container container">
		
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<h1 class="h1"><?php the_title(); ?></h1>
	
						<?php the_content(); ?>
	
					<?php endwhile; ?>
					<?php endif; ?>
	
			</div>
		</section>

	</main>

<?php get_footer(); ?>
