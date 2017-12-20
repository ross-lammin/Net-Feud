<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package first10
 */

get_header(); ?>

	<div id="primary" class="content-area page__background">
		<main id="main" class="site-main page__wrapper" role="main">
			<h1><?php the_title();?></h1>
			<?php

			while ( have_posts() ) : the_post();
				?>

				<button class="contact__details--button">Contact Details</button>

				<div class="contact__details display-none">
					<h3>Have Your Say!</h3>

					<em>Your opinion is important to us</em>

					<p>Have you found a problem that needs fixing?</p>

					<p>Do you have a new idea you would like to see?</p>

					<p>Any suggestions you have to make your experience better would be highly appriciated.
					Any:</p>

					<ul>
						<li>game requests - tell us where you saw them.</li>
						<li>colors or flashes on website that may cause you discomfort.</li>
						<li>small or hard to read text.</li>
						<li>ect...</li>
					</ul>

					<p>Are you a games developer?</p>

					<p>See your games in light as we can list your game(s) for you, or even have them featured in our top 5 games.</p>

					<p>Do you want to give us recognition &#x1f600;</p>

					<p>If so, then send us a message by filling in all the relevant information into the contact us form and we will do our best to reply and/or fix the problem.</p>

					<p>You can subscribe, rate, review or like us on social media and tell all your friends about us.</p>


					<div class="social-icon__container">
						<div title="Facebook" class="social-icon--facebook"></div>
						<div title="Twitter" class="social-icon--twitter"></div>
						<div title="Google+" class="social-icon--google"></div>
						<div title="Youtube" class="social-icon--youtube"></div>
						<div title="snapchat" class="social-icon--snapchat"></div>
					</div>

				</div>

<?php
				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();