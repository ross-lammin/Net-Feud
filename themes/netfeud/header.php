<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>
</head>

<body>

	
	<p class="menu-text"></p>	
			<div class="menu-default">
			

			
			<ul class='pie1'>
  <li class='slice1'>
    <div class='slice-contents1'><h1 class="label label1">Home</h1></div>
  </li>
   <li class='slice2'>
    <div class='slice-contents2'><h1 class="label label2">Catagories</h1></div>   
  </li>
  <li class='slice3'>
    <div class='slice-contents3'><h1 class="label label3">Leaderboards</h1></div>
  </li>
  <li class='slice4'>
    <div class='slice-contents4'><h1 class="label label4">Events</h1></div>
  </li>
  <li class='slice5'>
    <div class='slice-contents5'><h1 class="label label5">Contact</h1></div>
  </li>
  <img class="logo-overlay1" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
</ul>
</div>

<header>

			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
			<img class="title" src="<?php echo get_template_directory_uri(); ?>/img/final-title.png">
			<div class="login-box">
				<p class="log-in">Log In</p>
				<p class="sign-up">Sign Up</p>
			</div>
			<div class="avatar-nest">
				<h1 class="dropdown-arrow">&#9665;</h1>
				<img src="<?php echo get_template_directory_uri(); ?>/img/blank-profile-picture.jpg" class="avatar">
				<!-- <div class="profile-card">
					<img src="<?php //echo get_template_directory_uri(); ?>/img/blank-profile-picture.jpg" class="card-avatar-pic">
					<h1 class="card-nickname">Nickname</h1>
					<div class="close-card-x"></div>
				</div> -->
			</div>
			 <a class="mag-glass" href="#">&#x1f50e;</a>	
			<input class="search" placeholder="Search..." type="search" name="search">		 
		</header>

		<ul class="top-nav">
			<li class="top-nav-items">Home</li>
			<li class="top-nav-items">Catagories</li>
			<li class="top-nav-items">Events</li>
			<li class="top-nav-items">Contact</li>
		</ul>

		

		<div class="top-ad-temp"><h1>ADVERTISEMENT</h1></div>

<!--my content -->


	
