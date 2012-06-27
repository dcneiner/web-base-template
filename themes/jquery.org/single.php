<?php get_header() ?>

	<div id="container">
		<div id="content">

<?php the_post() ?>
<?php get_template_part( 'loop', 'post' ); ?>


<?php /* comments_template() */ ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_footer() ?>
