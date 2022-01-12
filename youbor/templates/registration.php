<?php
/* Template name: Регистрация */
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
						<a href="<?php echo get_home_url(); ?>/login"><span>Вход</span></a>
						<a href="<?php echo get_home_url(); ?>/registracija" class="active"><span>Регистрация</span></a>
					</div>

					<!-- <form method="post" class="auth__form" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

						<?php do_action( 'woocommerce_register_form_start' ); ?>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" placeholder="<?php esc_html_e( 'Username', 'woocommerce' ); ?>" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
							</p>

						<?php endif; ?>

						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
							<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" placeholder="<?php esc_html_e( 'Email address', 'woocommerce' ); ?>" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
						</p>

						<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" placeholder="<?php esc_html_e( 'Password', 'woocommerce' ); ?>" id="reg_password" autocomplete="new-password" />
							</p>

							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" placeholder="<?php esc_html_e( 'Repeate password', 'woocommerce' ); ?>" id="reg_password" autocomplete="new-password" />
							</p>

						<?php else : ?>

							<p><?php esc_html_e( 'A link to set a new password will be sent to your email address.', 'woocommerce' ); ?></p>

						<?php endif; ?>

						<?php do_action( 'woocommerce_register_form' ); ?>

						<p class="woocommerce-form-row form-row">
							<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
							<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
						</p>

						<?php do_action( 'woocommerce_register_form_end' ); ?>

					</form> -->

					<?php echo do_shortcode( '[ultimatemember form_id="180"]' ); ?>

					</div>
	
			</div>

		</section>
	</main>



<?php get_footer(); ?>