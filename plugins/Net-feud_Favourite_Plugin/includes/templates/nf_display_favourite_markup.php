<?php
/*
*	This is the markup for displaying the post components on a user seleted post page.
*/


echo '<div class="favourite__single-game--single-container" id="fav-game-' . $value . '">';
?>
	<?php echo'<a href="' . $nf_post_permalink . '">'; ?>
		<header class="favourite__single-game--header">
			<span class="favourite__single-game--title"><?php echo $nf_show_post_title ?></span>
		</header>
		<div class="favourite__single-game--thumbnail"><?php echo $nf_post_thumbnail ?></div>
	</a>
	<form action="" class="favorite-remove-game__table" method = "post">
		<?php echo '<input type="hidden" name="remove-post-data" value="' . $value . '"/>';?>
		<input type="submit" name="submit-remove-post-data" value="Remove" class="favourite__remove-favourite--link" />
	</form>
</div>

