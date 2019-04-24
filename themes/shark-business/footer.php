<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shark_business
 */

/**
 * shark_business_site_content_ends_action hook
 *
 * @hooked shark_business_site_content_ends -  10
 *
 */
do_action( 'shark_business_site_content_ends_action' );

/**
 * shark_business_footer_start_action hook
 *
 * @hooked shark_business_footer_start -  10
 *
 */
do_action( 'shark_business_footer_start_action' );

/**
 * shark_business_site_info_action hook
 *
 * @hooked shark_business_site_info -  10
 *
 */
do_action( 'shark_business_site_info_action' );

/**
 * shark_business_footer_ends_action hook
 *
 * @hooked shark_business_footer_ends -  10
 * @hooked shark_business_slide_to_top -  20
 *
 */
do_action( 'shark_business_footer_ends_action' );

/**
 * shark_business_page_ends_action hook
 *
 * @hooked shark_business_page_ends -  10
 *
 */
do_action( 'shark_business_page_ends_action' );

wp_footer();

/**
 * shark_business_body_html_ends_action hook
 *
 * @hooked shark_business_body_html_ends -  10
 *
 */
do_action( 'shark_business_body_html_ends_action' );
