<?php

/*
* This gets all the code from the assets file to be loaded into the main file.
* list all the files that are in use inside the assets folder.
*/

/*
* This pulls in the shortcodes folder there the shortcodes code lives.
*/
if ( ! is_admin() ) {
	require dirname( __FILE__ ) . '/shortcodes.php';
}