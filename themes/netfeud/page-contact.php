<?php 
/**
 * Template Name: contact page
 *
 * The template for displaying the Contact home page.
 *
 */
?>

<?php get_header() ?>
<div class="form-layout">
	<fieldset id="contact-form">
		<legend id="contact-title">Contact Us</legend>
		<div class="field-set">
		<label for="first-name">*</label>
			<input id="form-first-name" class="required" placeholder="First Name..." type="text" name="first-name">
		</div>
		<div class="field-set">
			<label for="last-name">*</label>
			<input id="form-last-name" class="required type="text" placeholder="Last Name..." name="last-name">
		</div>
		<div class="field-set" >
			<label for="email">*</label>
			<input id="form-email" class="required" type="email" placeholder="Email..." name="email">
		</div>
		<div class="field-set">
			<label for="account-name">*</label>
			<input id="form-account-name" class="required type="text" placeholder="Account Name..." name="account-name">
		</div>
		<div class="field-set">
		<label for="contact-number">  </label>
			<input id="form-number" type="tel" placeholder="Tel..." name="contact-number">
		</div>
		<label class="label-drop" for="dropdown">*</label>
		<select id="selection" class="required" name="dropdown">
			<option disabled selected>-----select one------</option>
			<optgroup label="You'r Opinion">
				<option>Feedback</option>
				<option>Improvements</option>
			</optgroup>
			<optgroup label="Anything Wrong?">
				<option>Issues</option>
				<option>Queries</option>
			</optgroup>
			<optgroup label="Your Games">
				<option>Developers</option>
			</optgroup>
			<optgroup label="Other">
				<option>Other</option>
			</optgroup>
		</select>
		<label class="label-text" for="comments">*</label>
		<textarea id="comments" class="required" name="comments" placeholder="Comments..."></textarea>
		<div id="buttons">
			<button id="submit">Send</button>
			<button id="cancel">Clear</button>
		</div>
	</fieldset>
	<div class="form-description">
		<h1>Have Your Say!</h1>
		<u><em><h3>Your opion is important to us</h3></em></u>
		<p>Have you found a problem that needs fixing?</p>
		<p>If so, then send us a message by filling in all the relevant information into the contact us form and we will do our best to reply and/or fix the problem. </p>
		<p>Do you have a new idea you would like to see?</p>
		<p>Any suggestions you have to make your experience better would be highly appriciated.<br>
		 Any: <ul>
		 <li>game requests - tell us where you saw them.</li>
		 <li>colors or flashes on website that may cause you discomfort.</li>
		 <li>small or hard to read text.</li>
		 <li>ect...</li>
		 </ul></p>
		 <p>Are you a games developer?</p>
		 <p>See your games in light as we can list your game(s) for you, or even have them featured in our top 10 carousel.</p>
		 <p>Do you want to give us recognition &#128512;</p>
		 <p>You can subscribe, rate, review or like us on Facebook and tell all your friends about us.</p>
	</div>
</div>





<div class="suc7 suc17 success-overlay">
	<div class="suc1 suc11">
		<p class="success-box-x">&#x2718;</p>
		<div class="suc2 suc12 "><h1 class="suc3 suc13">Message Sent successfully</h1></div>
		<p class="suc4 suc14">Thank you for your form submition we will get back to you as soon as we can &#128512;</p>
		<div class="suc5 suc15"></div>
	</div>
</div>




<?php get_footer() ?>