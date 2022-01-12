<?php
/* Template name: Логин */
?>

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

	<main class="main main--accent">
		<section class="auth">
	
			<div class="auth__container container">
	
				<div class="auth__wrap">
	
					<div class="auth__links">
						<a href="<?php echo get_home_url(); ?>/login" class="active"><span>Вход</span></a>
						<a href="<?php echo get_home_url(); ?>/registracija"><span>Регистрация</span></a>
					</div>
	
					<form class="auth__form" method="post">
	
						<?php do_action( 'woocommerce_login_form_start' ); ?>
	
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<!-- <label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
							<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" placeholder="Имя" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
						</p>
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<!-- <label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label> -->
							<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" placeholder="Пароль" id="password" autocomplete="current-password" />
						</p>
	
						<?php do_action( 'woocommerce_login_form' ); ?>
	
						<p class="form-row">
							<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
								<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
							</label>
							<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
							<button type="submit" class="auth__btn btn" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
						</p>
						<p class="woocommerce-LostPassword lost_password">
							<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
						</p>
	
						<?php do_action( 'woocommerce_login_form_end' ); ?>
	
					</form>
	
				</div>
	
			</div>
		
		</section>
	</main>


<?php get_footer(); ?>