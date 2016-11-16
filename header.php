<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CasaValdesiCorporate
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header">
	<nav class="navbar navbar-custom">
		<div class="valign-wrapper overlay">
			<div class="container-fluid cf-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() . '/img/homepage/logo-diaconia.png' ?>" width="61px" height="auto"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#" class="active">Homepage</a></li>
						<li><a href="#">Foresterie</a></li>
						<li><a href="#">Solidarietà</a></li>
						<li><a href="#">Sostenibilità</a></li>
						<li><a href="#">Il Blog</a></li>
						<li><a href="#">Contatti</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
						<li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
						<li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
						<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ITA<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">ENG</a></li>
		            <li><a href="#">GER</a></li>
		          </ul>
		        </li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
			<div class="central-logo text-center">
				<img src="<?php echo get_template_directory_uri() . '/img/homepage/logo-casevaldesi.png'?>" alt="" />
				<h1>Vocazione all'accoglienza</h1>
			</div>
		</div>
	</nav>
</div>
