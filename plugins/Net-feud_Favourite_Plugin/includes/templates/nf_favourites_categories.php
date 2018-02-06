<?php

$list_of_categories = get_categories();

 // This is the container that will hold the favorite categories (max 2) and display 5 random games from the categories ?>

<?php // The container header will hold a list of the favorited categories and display them as a nav-bar that will switch between the two categories and display the random 5 games ?>
	<header>
			<?php
			if ( count( $get_current_user_favourites_categories ) === 1 ) {
				foreach ( $get_current_user_favourites_categories as $key => $value ) {
					$link_from_fav_cat_title = home_url() . '/category/' . $value . '/';
					echo 
					'<p class="favourite__categories-grid--header-li"><a href="' . $link_from_fav_cat_title . '">' . $value . '</a></p>';
				}
			} else {
				echo '<p style="color:green" class="favourite__categories-grid--header-li no-content">Add a favourite category</p>';
			}
			?>

	</header>
<?php // The main body will hold the user generated content and will be automatically updated if the user switches categories and will also have random games everytime they visit this page  ?>
		<div class="favourite__categories-grid--games-container">

			<?php
			
			if ( count( $get_current_user_favourites_categories ) === 1 ) {

					$args = array(
						'category_name' => $value,
						'orderby' => 'rand',
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 5
					);

				$fav_cat_query;
				$fav_cat_query = new WP_Query($args);

				if( $fav_cat_query->have_posts() ) {

				while ($fav_cat_query->have_posts()) : $fav_cat_query->the_post();
					?>

						<div class="favourite__single-game--single-container">
							<a href="<?php echo get_permalink(); ?>">
								<header class="favourite__single-game--header">
									<span class="favourite__single-game--title"><?php the_title() ?></span>
								</header>
								<div class="favourite__single-game--thumbnail"><?php the_post_thumbnail( 
																		array(100, 100), 
																		array( 'class'=>' favourite__single-game--image' ) 
																	); ?>
								</div>
							</a>
						</div>

					<?php
					endwhile;

				}
				wp_reset_query();

			} else {
			?>
			<form action="<?php the_permalink(); ?>" class="favorite-categories__table" method = "post">
				<select name="add-category">
			<?php

				foreach ( $list_of_categories as $categories ) {
					$list_of_favourite_categories = $categories;
					echo '<option value="' . $list_of_favourite_categories->cat_name . '">' . $list_of_favourite_categories->cat_name . '</option>';
				}
				?>
			
				</select>
				<input type="submit" name="submit-add-category" value="Add this category" class="favourite__category--submit" />

			</form>
			<?php
			}
			?>

		</div>

		<?php
		if ( count( $get_current_user_favourites_categories ) === 1 ) {
			?>
				<div class="favourite__categories-grid--header-li">
					<form method="post">
						<?php echo '<input type="hidden" name="remove-fav-cat" value="' . $value . '"\>'?>
						<input class="favourite__submit-remove--input" type="submit" name="submit-remove-fav-cat" value="Remove this category"\>
					</form>
				</div>

			<?php
			}

		if ( isset( $_POST['submit-remove-fav-cat'] ) && is_user_logged_in()) {
			delete_user_meta( $user_id, 'favourite_categories', $_POST['remove-fav-cat'] );
			wp_redirect( home_url() . '/profile/' . $user_name . '/activity/favorites/' );
			exit;
		}
		?>
