<?php
/**
 * BuddyPress - Members Loop
 *
 * Querystring is set via AJAX in _inc/ajax.php - bp_legacy_theme_object_filter()
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 */

/**
 * Fires before the display of the members loop.
 *
 * @since 1.2.0
 */
do_action( 'bp_before_members_loop' ); ?>

<?php if ( bp_get_current_member_type() ) : ?>
	<p class="current-member-type"><?php bp_current_member_type_message() ?></p>
<?php endif; ?>

<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>

	<div id="pag-top" class="pagination">

		<div class="pag-count" id="member-dir-count-top">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="member-dir-pag-top">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

	<?php

	/**
	 * Fires before the display of the members list.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_before_directory_members_list' ); ?>

	<ul id="members-list" class="item-list" aria-live="assertive" aria-relevant="all">

	<?php while ( bp_members() ) : bp_the_member(); ?>

		<?php // Get the Cover Image
        $member_cover_image_url = bp_attachments_get_attachment('url', array(
          'object_dir' => 'members',
          'item_id' => bp_get_member_user_id(),
        ));
      ?>
 
      

		<div class="bp__single-member--back">
			<li <?php bp_member_class(); ?>>
				<?php if ($member_cover_image_url) { ?>
					<img class="bp__members--background" src="<?php echo $member_cover_image_url; ?>">
					<?php
				} else {
					?>
					<div class="bp__members--background" style="background-color:#D8D8D8;"></div>
					<?php
				}
				?>
				<div class="item-avatar">
					<a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar(); ?></a>
				</div>


					<div class="item-title">

						<a href="<?php bp_member_permalink(); ?>"></a><?php echo bp_core_get_username( bp_get_member_user_id() ); ?>

						<!-- <div class="bp__profile--description"> -->
							<?php //echo ucFirst( xprofile_get_field_data(  $field_id = 13,  bp_get_member_user_id(),  $multi_format = 'string' ))?> 
							<!-- </div> -->


					</div>

					<div class="item-meta"><span class="activity" data-livestamp="<?php bp_core_iso8601_date( bp_get_member_last_active( array( 'relative' => false ) ) ); ?>"><?php bp_member_last_active(); ?></span></div>

					<?php

					/**
					 * Fires inside the display of a directory member item.
					 *
					 * @since 1.1.0
					 */
					do_action( 'bp_directory_members_item' ); ?>

					<?php
					 /***
					  * If you want to show specific profile fields here you can,
					  * but it'll add an extra query for each member in the loop
					  * (only one regardless of the number of fields you show):
					  *
					  * bp_member_profile_data( 'field=the field name' );
					  */
					?>
					<!-- <div class="bp__arcade--profile-info"><p>hello</p></div> -->
					

				<div class="clear"></div>
			</li>

			<div class="bp__single-members--information">
				<span>The my arcade stats will go here!<br/>points<br/>stats<br/>ect...</span>
						<div class="action">

						<?php

						/**
						 * Fires inside the members action HTML markup to display actions.
						 *
						 * @since 1.1.0
						 */
						do_action( 'bp_directory_members_actions' ); ?>

						</div>
						
						<div class="second_tab_list">
							<div class="friendship-button">
								<a class="bp__meta--member-link" href="<?php bp_member_permalink(); ?>">View Profile</a>
							</div>
						</div>

			</div>

		</div>

	<?php endwhile; ?>

	</ul>

	<?php

	/**
	 * Fires after the display of the members list.
	 *
	 * @since 1.1.0
	 */
	do_action( 'bp_after_directory_members_list' ); ?>

	<?php bp_member_hidden_fields(); ?>

	<div id="pag-bottom" class="pagination">

		<div class="pag-count" id="member-dir-count-bottom">

			<?php bp_members_pagination_count(); ?>

		</div>

		<div class="pagination-links" id="member-dir-pag-bottom">

			<?php bp_members_pagination_links(); ?>

		</div>

	</div>

<?php else: ?>

	<div id="message" class="info">
		<p><?php _e( "Sorry, no members were found.", 'buddypress' ); ?></p>
	</div>

<?php endif; ?>

<?php

/**
 * Fires after the display of the members loop.
 *
 * @since 1.2.0
 */
do_action( 'bp_after_members_loop' );
