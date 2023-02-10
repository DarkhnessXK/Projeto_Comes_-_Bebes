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
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' ); ?>

<form class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?> >

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

	<section class="painel-controle">
		<a href="http://comesebebes.local/painel">Painel</a>
		<a href="http://comesebebes.local/my-account/customer-logout/?_wpnonce=10b6b2d745">Pedidos</a>
		<a href="http://comesebebes.local/my-account/customer-logout/?_wpnonce=10b6b2d745">Endereços</a>
		<a href="http://comesebebes.local/my-account/customer-logout/?_wpnonce=10b6b2d745">Sair</a>
	</section>

	<p>Olá, user (não é user?) <a href="http://comesebebes.local/my-account/customer-logout/?_wpnonce=10b6b2d745">Sair</a>)</p> 
	<p>A partir do painel de controle de sua conta, você pode ver suas compras recentes, gerenciar seus endereços de entrega e faturamento, e editar sua senha e detalhes da conta.</p>

	<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
		<label for="nome"><?php esc_html_e( 'Nome', 'woocommerce' ); ?>&nbsp;</label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="nome" id="nomeusuario" value="<?php echo esc_attr( $user->nome ); ?>" />
	</p>
	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
		<label for="sobrenome"><?php esc_html_e( 'Sobrenome', 'woocommerce' ); ?>&nbsp;</label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="sobrenome" id="sobrenomeusuario" value="<?php echo esc_attr( $user->sobrenome ); ?>" />
	</p>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="email"><?php esc_html_e( 'Email', 'woocommerce' ); ?>&nbsp;</label>
		<input type="email" class="woocommerce-Input woocommerce-Input--email input-text" name="email" id="emailusuario" value="<?php echo esc_attr( $user->uemail ); ?>" />
	</p>

	<fieldset>
		<legend><?php esc_html_e( 'Password change', 'woocommerce' ); ?></legend>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="senha_atual"><?php esc_html_e( 'Senha atual (deixe em branco para não alterar):', 'woocommerce' ); ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="senha_atual" id="senha_atual" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="nova_senha"><?php esc_html_e( 'Nova senha (deixe em branco para não alterar)', 'woocommerce' ); ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="nova_senha" id="nova_senha" autocomplete="off" />
		</p>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="senha_confirmacao"><?php esc_html_e( 'Confirmação senha', 'woocommerce' ); ?></label>
			<input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="senha_confirmacao" id="senha_confirmacao" autocomplete="off" />
		</p>
	</fieldset>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<p>
		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
		<button type="submit" class="woocommerce-Button button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ): '' ); ?>" name="salvar_alteracao" value="<?php esc_attr_e( 'Salvar alterações', 'woocommerce' ); ?>"><?php esc_html_e( 'Salvar alterações', 'woocommerce' ); ?></button>
		<input type="hidden" name="action" value="save_account_details" />
	</p>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
</form>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>


