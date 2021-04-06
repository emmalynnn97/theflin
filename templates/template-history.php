<?php
/**
 * Template Name: History
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>
<?php get_template_part('template-parts/history', 'top'); ?>
<?php get_template_part('template-parts/history', 'full-lr'); ?>
<?php get_template_part('template-parts/history', 'slider-1'); ?>
<?php get_template_part('template-parts/history', 'full-rl-1'); ?>
<?php get_template_part('template-parts/history', 'slider-2'); ?>
<?php get_template_part('template-parts/history', 'full-rl-2'); ?>
<?php get_template_part('template-parts/history', 'slider-3'); ?>
<?php get_template_part('template-parts/home', 'schedule'); ?>
<?php get_footer(); ?>