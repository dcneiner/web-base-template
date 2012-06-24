<?php get_header() ?>

  <div id="jq-primaryContent">
    <div id="content">

<?php the_post() ?>
      <div id="post-<?php the_ID() ?>" <?php post_class(); ?>>
        <div class="entry-content">
        <div class="entry-title roundTop">
          <?php if ($is_plugin): ?>
          <h2 class="plugin-header">jQuery Plugin</h2>
          <?php endif; ?>

          <h1 class="jq-clearfix"><?php the_title(); ?></h1>
          <div class="entry-meta jq-clearfix">
            <?php echo $banner;  ?>
            Categories:
            <?php
            $all_cats = get_categories();
            $cat_list = array();
            foreach ($all_cats as $cat => $catinfo) {
              $catid = $catinfo->term_id;
              if (in_category( $catid ) && strpos($catinfo->cat_name, "Version") === false) {
                $cat_list[] = '<span class="category">' . substr(get_category_parents($catid, true, ' &gt; '), 0, -6) . '</span>';
              }
            }
            echo implode(' | ', $cat_list);

            ?>

          </div>

</div>
<?php
  echo get_the_content();
?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
        </div>
      </div><!-- .post -->
    <?php
      // show prev/next links only for Karl so he can finish editing posts
      ks_prev_next('karl.swedberg');
    ?>
<h1 id="comments" class="roundTop section-title">Support and Contributions</h1>
<div class="jq-box roundBottom">
  <p>Need help with <strong><?= the_title(); ?></strong> or have a question about it? Visit the <a href="http://forum.jquery.com/">jQuery Forum</a> or the <strong>#jquery</strong> channel on <a href="irc://irc.freenode.net/">irc.freenode.net</a>.</p>
  <p>Think you've discovered a jQuery bug related to <strong><?= the_title(); ?></strong>? <a href="http://docs.jquery.com/How_to_Report_Bugs">Report it</a> to the jQuery core team.</p>
  <p>Found a problem with this documentation? <a href="https://github.com/jquery/api.jquery.com/issues">Report it</a> on the GitHub issue tracker</p>

  <!-- <ul class="comment-instructions">
    <li><h3 style="margin-top: 0; font-size: 1.4em">Support requests, bug reports, and off-topic comments will be <em>deleted</em> without warning.</h3></li>
    <li>Please do post corrections or additional examples for <?php echo $title; ?> below. We aim to quickly move corrections into the documentation.</li>
    <li>If you need help, post at the <a href="http://forum.jquery.com/">forums</a> or in the #jquery IRC channel.</li>
    <li>Report bugs on the <a href="http://dev.jquery.com/newticket/">bug tracker</a> or the <a href="http://forum.jquery.com/developing-jquery-core">jQuery Forum</a>.</li>
    <li>Discussions about the API specifically should be addressed in the <a href="http://forum.jquery.com/developing-jquery-core">Developing jQuery Core forum</a>.</li>
  </ul> -->
<div style="margin-top:2em;">
<?php
comments_template();
?>
</div>
</div>
    </div><!-- #content -->
  </div><!-- #jq-primaryContent -->

<?php get_sidebar() ?>
<?php get_footer() ?>
