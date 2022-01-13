<?php
	/**
		* Template name: FAQ
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

	<section class="faq">
		<div class="faq__container container">
			<h3 class="h3 faq__title">Популярные вопросы</h3>
			<div class="faq__wrap">
				<?php if( have_rows('questions') ): ?>
				<?php while( have_rows('questions') ): the_row(); 
				$question = get_sub_field('question');
				$answer = get_sub_field('answer');
				?>
					<div class="accordion">
						<div class="accordion__header">
							<p><?php echo $question; ?></p>
							<span>?</span>
						</div>
						<div class="accordion__content">
							<p>
								<?php echo $answer; ?>
							</p>
						</div>
					</div>

				<?php endwhile; ?>
				<?php endif; ?>
				<!-- <div class="accordion">
					<div class="accordion__header">
						<p>Что такое youbor?</p>
						<span>?</span>
					</div>
					<div class="accordion__content">
						<p>
							Открыв личную страницу звезды, Вы увидите блок с рейтингом. Этот рейтинг 
							формируется из оценок и отзывов пользователей, которые заказали видео у звезды.
							После завершения заказа не забудьте оценить видео. Обратная связь важна как для 
							звезд, так и для будущих заказчиков. 
						</p>
					</div>
				</div> -->
				<!-- <div class="accordion">
					<div class="accordion__header">
						<p>Где можно почитать отзывы?</p>
						<span>?</span>
					</div>
					<div class="accordion__content">
						<p>
							Открыв личную страницу звезды, Вы увидите блок с рейтингом. Этот рейтинг 
							формируется из оценок и отзывов пользователей, которые заказали видео у звезды.
							После завершения заказа не забудьте оценить видео. Обратная связь важна как для 
							звезд, так и для будущих заказчиков. 
						</p>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion__header">
						<p>Сколько ждать видео? </p>
						<span>?</span>
					</div>
					<div class="accordion__content">
						<p>
							Открыв личную страницу звезды, Вы увидите блок с рейтингом. Этот рейтинг 
							формируется из оценок и отзывов пользователей, которые заказали видео у звезды.
							После завершения заказа не забудьте оценить видео. Обратная связь важна как для 
							звезд, так и для будущих заказчиков. 
						</p>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion__header">
						<p>Как оплатить заказ?</p>
						<span>?</span>
					</div>
					<div class="accordion__content">
						<p>
							Открыв личную страницу звезды, Вы увидите блок с рейтингом. Этот рейтинг 
							формируется из оценок и отзывов пользователей, которые заказали видео у звезды.
							После завершения заказа не забудьте оценить видео. Обратная связь важна как для 
							звезд, так и для будущих заказчиков. 
						</p>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion__header">
						<p>Что делать, если заказ отклонен?</p>
						<span>?</span>
					</div>
					<div class="accordion__content">
						<p>
							Открыв личную страницу звезды, Вы увидите блок с рейтингом. Этот рейтинг 
							формируется из оценок и отзывов пользователей, которые заказали видео у звезды.
							После завершения заказа не забудьте оценить видео. Обратная связь важна как для 
							звезд, так и для будущих заказчиков. 
						</p>
					</div>
				</div>
				<div class="accordion">
					<div class="accordion__header">
						<p>А видео точно понравится?</p>
						<span>?</span>
					</div>
					<div class="accordion__content">
						<p>
							Открыв личную страницу звезды, Вы увидите блок с рейтингом. Этот рейтинг 
							формируется из оценок и отзывов пользователей, которые заказали видео у звезды.
							После завершения заказа не забудьте оценить видео. Обратная связь важна как для 
							звезд, так и для будущих заказчиков. 
						</p>
					</div>
				</div> -->
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
