<?php
/**
 * Edit account form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>

<div class="profile__content">
	<form class="profile__form" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

		<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

		<h3 class="h3 profile__form_title">Мои данные</h3>

		<div class="profile__form_wrap">
			<p class="profile__item">
				<label for="account_first_name"><?php esc_html_e( 'First name', 'woocommerce' ); ?>&nbsp;<span class="profile__label">*</span></label>
				<input type="text" class="profile__input" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo esc_attr( $user->first_name ); ?>" />
			</p>
			<!-- <p class="profile__item">
				<label for="account_last_name"><?php esc_html_e( 'Last name', 'woocommerce' ); ?>&nbsp;<span class="profile__label">*</span></label>
				<input type="text" class="profile__input" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo esc_attr( $user->last_name ); ?>" />
			</p> -->

			<p class="profile__item">
				<label for="account_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="profile__label">*</span></label>
				<input type="email" class="profile__input" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" />
			</p>

			<p class="profile__item">
				<label for="billing_mobile_phone"><?php esc_html_e( 'Телефон', 'woocommerce' ); ?>&nbsp;<span class="profile__label">*</span></label>
				<input type="text" class="profile__input" name="billing_mobile_phone" id="billing_mobile_phone" value="<?php echo esc_attr( $user->billing_mobile_phone ); ?>" />
			</p>

			<p class="profile__item">
				<label for="birth_date"><?php esc_html_e( 'Дата рождения', 'woocommerce' ); ?>&nbsp;<span class="profile__label">*</span></label>
				<input type="text" class="profile__input" name="birth_date" id="birth_date" onfocus="(this.type='date')" value="<?php echo esc_attr( $user->birth_date ); ?>" />
			</p>


			<fieldset>
				<legend class="h3 profile__form_title"><?php esc_html_e( 'Password change', 'woocommerce' ); ?></legend>

				<div class="profile__form_wrap">
					<p class="profile__item">
						<label for="password_current" class="profile__label"><?php esc_html_e( 'Current password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
						<input type="password" class="profile__input" name="password_current" id="password_current" autocomplete="off" />
					</p>
					<p class="profile__item">
						<label for="password_1" class="profile__label"><?php esc_html_e( 'New password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
						<input type="password" class="profile__input" name="password_1" id="password_1" autocomplete="off" />
					</p>
					<p class="profile__item">
						<label for="password_2" class="profile__label"><?php esc_html_e( 'Confirm new password', 'woocommerce' ); ?></label>
						<input type="password" class="profile__input" name="password_2" id="password_2" autocomplete="off" />
					</p>
				</div>
			</fieldset>
		</div>

		<?php do_action( 'woocommerce_edit_account_form' ); ?>

		<div class="profile__btn_wrap">
			<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
			<button type="submit" class="profile__form_btn btn" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Save changes', 'woocommerce' ); ?></button>
			<input type="hidden" name="action" value="save_account_details" />
		</div>

		<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
	</form>
</div>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
