<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div id="page-container">
	
	<div id="header">
		<h1>Sizzle JavaScript Selector Library</h1>
		<p><span>A pure-JavaScript CSS selector engine<br /> designed to be easily dropped in to a host library.</span></p>
	</div>
	
	<div id="content">
	
		<p class="download link"><strong><a href="http://github.com/jquery/sizzle/zipball/master">Download .zip file</a></strong></p>
		<p class="doc link"><a href="http://wiki.github.com/jquery/sizzle">Documentation</a></p>
		<p class="github link"><a href="http://github.com/jquery/sizzle/tree/master">Github project (source code)</a></p>
		<p class="group link"><a href="http://groups.google.com/group/sizzlejs">Sizzle discussion group</a></p>
		
		<div class="features">
			<div class="first">
				<h2>Features</h2>
				<ul>
					<li>Completely standalone (no library dependencies)</li>
					<li>Competitive performance for most frequently used selectors</li>
					<li>Only 4KB minified and gzipped</li>
					<li>Highly extensible with easy-to-use API</li>
					<li>Designed for optimal performance with event delegation</li>
					<li>Clear IP assignment (all code held by the Dojo Foundation, contributors sign CLAs)</li>
				</ul>
			</div>
		
			<div>
				<h2>Selector Features</h2>
				<ul>
					<li>CSS 3 Selector support</li>
					<li>Full Unicode support</li>
					<li>Escaped selector support <code>#id\:value</code></li>
					<li>Contains text <code>:contains(text)</code></li>
					<li>Complex :not <code>:not(a#id)</code></li>
					<li>Multiple :not <code>:not(div,p)</code></li>
					<li>Not attribute value <code>[name!=value]</code></li>
					<li>Has selector <code>:has(div)</code></li>
					<li>Position selectors <code>:first</code>, <code>:last</code>, <code>:even</code>, <code>:odd</code>, <code>:gt</code>, <code>:lt</code>, <code>:eq</code></li>
					<li>Easy Form selectors <code>:input</code>, <code>:text</code>, <code>:checkbox</code>, <code>:file</code>, <code>:password</code>, <code>:submit</code>, <code>:image</code>, <code>:reset</code>, <code>:button</code></li>
					<li>Header selector <code>:header</code></li>
				</ul>
			</div>
		
			<div>
				<h2>Code Features</h2>
				<ul>
					<li>Provides meaningful error messages for syntax problems</li>
					<li>Uses a single code path (no XPath)</li>
					<li>Uses no browser-sniffing</li>
					<li>Caja-compatible code</li>
				</ul>
			</div>
		</div>
	</div>
	
</div>
<?php get_footer(); ?>
