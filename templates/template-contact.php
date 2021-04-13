<?php
/**
 * Template Name: Contact
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>

<?php get_template_part('template-parts/contact', 'top'); ?>
<?php get_template_part('template-parts/contact', 'full'); ?>
<?php get_template_part('template-parts/contact', 'view-homes'); ?>
<?php get_template_part('template-parts/home', 'schedule'); ?>
<?php get_footer(); ?>