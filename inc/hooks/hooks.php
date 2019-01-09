<?php 
/**
 * @Packge 	   : Robotics
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 *
 * Before Wrapper
 *
 * @Preloader
 *
 */
add_action( 'robotics_preloader', 'robotics_site_preloader', 10 );

/**
 * Header
 *
 * @Header Menu
 * @Header Bottom
 * 
 */

add_action( 'robotics_header', 'robotics_header_cb', 10 );

/**
 * Hook for footer
 *
 */
add_action( 'robotics_footer', 'robotics_footer_area', 10 );
add_action( 'robotics_footer', 'robotics_back_to_top', 20 );

/**
 * Hook for Blog, single, page, search, archive pages wrapper.
 */
add_action( 'robotics_wrp_start', 'robotics_wrp_start_cb', 10 );
add_action( 'robotics_wrp_end', 'robotics_wrp_end_cb', 10 );

/**
 * Hook for Blog, single, search, archive pages column.
 */
add_action( 'robotics_blog_col_start', 'robotics_blog_col_start_cb', 10 );
add_action( 'robotics_blog_col_end', 'robotics_blog_col_end_cb', 10 );

/**
 * Hook for blog posts thumbnail.
 */
add_action( 'robotics_blog_posts_thumb', 'robotics_blog_posts_thumb_cb', 10 );

/**
 * Hook for blog posts title.
 */
add_action( 'robotics_blog_posts_title', 'robotics_blog_posts_title_cb', 10 );

/**
 * Hook for blog posts meta.
 */
add_action( 'robotics_blog_posts_meta', 'robotics_blog_posts_meta_cb', 10 );

/**
 * Hook for blog posts bottom meta.
 */
add_action( 'robotics_blog_posts_bottom_meta', 'robotics_blog_posts_bottom_meta_cb', 10 );

/**
 * Hook for blog posts excerpt.
 */
add_action( 'robotics_blog_posts_excerpt', 'robotics_blog_posts_excerpt_cb', 10 );

/**
 * Hook for blog posts content.
 */
add_action( 'robotics_blog_posts_content', 'robotics_blog_posts_content_cb', 10 );

/**
 * Hook for blog sidebar.
 */
add_action( 'robotics_blog_sidebar', 'robotics_blog_sidebar_cb', 10 );

/**
 * Hook for blog single post social share option.
 */
add_action( 'robotics_blog_posts_share', 'robotics_blog_posts_share_cb', 10 );

/**
 * Hook for blog single post meta category, tag, next - previous link and comments form.
 */
add_action( 'robotics_blog_single_meta', 'robotics_blog_single_meta_cb', 10 );

/**
 * Hook for page content.
 */
add_action( 'robotics_page_content', 'robotics_page_content_cb', 10 );


/**
 * Hook for 404 page.
 */
add_action( 'robotics_fof', 'robotics_fof_cb', 10 );
