<?php
/**
 * Template Name: Floorplans
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>
<?php get_template_part('template-parts/floorplans', 'top'); ?>
<?php get_template_part('template-parts/floorplans', 'plans'); ?>	
<?php get_template_part('template-parts/floorplans', 'slider-2'); ?>

<?php get_template_part('template-parts/home', 'schedule'); ?>
<?php get_footer(); ?>