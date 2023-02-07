<form role="search" method="get" class="comesbebes_search_form" action="<?php echo home_url( '/' ); ?>">
    <input type="image" class="search_bar_icon" src="<?php echo  IMAGES_DIR . '/bx_bx-search.png'?>" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input  type="text" class="search_bar" placeholder="<?php echo esc_attr_x( '', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
</form>