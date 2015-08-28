<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lukekohler
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<h5>Theme based off of <a href="https://github.com/ImperoMedia/headstart">Headstart</a> by Luke Kohler and <a href="http://imperomedia.com">Impero Media</a></h5>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.fittext.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/animate.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>

<script>
  $("#title1").fitText(1, { minFontSize: '48px', maxFontSize: '100px' });
  $("#desc_text").fitText(1, { minFontSize: '12px', maxFontSize: '20px' });
</script>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>