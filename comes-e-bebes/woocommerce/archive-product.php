<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */



defined('ABSPATH') || exit;


get_header('shop');


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */



/**do_action('woocommerce_before_main_content');*/

?>
<div class="mid-body-div">
	<header class="woocommerce-products-header">
		<?php if (apply_filters('woocommerce_show_page_title', true)): ?>

		<?php endif; ?>


		<!-- coding sections -->

		<section class="category-section">
			<h2 class="category-h2">Selecione uma Categoria</h2>

		</section>

	<?php wp_nav_menu(['menu' => 'Categoria']);  ?>

		<section class="foods-section">
			<h2 class=category-h2>Pratos</h2>
			<h3 class="foods-h3">
				<?php global $wp;
				$current_url = home_url(add_query_arg(array(), $wp->request));
				if ($current_url == 'http://comesebebes.local/product-category/nordestina') {
					echo 'Pratos Nordestinos';
				} else if ($current_url == 'http://comesebebes.local/product-category/vegana') {
					echo 'Pratos Veganos';
				} else if ($current_url == 'http://comesebebes.local/product-category/massas') {
					echo 'Pratos de Massas';
				} else if ($current_url == 'http://comesebebes.local/product-category/japonesa') {
					echo 'Pratos Japoneses';
				} else {
					echo 'Escolha uma Categoria';
				}
				?>

			</h3>
			<br>
			<div class="searchs-left-div">
				<p>Buscar por nome: </p>
				<form>
					<input type="text" class="input-search">
				</form>
			</div>
			<div class="searchs-right-div">
				<p>Filtro de preço</p>
				De: <input type="number" class="input-search" id="price-search"> Até: <input type="number"
					class="input-search" id="price-search">


		</section>

		<!-- end coding sections -->


		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		do_action('woocommerce_archive_description');
		?>
	</header>

</div>
<div class="mid-body-div">
	<?php
	if (woocommerce_product_loop()) {

		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		do_action('woocommerce_before_shop_loop');

		woocommerce_product_loop_start();

		if (wc_get_loop_prop('total')) {
			while (have_posts()) {
				the_post();

				/**
				 * Hook: woocommerce_shop_loop.
				 */
				do_action('woocommerce_shop_loop');

				wc_get_template_part('content', 'product');
			}
		}

		woocommerce_product_loop_end();

		/**
		 * Hook: woocommerce_after_shop_loop.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action('woocommerce_after_shop_loop');
	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action('woocommerce_no_products_found');
	}

	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action('woocommerce_after_main_content');

	/**
	 * Hook: woocommerce_sidebar.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */


	/**do_action('woocommerce_sidebar'); */

	?>
</div>
<?php
get_footer('shop');
?>