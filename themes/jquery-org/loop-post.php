			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<div class="entry-header">
<h2 class="entry-title"><span class="cat-links"><?php echo get_the_category_list(', '); ?>:</span>
<a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php
if ( get_the_title() == "Status Update" ) {
	echo get_the_date();
} else {
	the_title();
} ?></a></h2>
				</div>
				<div class="entry-meta">
					<span class="author vcard">Posted by <strong><?php echo get_the_author(); ?></strong></span>
<?php edit_post_link( __( 'Edit', 'sandbox' ), "(", ")" ) ?>
				</div>
				<div class="entry-content">
<?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>

				<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
				</div>
			</div><!-- .post -->
