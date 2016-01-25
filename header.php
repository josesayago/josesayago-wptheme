<?php
/**
 * @Project: josesayago
 * @Author: Jose SAYAGO
 * @Email: hello@josesayago.com
 * @URL: http://josesayago.com
 * @Date:   2016-01-23 11:45:24
 * @Last Modified by:   Jose SAYAGO
 * @Last Modified time: 2016-01-25 07:47:15
 * @File: header.php
 * @License: GLP v2
 */
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Jose SAYAGO">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php if (is_front_page()) { ?>
	<meta name="description" content="<?php echo __('Web consultant, fullstack developer, entrepreneur and free software advocate. Author of Single Latest Posts and Network Latest Posts WordPress plugins.', 'jls'); ?>" />
	<?php } ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png"/>
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">
	<title><?php echo bloginfo('title'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<nav class="navbar navbar-default" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-ex1-collapse">
		        <?php
		        wp_nav_menu( array(
		            'theme_location' => 'top_menu',
		            'depth' => 2,
		            'container' => false,
		            'menu_class' => 'nav navbar-nav',
		            'fallback_cb' => 'wp_page_menu',
		            //Process nav menu using our custom nav walker
		            'walker' => new wp_bootstrap_navwalker())
		        );
		        ?>
		    </div><!-- /.navbar-collapse -->

		    <div class="navbar-search alignright">
		    	<span class="search-btn"><i class="glyphicon glyphicon-search"></i></span>
		    </div>
		</nav>
		<?php if (is_front_page()) { ?>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/jose_sayago-logo_big.png" alt="Jose SAYAGO Brand Logo" title="Jose SAYAGO Web Consultant &amp; Developer" class="logo-big" />

		<div class="statement"></div>
		<div class="statement-strings">
			<p>My work is all about <strong>YOU</strong> ^1000</p>
			<p>Your <strong>Marketing Strategy</strong> ^500</p>
			<p>Your <strong>Brand Positioning</strong> ^500</p>
			<p>Your <strong>SEO Strategy</strong> ^500</p>
			<p>Your <strong>Content Strategy</strong> ^500</p>
			<p>Your <strong>Social Media Strategy</strong> ^500</p>
			<p>Your <strong>Web Analytics</strong> ^500</p>
			<p>Your <strong>Website</strong> ^500</p>
			<p>Your <strong>Online Store</strong> ^500</p>
			<p>Your <strong>Entrepreneurial Efforts</strong> ^5000</p>
		</div>

		<?php } else { ?>
		<a href="<?php echo bloginfo('url'); ?>" title="Homepage">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/jose_sayago-logo_small.png" alt="Jose SAYAGO Brand Logo" title="Jose SAYAGO Web Consultant &amp; Developer" class="logo-big" />
		</a>
		<div class="post-title"><h1><?php echo the_title(); ?></h1></div>
		<?php } ?>
	</header>

	<?php if (is_front_page()) { ?>

	<div class="trusted-by">
		<h2><?php echo __('Trusted By', 'jls'); ?></h2>
		<ul class="client-logos">
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ula.png" alt="Universidad de Los Andes" title="Universidad de Los Andes" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/williamreed.png" alt="William-Reed Business Media" title="William-Reed Business Media" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/eprcreations.png" alt="EPR Creations" title="EPR Creations" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wsi.png" alt="WSI Digital Marketing" title="WSI Digital Marketing" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fundacitemerida.png" alt="FUNDACITE Mérida" title="FUNDACITE Mérida" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sanando.png" alt="SANANDO Charity" title="SANANDO Charity" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/openworldconsultores.png" alt="Open World Consultores C.A" title="Open World Consultores C.A" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hendryluzardo.png" alt="Hendry Luzardo" title="Hendry Luzardo" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/insigno.png" alt="Insigno C.A" title="Insigno C.A" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/krenvictoria.png" alt="Karen Victoria Diseño Gráfico" title="Karen Victoria Diseño Gráfico" /></li>
			<li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/altoimpactodigital.png" alt="Alto Impacto Digital C.A" title="Alto Impacto Digital C.A" /></li>
		</ul>
	</div>

	<?php } ?>
