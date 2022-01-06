<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

<header class="header">
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

<main class="main main--index">
		
	<section class="hero">

		<?php if( have_rows('hero_slider') ): ?>
			<div class="swiper hero__slider heroSlider">
				<div class="swiper-wrapper hero__wrapper heroWrapper">
					<?php while( have_rows('hero_slider') ): the_row(); 
					$text = get_sub_field('text');
					$img = get_sub_field('img');
					$modal_id = get_sub_field('modal_id');
					?>

					<div class="swiper-slide hero__slide hero__slide--1 heroSlide" style="background-image:url(<?php echo $img; ?>)">
						<div class="hero__text">
							<h1 class="h1 hero__title"><?php echo $text; ?></h1>
							<a href="#" class="hero__btn btn <?php echo $modal_id; ?>">Узнать</a>
						</div>
					</div>

					<?php endwhile; ?>
				</div>
			</div>
		<?php endif; ?>

	</section>

	<section class="celeb">
		<div class="celeb__container container">
			<h2 class="h2 celeb__title">
				Знаменитости о портале
			</h2>

			<div class="swiper celeb__slider celebSlider">
				<div class="swiper-wrapper celeb__wrapper celebWrapper">
					<div class="swiper-slide celeb__slide celebSlide">
						<div class="celeb__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/celeb.jpg" alt="">
						</div>
						<p class="celeb__name">
							Александра<br> Сергеева
						</p>
					</div>
					<div class="swiper-slide celeb__slide celebSlide">
						<div class="celeb__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/celeb.jpg" alt="">
						</div>
						<p class="celeb__name">
							Александра<br> Сергеева
						</p>
					</div>
					<div class="swiper-slide celeb__slide celebSlide">
						<div class="celeb__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/celeb.jpg" alt="">
						</div>
						<p class="celeb__name">
							Александра<br> Сергеева
						</p>
					</div>
					<div class="swiper-slide celeb__slide celebSlide">
						<div class="celeb__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/celeb.jpg" alt="">
						</div>
						<p class="celeb__name">
							Александра<br> Сергеева
						</p>
					</div>
					<div class="swiper-slide celeb__slide celebSlide">
						<div class="celeb__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/celeb.jpg" alt="">
						</div>
						<p class="celeb__name">
							Александра<br> Сергеева
						</p>
					</div>
					<div class="swiper-slide celeb__slide celebSlide">
						<div class="celeb__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/celeb.jpg" alt="">
						</div>
						<p class="celeb__name">
							Александра<br> Сергеева
						</p>
					</div>
					<div class="swiper-slide celeb__slide celebSlide">
						<div class="celeb__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/celeb.jpg" alt="">
						</div>
						<p class="celeb__name">
							Александра<br> Сергеева
						</p>
					</div>
					<div class="swiper-slide celeb__slide celebSlide">
						<div class="celeb__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/celeb.jpg" alt="">
						</div>
						<p class="celeb__name">
							Александра<br> Сергеева
						</p>
					</div>

				</div>
				<div class="celeb__btn_next celebBtnNext">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9 18L15 12L9 6" stroke="#9B9BAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
				<div class="celeb__btn_prev celebBtnPrev">
					<svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7 13L1 7L7 1" stroke="#9B9BAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
				</div>
			</div>
			
		</div>
	</section>

	<section class="star">
		<div class="star__container container">
			<h2 class="h2 star__title">
				Выберите свою звезду!
			</h2>

			<?php echo do_shortcode( '[br_filter_single filter_id=113]' ); ?>

			<!-- <?php echo do_shortcode( '[product per_page="12"]' ); ?> -->
			<?php echo do_shortcode( '[products]' ); ?>

			<!-- <div class="star__btn btn">Еще</div> -->
			<?php wptuts_pagination(); ?>
		</div>
	</section>
	
</main>

<?php get_footer(); ?>