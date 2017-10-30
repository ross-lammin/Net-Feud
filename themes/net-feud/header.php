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
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'first10' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">

			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

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

		<div class="form__select-container--search" style="float: left;">
      <ul class="select__container" style="height:0;">
        <li>
          <input class="select__close select__option" type="radio" name="month" id="month-close" value=""/>
          <span class="select__label select__label--placeholder green">Month</span>
        </li>
        
        <li class="select__items">
          <input class="select__expand" type="radio" name="month" id="month-opener"/>
          <label class="select__close--label" for="month-close"></label>
          
          <ul class="select__options">
            <li class="select__option">
              <input class="select__input" type="radio" name="month" id="month-mr"/>
              <label class="select__label green" for="month-mr">January</label>
            </li>

            <li class="select__option">
              <input class="select__input" type="radio" name="month" id="month-mrs"/>
              <label class="select__label green" for="month-mrs">Febuary</label>
            </li>

          </ul>
          <label class="select__expand--label" for="month-opener"></label>
        </li>
      </ul>
    </div>

	</div>
</div>



	<div id="content" class="site-content">
