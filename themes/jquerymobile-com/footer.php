<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
    <footer id="footer">
      <p id="jq-copyright">&copy; 2010-12 <a href="http://jquery.org/">The jQuery Foundation</a></p> 
              <p id="jq-hosting">Sponsored by <a href="http://mediatemple.net" class="jq-mediaTemple">Media Temple</a>, <a href="#project-sponsors">Mobile Project Sponsors</a> and <a href="http://jquery.org/sponsors">Others</a>.</p>
    </footer>
  </section>
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <!--<script src="<?php bloginfo('stylesheet_directory') ?>/js/site.js"></script>-->
<script type="text/javascript">
var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-1076265-1']); _gaq.push(['_trackPageview']); _gaq.push(['_setDomainName', '.jquerymobile.com']);
(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);})();
</script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
