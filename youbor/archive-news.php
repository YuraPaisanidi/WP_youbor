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

		<section class="blog">
			<div class="blog__container container">
				<h3 class="h3 blog__title">Новости</h3>
				<div class="blog__wrap">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<a href="<?php the_permalink() ?>" class="blog__item">
						<div class="blog__item_date">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.svg" alt="">
							<p><?php the_time('d/m/Y'); ?></p>
						</div>

						<div class="blog__item_img">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
						</div>

						<div class="blog__item_title">
							<h3>
								<?php the_title() ?>
							</h3>
						</div>

						<div class="blog__item_desc">
							<p>
								<?php the_excerpt() ?>
							</p>
						</div>
					</a>

				<?php endwhile; ?>
				<?php endif; ?>
					<!-- <a href="#" class="blog__item">
						<div class="blog__item_date">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.svg" alt="">
							<p>22/05/2021</p>
						</div>
	
						<div class="blog__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="">
						</div>
	
						<div class="blog__item_title">
							<h3>
								Nulla morbi mus duis velit arcu. Maecenas id diam suspendisse id faucibus non.
							</h3>
						</div>
	
						<div class="blog__item_desc">
							<p>
								Ornare duis purus lacus, neque habitant. Lorem nec pretium, ante
								in suspendisse ante. Viverra vel sed at vitae nunc at ac in gravida.
								Lorem lacus lectus tristique sed. Habitasse non eget duis arcu sagittis.
							</p>
						</div>
					</a>
					<a href="#" class="blog__item">
						<div class="blog__item_date">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.svg" alt="">
							<p>22/05/2021</p>
						</div>
	
						<div class="blog__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="">
						</div>
	
						<div class="blog__item_title">
							<h3>
								Nulla morbi mus duis velit arcu. Maecenas id diam suspendisse id faucibus non.
							</h3>
						</div>
	
						<div class="blog__item_desc">
							<p>
								Ornare duis purus lacus, neque habitant. Lorem nec pretium, ante
								in suspendisse ante. Viverra vel sed at vitae nunc at ac in gravida.
								Lorem lacus lectus tristique sed. Habitasse non eget duis arcu sagittis.
							</p>
						</div>
					</a>
					<a href="#" class="blog__item">
						<div class="blog__item_date">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.svg" alt="">
							<p>22/05/2021</p>
						</div>
	
						<div class="blog__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="">
						</div>
	
						<div class="blog__item_title">
							<h3>
								Nulla morbi mus duis velit arcu. Maecenas id diam suspendisse id faucibus non.
							</h3>
						</div>
	
						<div class="blog__item_desc">
							<p>
								Ornare duis purus lacus, neque habitant. Lorem nec pretium, ante
								in suspendisse ante. Viverra vel sed at vitae nunc at ac in gravida.
								Lorem lacus lectus tristique sed. Habitasse non eget duis arcu sagittis.
							</p>
						</div>
					</a>
					<a href="#" class="blog__item">
						<div class="blog__item_date">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.svg" alt="">
							<p>22/05/2021</p>
						</div>
	
						<div class="blog__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="">
						</div>
	
						<div class="blog__item_title">
							<h3>
								Nulla morbi mus duis velit arcu. Maecenas id diam suspendisse id faucibus non.
							</h3>
						</div>
	
						<div class="blog__item_desc">
							<p>
								Ornare duis purus lacus, neque habitant. Lorem nec pretium, ante
								in suspendisse ante. Viverra vel sed at vitae nunc at ac in gravida.
								Lorem lacus lectus tristique sed. Habitasse non eget duis arcu sagittis.
							</p>
						</div>
					</a>
					<a href="#" class="blog__item">
						<div class="blog__item_date">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.svg" alt="">
							<p>22/05/2021</p>
						</div>
	
						<div class="blog__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="">
						</div>
	
						<div class="blog__item_title">
							<h3>
								Nulla morbi mus duis velit arcu. Maecenas id diam suspendisse id faucibus non.
							</h3>
						</div>
	
						<div class="blog__item_desc">
							<p>
								Ornare duis purus lacus, neque habitant. Lorem nec pretium, ante
								in suspendisse ante. Viverra vel sed at vitae nunc at ac in gravida.
								Lorem lacus lectus tristique sed. Habitasse non eget duis arcu sagittis.
							</p>
						</div>
					</a>
					<a href="#" class="blog__item">
						<div class="blog__item_date">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pencil.svg" alt="">
							<p>22/05/2021</p>
						</div>
	
						<div class="blog__item_img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="">
						</div>
	
						<div class="blog__item_title">
							<h3>
								Nulla morbi mus duis velit arcu. Maecenas id diam suspendisse id faucibus non.
							</h3>
						</div>
	
						<div class="blog__item_desc">
							<p>
								Ornare duis purus lacus, neque habitant. Lorem nec pretium, ante
								in suspendisse ante. Viverra vel sed at vitae nunc at ac in gravida.
								Lorem lacus lectus tristique sed. Habitasse non eget duis arcu sagittis.
							</p>
						</div>
					</a> -->
				</div>
				<a href="#" class="blog__btn btn">Больше</a>
			</div>
		</section>

	</main>

<?php
get_sidebar();
get_footer();
