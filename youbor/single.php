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
				<a href="<?php echo get_home_url(); ?>/category/blog/" class="article__link">
					<span></span>
					К новостям
				</a>
			</div>

			<div class="article__wrap">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<!-- <h1 class="h3 article__title">
					At tortor vestibulum et etiam.t Sit eu tempus adipiscing urna, 
					molestie tortor tortor, nibh adipiscing urna, molesti.
				</h1>

				<div class="article__img">
					<img src="img/blog.jpg" alt="">
				</div>

				<p>
					Tristique potenti etiam auctor ipsum, nec at sed parturient. Sed ipsum elit, 
					orci pretium sed. Nisi lorem maecenas porta eget. Nunc viverra tristique nulla 
					pellentesque quam id. Sed pretium feugiat odio egestas purus, elementum tincidunt. 
					Laoreet sit in ac nunc molestie. Lectus orci, hendrerit aenean pellentesque nisl, 
					at a enim mauris. Tempus diam in feugiat sed tortor. Ipsum quis ipsum sed ornare. 
					Lorem risus volutpat diam porttitor pellentesque magnis. Felis eget scelerisque 
					imperdiet malesuada dignissim. Quisque vestibulum vitae eu turpis mauris. Arcu 
					sed consequat congue non. 
				</p>
				<p>
					Tristique potenti etiam auctor ipsum, nec at sed parturient. Sed ipsum elit, 
					orci pretium sed. Nisi lorem maecenas porta eget. Nunc viverra tristique nulla 
					pellentesque quam id. Sed pretium feugiat odio egestas purus, elementum tincidunt. 
					Laoreet sit in ac nunc molestie. Lectus orci, hendrerit aenean pellentesque nisl, 
					at a enim mauris. Tempus diam in feugiat sed tortor. Ipsum quis ipsum sed ornare. 
					Lorem risus volutpat diam porttitor pellentesque magnis. Felis eget scelerisque 
					imperdiet malesuada dignissim. Quisque vestibulum vitae eu turpis mauris. Arcu 
					sed consequat congue non. 
				</p>
				<p>
					Tristique potenti etiam auctor ipsum, nec at sed parturient. Sed ipsum elit, 
					orci pretium sed. Nisi lorem maecenas porta eget. Nunc viverra tristique nulla 
					pellentesque quam id. Sed pretium feugiat odio egestas purus, elementum tincidunt. 
					Laoreet sit in ac nunc molestie. Lectus orci, hendrerit aenean pellentesque nisl, 
				</p>
				<p>
					Tristique potenti etiam auctor ipsum, nec at sed parturient. Sed ipsum elit, 
					orci pretium sed. Nisi lorem maecenas porta eget. Nunc viverra tristique nulla 
					pellentesque quam id. Sed pretium feugiat odio egestas purus, elementum tincidunt. 
					Laoreet sit in ac nunc molestie. Lectus orci, hendrerit aenean pellentesque nisl, 
				</p>
				<p>
					Tristique potenti etiam auctor ipsum, nec at sed parturient. Sed ipsum elit, 
					orci pretium sed. Nisi lorem maecenas porta eget. Nunc viverra tristique nulla 
					pellentesque quam id. Sed pretium feugiat odio egestas purus, elementum tincidunt. 
					Laoreet sit in ac nunc molestie. Lectus orci, hendrerit aenean pellentesque nisl, 
					at a enim mauris. Tempus diam in feugiat sed tortor. Ipsum quis ipsum sed ornare. 
					Lorem risus volutpat diam porttitor pellentesque magnis. Felis eget scelerisque 
					imperdiet malesuada dignissim. Quisque vestibulum vitae eu turpis mauris. Arcu 
					sed consequat congue non. 
				</p>
				<blockquote>
					Vitae diam pellentesque non mi massa fermentum lacus et. Laoreet aliquam 
					semper quis metus cras sagittis ac. Proin gravida justo, lectus lobortis leo 
					nibh mi lacinia. Netus sit justo sem vel tincidunt molestie sit. Id etiam 
					egestas posuere id curabitur nisi, dignissim.
				</blockquote>
				<p>
					Tristique potenti etiam auctor ipsum, nec at sed parturient. Sed ipsum elit, 
					orci pretium sed. Nisi lorem maecenas porta eget. Nunc viverra tristique nulla 
					pellentesque quam id. Sed pretium feugiat odio egestas purus, elementum tincidunt. 
					Laoreet sit in ac nunc molestie. Lectus orci, hendrerit aenean pellentesque nisl, 
					at a enim mauris. Tempus diam in feugiat sed tortor. Ipsum quis ipsum sed ornare. 
					Lorem risus volutpat diam porttitor pellentesque magnis. Felis eget scelerisque 
					imperdiet malesuada dignissim. Quisque vestibulum vitae eu turpis mauris. Arcu 
					sed consequat congue non. 
				</p> -->
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>