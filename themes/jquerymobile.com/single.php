<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>  
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <header class="page-header">
    <h1><?php the_title(); ?></h1>
    <div class="entry-meta">
      <?php twentyten_posted_on(); ?>
    </div><!-- .entry-meta -->
  </header>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    

    <?php the_content(); ?>
    <?php comments_template( '', true ); ?>
  </article>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
