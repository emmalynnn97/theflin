<?php
/**
 * Template Name: Neighborhood
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>
<?php get_template_part('template-parts/neighborhood', 'top'); ?>
<?php get_template_part('template-parts/neighborhood', 'full-lr'); ?>
<?php get_template_part('template-parts/neighborhood', 'slider-1'); ?>
<?php get_template_part('template-parts/neighborhood', 'full-rl'); ?>
<?php get_template_part('template-parts/neighborhood', 'slider-2'); ?>
<?php get_template_part('template-parts/neighborhood', 'full-vertical'); ?>
<?php get_template_part('template-parts/neighborhood', 'slider-3'); ?>
<?php get_template_part('template-parts/neighborhood', 'view-homes'); ?>
<?php get_template_part('template-parts/home', 'schedule'); ?>
<?php get_footer(); ?>