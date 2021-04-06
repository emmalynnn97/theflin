<?php
/**
 * Template Name: Style Guide
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header(); ?>
<?php get_template_part('template-parts/site', 'sidebar'); ?>
<?php get_template_part('template-parts/home', 'top'); ?>
<?php the_content(); ?>

<?php get_footer(); ?>