<?php
/**
 * Template Name: Home
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>

<?php get_template_part('template-parts/home', 'top'); ?>
<?php get_template_part('template-parts/home', 'life'); ?>	

<?php get_template_part('template-parts/home', 'slider-1'); ?>
<?php get_template_part('template-parts/home', 'full'); ?>	
<?php get_template_part('template-parts/home', 'slider-2'); ?>

<?php get_template_part('template-parts/home', 'schedule'); ?>	

<?php get_template_part('template-parts/home', 'map'); ?>	

<?php get_footer(); ?>
