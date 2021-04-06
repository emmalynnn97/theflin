<?php
/**
 * Template Name: Portal
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


get_header();
?>

<?php get_template_part('template-parts/portal', 'top'); ?>
<?php get_template_part('template-parts/portal', 'full'); ?>
<?php get_template_part('template-parts/portal', 'slider'); ?>
<?php get_footer(); ?>