<?php
/**
 * Template Name: Amenities
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>

<?php get_template_part('template-parts/amenities', 'top'); ?>
<?php get_template_part('template-parts/amenities', 'full-rl'); ?>
<?php get_template_part('template-parts/amenities', 'slider-1'); ?>
<?php get_template_part('template-parts/amenities', 'full-rl-2'); ?>
<?php get_template_part('template-parts/amenities', 'slider-2'); ?>
<?php get_template_part('template-parts/amenities', 'view-homes'); ?>
<?php get_template_part('template-parts/home', 'schedule'); ?>



<?php get_footer(); ?>