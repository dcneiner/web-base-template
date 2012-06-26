<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>jQuery Blog <?php wp_title(); ?></title>
		<link rel="stylesheet" href="http://static.jquery.com/files/rocker/css/reset.css" type="text/css" />
		<link rel="stylesheet" href="http://static.jquery.com/files/rocker/css/screen.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="http://blog.jquery.com/css/blog.css?v=2" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
		<script type="text/javascript" src="http://static.jquery.com/files/rocker/scripts/custom.js"></script>
		<link rel="shortcut icon" href="http://static.jquery.com/favicon.ico" type="image/x-icon"/>
		<link rel="search" type="application/opensearchdescription+xml" href="/opensearch_desc.php" title="jQuery JavaScript Library (English)" />
		<link rel="alternate" type="application/rss+xml" title="jQuery Blog" href="http://blog.jquery.com/feed/" />
		<link rel="shortcut icon" href="http://static.jquery.com/favicon.ico" type="image/x-icon"/>
	</head>
<body>


<body id="jq-interior">

	<div id="jq-siteContain">
		<div id="jq-header">
			<a id="jq-siteLogo" href="http://jquery.com/" title="jQuery Home"><img src="http://static.jquery.com/files/rocker/images/logo_jquery_215x53.gif" width="215" height="53" alt="jQuery: Write Less, Do More." /></a>

			<div id="jq-primaryNavigation">

				<ul>
					<li class="jq-jquery"><a href="http://jquery.com/" title="jQuery Home">jQuery</a></li>
					<li class="jq-ui"><a href="http://jqueryui.com/" title="jQuery UI">UI</a></li>
					<li class="jq-mobile"><a href="http://jquerymobile.com/" title="jQuery Mobile">Mobile</a></li>
					<li class="jq-plugins"><a href="http://plugins.jquery.com/" title="jQuery Plugins">Plugins</a></li>
					<li class="jq-meetup"><a href="http://meetups.jquery.com/" title="jQuery Meetups">Meetups</a></li>
					<li class="jq-forum"><a href="http://forum.jquery.com/" title="jQuery Forum">Forum</a></li>
					<li class="jq-blog jq-current"><a href="http://blog.jquery.com/" title="jQuery Blog">Blog</a></li>
					<li class="jq-about"><a href="http://jquery.org/about" title="About jQuery">About</a></li>
					<li class="jq-donate"><a href="http://jquery.org/donate" title="Donate to jQuery">Donate</a></li>
				</ul>
			</div><!-- /#primaryNavigation -->

			<div id="jq-secondaryNavigation">
					<ul>
						<li class="jq-download jq-first"><a href="http://docs.jquery.com/Downloading_jQuery">Download</a></li>
						<li class="jq-documentation"><a href="http://docs.jquery.com/">Documentation</a></li>
						<li class="jq-tutorials"><a href="http://docs.jquery.com/Tutorials">Tutorials</a></li>

						<li class="jq-bugTracker"><a href="http://bugs.jquery.com/">Bug Tracker</a></li>
						<li class="jq-discussion jq-last"><a href="http://docs.jquery.com/Discussion">Discussion</a></li>
					</ul>
				</div><!-- /#secondaryNavigation -->



				<h1>Blog</h1>

				<form id="jq-primarySearchForm" action="<?php bloginfo('url'); ?>">

					<div>
						<input type="hidden" value="1" name="ns0"/>
						<label for="primarySearch">Search <span class="jq-jquery">jQuery</span></label>
						<input type="text" value="<?php echo esc_html($s, 1); ?>" name="s" accesskey="f" title="Search jQuery" id="jq-primarySearch"/>
						<button type="submit" name="go" id="jq-searchGoButton"><span>Go</span></button>
					</div>

				</form>

			</div><!-- /#header -->
