<?php
/**
<<<<<<< HEAD
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package first10
=======
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package net-feud
>>>>>>> release/rc-1.0.0
 */

?>

<section class="no-results not-found">
	<header class="page-header">
<<<<<<< HEAD
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'first10' ); ?></h1>
=======
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'net-feud' ); ?></h1>
>>>>>>> release/rc-1.0.0
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

<<<<<<< HEAD
			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'first10' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'first10' ); ?></p>
=======
			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'net-feud' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'net-feud' ); ?></p>
>>>>>>> release/rc-1.0.0
			<?php
				get_search_form();

		else : ?>

<<<<<<< HEAD
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'first10' ); ?></p>
=======
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'net-feud' ); ?></p>
>>>>>>> release/rc-1.0.0
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
