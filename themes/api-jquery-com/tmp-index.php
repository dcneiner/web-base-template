<?php get_header() ?>

	<div id="jq-primaryContent">
  	<h1 class="page-title">Every Method:</h1>
		<div id="content">

<ul id="method-list">

<?php
query_posts(array('posts_per_page'=>-1, 'orderby'=>title,'order'=>ASC));
while ( have_posts() ) : the_post() ?>

			<li id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title">
          <a class="title-link keynav" href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a>
  				<span class="entry-meta">
  <?php if ( $cats_meow = sandbox_cats_meow(', ') ) : // Returns categories other than the one queried ?>
  					<span class="cat-links"><?php printf( __( 'Also in %s', 'sandbox' ), $cats_meow ) ?></span>
  <?php endif ?>
  					<span class="meta-sep">|</span>
  <?php the_tags( __( ' | <span class="tag-links">Tagged ', 'sandbox' ), ", ", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
  <?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t  | <span class=\"edit-link\">", "</span>\n" ) ?>
  				</span>
        </h2>
			</li><!-- .post -->

<?php comments_template() ?>

<?php endwhile; ?>
</ul>
		</div><!-- #content -->
	</div><!-- #jq-primaryContent -->

<?php get_sidebar() ?>
<?php get_footer() ?>