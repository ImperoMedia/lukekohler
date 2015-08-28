<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lukekohler
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lukekohler' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
	
			<h1 id="title1" class="site-title">
	
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span style="font-weight:300; font-size: 104%;">Luke</span>
					<span style="font-weight:400; margin-left:-12px;">Kohler</span>
				</a>
	
			</h1>
			<h2 id="desc_text" class="site-description">
				<?php bloginfo( 'description' ); ?>
			</h2>

		</div><!-- .site-branding -->

		<nav class='sidebar sidebar-menu-collapsed'>
	      <a href='#' id='justify-icon'>
            <i class="fa fa-bars"></i>
	      </a>
	      <ul>
	        <li class='active'>
	          <a class='expandable' href='#' title='Home'>
	            <i class="fa fa-home"></i>
	            <span class='expanded-element'>Home</span>
	          </a>
	        </li>
	        <li>
	          <a class='expandable' href='http://imperomedia.com/portfolio' title='Portfolio'>
	            <i class="fa fa-desktop"></i>
	            <span class='expanded-element'>Portfolio</span>
	          </a>
	        </li>
	        <li>
	          <a class='expandable' href='https://github.com/imperomedia' title='Github'>
	            <i class="fa fa-github"></i>
	            <span class='expanded-element'>Github</span>
	          </a>
	        </li>
	        <li>
	          <a class='expandable' href='http://imperomedia.com' title='Impero Media'>
	            <i class="fa fa-code"></i>
	            <span class='expanded-element'>Impero Media</span>
	          </a>
	        </li>
	      </ul>
	    </nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
