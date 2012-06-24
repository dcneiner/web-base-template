<?php
/**
 * Template Name: Blog Home Page
 * 
 * The template for displaying the blog home page.
 */
 
  get_header();
?>
  <header class="page-header">
    <h1><?php the_title() ?></h1>
  </header>

  <?php 
    query_posts('posts_per_page=10');
    get_template_part( 'loop', 'index' );
  ?>

<?php get_footer(); ?>