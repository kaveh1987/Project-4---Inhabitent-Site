<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}


add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
	}
		add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


function inhabitent_modify_products_archive_query($query) {
	if (is_post_type_archive('product') && !is_admin() && $query->is_main_query()){
		$query->set('posts_per_page', 16);
		$query->set('order', 'ASC');
		$query->set('orderby', 'title');
	}
}
add_action ('pre_get_posts', 'inhabitent_modify_products_archive_query');



function inhabitent_inline_styles() {
	if(is_page_template('about.php')){
		return;

	}

        $imageUrl = CFS()->get('about_banner_image');
        if(!$imageUrl){
					return;
				}

        $custom_css = "
                .test{
                        background: url({$imageUrl});
                }";
        wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_inline_styles' );








		function my_login_logo() { ?>

	   <style type="text/css">
	       #login h1 a, .login h1 a {
	           background-image: url(<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
	           padding-bottom: 30px;
						 background-size: 300px 53px;
						 height: 53px;
						 width: 300px;
	       }
	   </style>
	<?php }
	add_action( 'login_head', 'my_login_logo' );

function inhabitent_login_url(){
	return home_url();
}
add_filter('login_headerurl','inhabitent_login_url');

function inhabitent_title_url(){
	return 'inhabitent supply Co';
}
add_filter('login_headertitle','inhabitent_title_url');
