<?php
/*
Template Name: Updates Page
*/
?>
<?php get_header() ?>

	<div id="container">
		<div id="content">
<div class="post-header roundedTop">
<h2>Updates</h2>
<p class="large">Status updates from members of the jQuery Team.</p>
</div>

			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("posts_per_page=10&paged=$paged"); ?>
<?php while ( have_posts() ) : the_post() ?>
<?php get_template_part( 'loop', 'post' ); ?>
<?php comments_template() ?>
<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>
