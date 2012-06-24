<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
  <head profile="http://gmpg.org/xfn/11">
	  <title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
  	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <link rel="alternate" type="application/rss+xml" title="jQuery Team Updates" href="http://jquery.org/feed/" />
    <link rel="stylesheet" href="http://static.jquery.com/files/rocker/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="http://static.jquery.com/files/rocker/css/screen.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/additions.css" type="text/css" />
  	<link rel="stylesheet" type="text/css" href="http://static.jquery.com/org/style.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://static.jquery.com/files/rocker/scripts/custom.js"></script>
    <?php wp_head() // For plugins ?>
    <script type="text/javascript" src="http://static.jquery.com/org/jquery.roundabout.js"></script>
    <script type="text/javascript" src="http://static.jquery.com/org/jquery.roundabout-shapes-1.1.min.js"></script>
    <?php if(is_page('Team')): ?>
      <script src="<?php bloginfo('stylesheet_directory') ?>/jquery.photos.js" type="text/javascript" charset="utf-8"></script>
    <?php endif; ?>
    <link rel="shortcut icon" href="http://static.jquery.com/org/favicon.png" type="image/x-icon"/>
  </head>
  <body class="<?php sandbox_body_class() ?>">
 	<div id="access">
 		<div class="skip-link"><a href="#jq-content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>
 	</div><!-- #access -->
    
    <div id="jq-siteBurst" <?php if($home != 'true'){echo 'class="jq-breakout"';} else { echo 'class="home"';};?>>
      <div id="jq-siteContain">
        <div id="jq-header">
          <a id="jq-siteLogo" href="/" title="jQuery Home"><img src="http://static.jquery.com/org/images/project/jquery-project-sm.png" alt="jQuery: Write Less, Do More." /></a>
          <div id="jq-primaryNavigation" class="roundbottom shadow">
          <ul>
<li class="jq-jquery"><a href="http://jquery.com/" title="jQuery Home">jQuery</a></li>
<li class="jq-plugins"><a href="http://plugins.jquery.com/" title="jQuery Plugins">Plugins</a></li>
<li class="jq-ui"><a href="http://jqueryui.com/" title="jQuery UI">UI</a></li>
<li class="jq-meetup"><a href="http://meetups.jquery.com/" title="jQuery Meetups">Meetups</a></li>
<li class="jq-forum"><a href="http://forum.jquery.com/" title="jQuery Forum">Forum</a></li>
<li class="jq-blog"><a href="http://blog.jquery.com/" title="jQuery Blog">Blog</a></li>
<li class="jq-about jq-current"><a href="http://jquery.org/about" title="About jQuery">About</a></li>
<li class="jq-donate"><a href="http://jquery.org/donate" title="Donate to jQuery">Donate</a></li>
          </ul>
        </div><!-- /#primaryNavigation -->

        <div id="jq-secondaryNavigation" class="">
          <ul>
	 		<div id="menu"><ul><li class="page_item page-item-14"><a href="http://jquery.org/team" title="Team">Team</a></li><li class="page_item page-item-185"><a href="http://jquery.org/history" title="History">History</a></li><li class="page_item page-item-232"><a href="http://jquery.org/sponsors" title="Sponsors">Sponsors</a></li><li class="page_item page-item-180"><a href="http://jquery.org/license" title="License">License</a></li><li class="page_item page-item-2"><a href="http://jquery.org/about" title="About">About</a></li><li class="page_item page-item-4"><a href="http://jquery.org/updates" title="Updates">Updates</a></li><li class="page_item page-item-16"><a href="http://jquery.org/donate" title="Donate">Donate</a></li></ul></div> 
          </ul>
        </div><!-- /#secondaryNavigation -->
      </div><!-- /#header -->
      <div id="jq-contentContain" class="rounded shadow">
        <div id="jq-content" class="jq-clearfix jq-overvlowContain roundedTop">
          <hr class="space" />
