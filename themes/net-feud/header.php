<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first10
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">


<div class="header__burger-menu--container">
  <div class="header__burger-menu--bar-1"></div>
  <div class="header__burger-menu--bar-2"></div>
  <div class="header__burger-menu--bar-3"></div>
</div>




		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-bar__primary--list' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


<div class="header__searchbar--container">
	<div class="header__searchbar--inner-container">
		<button class="button__search-bar action-button__bg--medium header__button--search-bar"></button>
		<input class="header__searchbar--search-input" id="input__search" type="search" placeholder="Search For..."><div class="header__searchbar--clear"></div>
		<div class="header__searchbar--dropdown">
			<h3 class="header__searchbar--dropdown-text">Search for</h3>
		</div>
	</div>
</div>



	<div id="content" class="site-content">
