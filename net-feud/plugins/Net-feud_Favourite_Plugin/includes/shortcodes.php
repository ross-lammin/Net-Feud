<?php
/*
* This shortcode gets the form markup from nf_form_output.php and displays it.
* Then it uses $_POST to send the post ID to the database asigned to the user ID 
* of that logged in user.
*/
add_shortcode( 'fav_form_submit', 'nf_favourite_submit_form' );
function nf_favourite_submit_form() {
 
	$nf_the_post_id = get_the_id();
	$request_secure_server = filter_input(INPUT_SERVER, 'REQUEST_URI');
	
	ob_start();
	include dirname( __FILE__ ) . '/templates/nf_form_output.php';

	$_POST['post-data'] = '';
	if ( isset( $_POST['submit-post-data'] )) {
		$_POST['post-data'] = $nf_the_post_id;
	}

	$user_id= '';
	if ( is_user_logged_in() ) {
		$user_id = get_current_user_id();
	}
		
	$get_current_user_favourites = get_user_meta( $user_id, 'favourite_post_id' );


	if (isset( $_POST['submit-post-data'] )) { // on submit

		if ( is_user_logged_in() ) { //checks if user is logged in.

			if ( count( $get_current_user_favourites ) >= 10 ) { // see if array is less than 10

				$fetch_favourite_game_ids = get_user_meta( $user_id, $key = 'favourite_post_id', $single = false );
				$nf_remove_last_favourite = array_pop( $fetch_favourite_game_ids );
				delete_user_meta( $user_id, 'favourite_post_id', $meta_value = $nf_remove_last_favourite );
				add_user_meta( $user_id, 'favourite_post_id', $_POST['post-data'], false);
			}

			else if ( ! in_array( $nf_the_post_id, $get_current_user_favourites ) ) { // <- no duplicates.

				add_user_meta( $user_id, 'favourite_post_id', $_POST['post-data'], false);

			} else {

				echo '<span class="favourite__error-message">This is already one your favourite games!</span>';
			}

		} else {

			echo '<span class="favourite__error-message">You must be logged in to favourite games!</span>';
		}

	}

	return ob_flush();
} // End shortcode


/*
*	This function displays the output of the ['fav_form_submit'] shortcode.
*/
add_action( 'init', 'nf_display_favourites_list' );
function nf_display_favourites_list() {

	ob_start();

	$url = $_SERVER["REQUEST_URI"];
	$it_is_fav_page = strpos($url, 'favorites');

	$user_id= '';
	if ( is_user_logged_in() ) {
		$user_id = get_current_user_id();
	
		if ( $it_is_fav_page ) {

			// this give us the array of ids set to the user.
			$fetch_favourite_game_ids = get_user_meta( $user_id, $key = 'favourite_post_id', $single = false );
			?>

			<div class="favourite__single-game--container">
				<h3 class="favourite__container--title">Favourite games</h3>
				<div class="favourite__container--group">

					<?php
					foreach ($fetch_favourite_game_ids as $key => $value) {
						$nf_get_post = get_post( $value );
						$nf_show_post_title = $nf_get_post->post_title;
						$nf_post_thumbnail = get_the_post_thumbnail( 
																	$value, 
																	array(100, 100), 
																	array( 'class'=>' favourite__single-game--image' ) 
																);
						$nf_post_permalink = get_permalink( $value );
						include dirname( __FILE__ ) . '/templates/nf_display_favourite_markup.php';
					}

					global $current_user; wp_get_current_user(); 
					if ( is_user_logged_in() ) { 
					 $user_name = $current_user->user_login; 
					}

					if ( isset( $_POST['submit-remove-post-data'] ) && is_user_logged_in()) {
						delete_user_meta( $user_id, 'favourite_post_id', $_POST['remove-post-data'] );
						wp_redirect( home_url() . '/profile/' . $user_name . '/activity/favorites/' );
						exit;
					}
					?>

				</div>
				<h3>Favourite category</h3>

				<div class="favourite__categories-grid--container">

				<?php
				

				$get_current_user_favourites_categories = get_user_meta( $user_id, 'favourite_categories' );
				$list_of_categories = get_categories();
				$message = '';

				include dirname( __FILE__ ) . '/templates/nf_favourites_categories.php';

					if ( isset( $_POST['submit-add-category'] ) && is_user_logged_in()) {
						if ( count( $get_current_user_favourites_categories ) === 0 ) {

							add_user_meta( $user_id, 'favourite_categories', $_POST['add-category']);
							wp_redirect( home_url() . '/profile/' . $user_name . '/activity/favorites/' );
							exit;

						}
					}
					
					?>
			
			</div>

			<h3>Favourite posts</h3>
		</div>
		<?php
		}
	}
	return ob_flush();
} // End function
