<?php
/**
 * Template Name: Gallery
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>
<?php get_template_part('template-parts/gallery', 'top'); ?>
<?php get_template_part('template-parts/gallery', 'full'); ?>
<?php get_template_part('template-parts/home', 'slider-2'); ?>
<?php get_template_part('template-parts/gallery', 'view-homes'); ?>
<?php get_template_part('template-parts/home', 'schedule'); ?>
<?php get_footer(); ?>