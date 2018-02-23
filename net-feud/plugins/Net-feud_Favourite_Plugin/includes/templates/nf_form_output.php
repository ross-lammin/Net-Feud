<?php
/*
*	This is the output for displaying the form submit for a bookmark.
* $nf_the_post_id = An integer variable that will contain the post id.
*/
?>


<?php echo '<form action="' . $request_secure_server . '" class="add-favorite-game__table" method = "post">'; ?>
<?php echo '<input type="hidden" name="post-data" value="' . $nf_the_post_id . '"/>';?>
<input type="submit" name="submit-post-data" value="Favourite this game" />
</form>