<?php get_header() ?>

	<div id="jq-primaryContent" class="jq-box round">
  	<h1 class="page-title">jQuery API</h1>
		<div id="content">



<?php
$pageposts = $wpdb->get_results("SELECT *, REPLACE(post_name, 'jQuery.', '') as trimname FROM wp_3_posts as p WHERE p.post_status='publish' AND p.post_type = 'post' ORDER BY trimname;");

if ($pageposts):
  $corelist = array();

  foreach ($pageposts as $post):
    setup_postdata($post);


    $itemclass = 'core';

    $editlink = get_edit_post_link();
    if ($editlink) {
      $editlink = ' | <span class="edit-link"><a href="' . $editlink . '">Edit</a></span>';
    }


    $tentry = '<li id="post-' . $post->ID . '" class="keynav ' . sandbox_post_class(false) . ' ' . $itemclass . '">';
      $tentry .= '<h2 class="entry-title">';
        $tentry .= '<a class="title-link" href="' . get_permalink() . '" rel="bookmark" title="' .  sprintf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) . '">';
          $tentry .= $post->post_title;
        $tentry .= '</a>';
      $tentry .= '</h2>';
      $tentry .= '<span class="entry-meta">';
        if ( $cats_meow = sandbox_cats_meow(', ') ) : // Returns categories other than the one queried
          $tentry .= '<span class="cat-links">' . sprintf( __( '%s', 'sandbox' ), $cats_meow ) . '</span>';
        endif;
        $tentry .= $editlink;
      $tentry .= '</span>';


      $tentry .= '<p class="desc">' . get_the_excerpt() . '</p>';

    $tentry .= '</li>';

    $corelist[] = $tentry;
  endforeach;

  // echo entry lists
?>

  <ul id="method-list" class="method-list">
    <?php echo implode("\n", $corelist); ?>
  </ul>

<?php
endif;
?>


		</div><!-- #content -->
	</div><!-- #jq-primaryContent -->

<?php get_sidebar() ?>
<?php get_footer() ?>
