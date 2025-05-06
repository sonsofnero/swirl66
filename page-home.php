<?php
/**
 * Template Name: Home Page
 * Description: Page template for the homepage.
 *
 */

get_header();

the_post();
?>

<?php get_template_part( 'template-parts/mobile-menu' ); ?>

<?php get_template_part( 'template-parts/follow-bar' ); ?>

<?php get_template_part( 'template-parts/hours-bar' ); ?>

<?php get_template_part( 'template-parts/page-hero' ); ?>

<?php get_template_part( 'template-parts/page-about' ); ?>

<?php get_template_part( 'template-parts/page-location' ); ?>

<?php get_template_part( 'template-parts/page-menu' ); ?>

<?php get_template_part( 'template-parts/page-cta' ); ?>

<?php get_template_part( 'template-parts/page-contact' ); ?>

<?php get_template_part( 'template-parts/thanx-bar' ); ?>

<?php get_template_part( 'template-parts/footer' ); ?>

<?php
get_footer();
