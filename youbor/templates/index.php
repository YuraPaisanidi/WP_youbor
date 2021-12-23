<?php
/* Template name: Главная */
?>

<?php get_header(); ?>

<main class="main main--index">
		
	<section class="hero">
		<div class="swiper hero__slider heroSlider">
			<div class="swiper-wrapper hero__wrapper heroWrapper">
				<div class="swiper-slide hero__slide hero__slide--1 heroSlide">
					<div class="hero__text">
						<h1 class="h1 hero__title">Что такое <span>youbor?</span></h1>
						<a href="#" class="hero__btn btn modal__edits">Узнать</a>
					</div>
				</div>
				<div class="swiper-slide hero__slide hero__slide--2 heroSlide">
					<div class="hero__text">
						<h1 class="h1 hero__title">Youbor добро</span></h1>
						<a href="#" class="hero__btn btn modal__edits">Узнать</a>
					</div>
				</div>
				<div class="swiper-slide hero__slide hero__slide--3 heroSlide">
					<div class="hero__text">
						<h1 class="h1 hero__title">Будь ближе к звезде</span></h1>
						<a href="#" class="hero__btn btn modal__edits">Узнать</a>
					</div>
				</div>
			</div>
		</div>
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

			<div class="star__filter">
				<div class="toggle">
					<input type="checkbox" class="checkbox" name="checkbox" id="toggle__input1">
					<label for="toggle__input1" class="label" value="1">Все</label>
				</div>
				<div class="toggle">
					<input type="checkbox" class="checkbox" name="checkbox" id="toggle__input2">
					<label for="toggle__input2" class="label" value="2">Актеры</label>
				</div>
				<div class="toggle">
					<input type="checkbox" class="checkbox" name="checkbox" id="toggle__input3">
					<label for="toggle__input3" class="label" value="3">Певцы</label>
				</div>
				<div class="toggle">
					<input type="checkbox" class="checkbox" name="checkbox" id="toggle__input4">
					<label for="toggle__input4" class="label" value="4+">Спортсмены</label>
				</div>
				<div class="toggle">
					<input type="checkbox" class="checkbox" name="checkbox" id="toggle__input5">
					<label for="toggle__input5" class="label" value="1">Блогеры</label>
				</div>
				<div class="toggle">
					<input type="checkbox" class="checkbox" name="checkbox" id="toggle__input6">
					<label for="toggle__input6" class="label" value="2">Ведущие</label>
				</div>
				<div class="toggle">
					<input type="checkbox" class="checkbox" name="checkbox" id="toggle__input7">
					<label for="toggle__input7" class="label" value="3">Комики</label>
				</div>
				<div class="toggle">
					<input type="checkbox" class="checkbox" name="checkbox" id="toggle__input8">
					<label for="toggle__input8" class="label" value="4+">Музыканты</label>
				</div>
			</div>

			<div class="star__content">
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
				<a href="#" class="star__item">
					<div class="star__img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.jpg" alt="">
					</div>
					<div class="star__info">
						<h3 class="h3 star__name">Артур Королёв</h3>
						<p class="star__desc">Комик,ведущий, актер</p>
						<p class="star__price">1234 ₽</p>
					</div>
				</a>
			</div>

			<div class="star__btn btn">Еще</div>
		</div>
	</section>
	
</main>

<?php get_footer(); ?>