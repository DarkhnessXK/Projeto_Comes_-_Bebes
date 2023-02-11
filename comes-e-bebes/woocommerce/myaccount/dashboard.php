<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);
?>

<p class="margin_botton_20px p">
	<?php
	printf(
		/* translators: 1: user display name 2: logout url */
		wp_kses( __( 'Olá, %1$s (não é %1$s? <a href="%2$s">Sair</a>)', 'woocommerce' ), $allowed_html ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url() )
	);
	?>
</p>

<p class="p">
	<?php
	/* translators: 1: Orders URL 2: Address URL 3: Account URL. */
	$dashboard_desc = __( 'A partir do painel de controle de sua conta, você pode ver suas compras recentes, gerenciar seus endereços de entrega e faturamento, e editar sua senha e detalhes da conta.', 'woocommerce' );
	if ( wc_shipping_enabled() ) {
		/* translators: 1: Orders URL 2: Addresses URL 3: Account URL. */
		$dashboard_desc = __( 'A partir do painel de controle de sua conta, você pode ver suas compras recentes, gerenciar seus endereços de entrega e faturamento, e editar sua senha e detalhes da conta.', 'woocommerce' );
	}
	printf(
		wp_kses( $dashboard_desc, $allowed_html ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-address' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
	?>
</p>


<?php do_action( 'woocommerce_before_edit_account_form' ); ?>

		<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

			<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

			<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
				<label for="account_first_name" class="form_label"><?php esc_html_e( 'Nome', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form_text_input" name="account_first_name" id="account_first_name" autocomplete="given-name"  />
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
				<label for="account_last_name" class="form_label"><?php esc_html_e( 'Sobrenome', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text form_text_input" name="account_last_name" id="account_last_name" autocomplete="family-name"  />
			</p>
			<div class="clear"></div>



			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label class="form_label" for="account_email"><?php esc_html_e( 'Email', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--email input-text form_text_input" name="account_email" id="account_email" autocomplete="email"  />
			</p>

			<fieldset>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label class="form_label" for="password_current"><?php esc_html_e( 'Senha atual (deixe em branco para não alterar): ', 'woocommerce' ); ?></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--password input-text form_text_input" name="password_current" id="password_current" autocomplete="off" />
				</p>
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label class="form_label" for="password_1"><?php esc_html_e( 'Nova senha (deixe em branco para não alterar)', 'woocommerce' ); ?></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--password input-text form_text_input" name="password_1" id="password_1" autocomplete="off" />
				</p>
				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label class="form_label" for="password_2"><?php esc_html_e( 'Confirmar nova senha', 'woocommerce' ); ?></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--password input-text form_text_input" name="password_2" id="password_2" autocomplete="off" />
				</p>
			</fieldset>
			<div class="clear"></div>

			<?php do_action( 'woocommerce_edit_account_form' ); ?>

			<p class="acc_details_submit">
				<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
				<button type="submit" class="acc_details_submit_button"<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="save_account_details" value="<?php esc_attr_e( 'SALVAR ALTERACÕES', 'woocommerce' ); ?>"><?php esc_html_e( 'SALVAR ALTERACÕES', 'woocommerce' ); ?></button>
				<input type="hidden" name="action" value="save_account_details" />
			</p>

			<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
		</form>

		<?php do_action( 'woocommerce_after_edit_account_form' ); ?>




<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
