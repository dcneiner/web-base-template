<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>

<!--[if lt IE 7]>  <html <?php language_attributes(); ?> class="no-js ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]>     <html <?php language_attributes(); ?> class="no-js ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]>     <html <?php language_attributes(); ?> class="no-js ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html <?php language_attributes(); ?> class="no-js ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html <?php language_attributes(); ?> class="no-js">  <![endif]-->
<!--[if !IE]><!--> <html>             <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="<?php bloginfo('stylesheet_directory') ?>/js/lib/modernizr-1.5.min.js"> </script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class( ( is_home() || is_front_page() ) ? 'home' : 'sub'); ?>>
  
  <header id="header">
    
    <?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
    <<?php echo $heading_tag; ?> id="logo">
      <a href="<?php echo home_url( '/' ) ?>" rel="home" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
    </<?php echo $heading_tag; ?>>
    
     <nav id="project-nav"> 
       <ul> 
         <li class="alpha"><a href="http://jquery.com">jQuery</a></li> 
         <li><a href="http://jqueryui.com">UI</a></li> 
         <li class="active"><a href="http://jquerymobile.com">Mobile</a></li> 
         <li class="break"><a href="http://plugins.jquery.com">Plugins</a></li>
         <li><a href="http://meetups.jquery.com">Meetups</a></li> 
         <li><a href="http://forum.jquery.com">Forum</a></li> 
         <li><a href="http://events.jquery.com">Events</a></li> 
         <li class="break"><a href="http://jquery.org/about">About</a></li> 
         <li class="omega"><a href="http://jquery.org/donate">Donate</a></li> 
       </ul> 
     </nav>

     <nav id="site-nav">
       <ul>
         <li id="nav-docs" class="alpha"><a href="http://jquerymobile.com/demos/1.1.0/">Docs</a></li>
         <li id="nav-download"><a href="/download">Download</a></li>
         <li id="nav-platforms"><a href="/gbs">Platforms</a></li>
	 <li id="nav-themes"><a href="/themeroller/">Themes</a></li>
         <li id="nav-contribute"><a href="/resources">Resources</a></li>
         <li id="nav-community"><a href="http://forum.jquery.com/jquery-mobile">Forum</a></li>
         <li id="nav-blog" class="omega"><a href="/blog">Blog</a></li>
       </ul>
<!--<li id="nav-strategy" class="alpha"><a href="/strategy">Strategy</a></li>-->
<!--<li id="nav-planning"><a href="/designs">Designs</a></li>-->
     </nav>
   </header>

   <section id="page">