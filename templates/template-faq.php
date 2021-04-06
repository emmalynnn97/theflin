<?php
/**
 * Template Name: FAQ
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>
<?php get_template_part('template-parts/faq', 'top'); ?>
<?php get_template_part('template-parts/faq', 'full'); ?>
<?php get_template_part('template-parts/home', 'slider-2'); ?>
<?php get_template_part('template-parts/faq', 'view-homes'); ?>
<?php get_template_part('template-parts/home', 'schedule'); ?>
<?php get_footer(); ?>