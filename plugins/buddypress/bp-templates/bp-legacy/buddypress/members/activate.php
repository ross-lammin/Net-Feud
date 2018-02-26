<?php
/**
 * BuddyPress - Members Activate
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

?>

<div id="buddypress">

	<?php

	/**
	 * Fires before the display of the member activation page.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_before_activation_page' ); ?>

	<div class="page" id="activate-page">

		<div id="template-notices" role="alert" aria-atomic="true">
			<?php

			/** This action is documented in bp-templates/bp-legacy/buddypress/activity/index.php */
			do_action( 'template_notices' ); ?>

		</div>

		<?php

		/**
		 * Fires before the display of the member activation page content.
		 *
		 * @since 1.1.0
		 */
		do_action( 'bp_before_activate_content' ); ?>

		<?php if ( bp_account_was_activated() ) : ?>

			<?php if ( isset( $_GET['e'] ) ) : ?>
				<p><?php echo 'Congrats! Your account was successfully activated. You can get right into the action at <a href="' . get_home_url() . '">home page</a> or you can <a href="' . get_home_url() . '/login">log in</a> with the username and password you provided when you signed up.'; ?></p>
			<?php else : ?>
				<p><?php echo 'Congrats! Your account was successfully activated. You can get right into the action at <a href="' . get_home_url() . '">home page</a> or you can <a href="' . get_home_url() . '/login">log in</a> with the username and password you provided when you signed up.'; ?></p>
			<?php endif; ?>

		<?php else : ?>

			<p class="activate__error-message"><?php _e( 'Aww man, there was a problem activating your account. Did you click one the link inside the email that was sent to you. Don’t worry, you can either try again or type in the activation key manually (the last part of the link usually 32 characters long).', 'buddypress' ); ?></p>

			<form action="" method="get" class="standard-form activation__form--key" id="activation-form forms__action">

				<label for="key"><?php _e( 'Activation Key:', 'buddypress' ); ?></label>
				<input type="text" name="key" id="key" value="" />

				<p class="submit">
					<input class="button--medium button__player-card" type="submit" name="submit" value="<?php esc_attr_e( 'Activate', 'buddypress' ); ?>" />
				</p>

			</form>

			<?php echo '<p>If this didn’t work you can always <a href="' . get_home_url() . '/contact-us">contact us</a> and we will do our best to help with the situation.</p>';?>

		<?php endif; ?>

		<?php

		/**
		 * Fires after the display of the member activation page content.
		 *
		 * @since 1.1.0
		 */
		do_action( 'bp_after_activate_content' ); ?>

	</div><!-- .page -->

	<?php

	/**
	 * Fires after the display of the member activation page.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_after_activation_page' ); ?>

</div><!-- #buddypress -->
