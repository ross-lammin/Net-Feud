<?php 
get_header();
if ( ! is_user_logged_in() ) {
?>
<div class="login-page__container">
	<div class="login-page__logo"></div>
<?php
$args = array(
    'redirect' => home_url(), 
    'id_username' => 'user',
    'id_password' => 'pass',
   );
?>
<?php wp_login_form( $args ); ?>

</div>

<?php
get_footer();

}