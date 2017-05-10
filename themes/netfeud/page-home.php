<?php
/**
 * Template Name: Home page
 *
 * The template for displaying the About home page.
 *
 */

?>

<?php get_header() ?>


<div class="full-box">
			<div class="container">
		  		<div class="carousel">
				    <div class="item _1"><span class="no-1"> # 1 </span></div>
				    <div class="item _2"><span class="no-2"> # 2 </span></div>
				    <div class="item _3"><span class="no-3"> # 3 </span></div>
				    <div class="item _4"><span class="no-4"> # 4 </span></div>
				    <div class="item _5"><span class="no-5"> # 5 </span></div>
				    <div class="item _6"><span class="no-6"> # 6 </span></div>
				    <div class="item _7"><span class="no-7"> # 7 </span></div>
				    <div class="item _8"><span class="no-8"> # 8 </span></div>
				    <div class="item _9"><span class="no-9"> # 9 </span></div>
				    <div class="item _10"><span class="no-10"> # 10 </span></div>
		  		</div>
			</div class="game-nav">
			<div class="next">Next</div>
			<div id="top-current-number"></div>
			<div class="prev">Prev</div>
		</div>

<script src="https://code.jquery.com/jquery-3.2.1.js"
 integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
 crossorigin="anonymous"></script>
<script type="text/javascript" src=" <?php echo get_template_directory_uri(); ?>/library/js/carousel.js"></script>
<script type="text/javascript" src=" <?php echo get_template_directory_uri(); ?>/library/js/menu.js"></script>
<?php get_footer() ?>