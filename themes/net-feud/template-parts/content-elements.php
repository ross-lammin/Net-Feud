<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package first10
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<!-- my html -->

<h2>Text</h2>
<h1>Header 1</h1>
<h2>Header 2</h2>
<h3>Header 3</h3>
<h4>Header 4</h4>
<h5>Header 5</h5>
<h6>Header 6</h6>

<h2>Paragraph</h2>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, </p>

<h2>Blockquotes</h2>
<blockquote>
<p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text.

It is typically distinguished visually using indentation and a different typeface or smaller size quotation. It may or may not include a citation, usually placed at the bottom.
</p>

<cite>Best game ever!</cite>
</blockquote>

<h2>Lists</h2>
<h2>Definition list</h2>
<dl>
<dt>Definition List Title</dt>
<dd>This is a definition list division.</dd>
</dl>

<h2>Ordered lists</h2>
<ol>
	<li>Item 1</li>
	<li>Item 2</li>
	<li>Item 3</li>
</ol>

<h2>Unordered lists</h2>
<ul>
	<li>Item 1</li>
	<li>Item 2</li>
	<li>Item 3</li>
</ul>

<h2>Horizontal rules</h2>
<hr/>

<h2>Tabular data</h2>
<table>
	<caption>table caption</caption>
	<thead>
		<tr>
			<th>Header 1</th>
			<th>Header 2</th>
			<th>Header 3</th>
			<th>Header 4</th>
			<th>Header 5</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>cell 1</td>
			<td>cell 2</td>
			<td>cell 3</td>
			<td>cell 4</td>
			<td>cell 5</td>
		</tr>
		<tr>
			<td>cell 1</td>
			<td>cell 2</td>
			<td>cell 3</td>
			<td>cell 4</td>
			<td>cell 5</td>
		</tr>
		<tr>
			<td>cell 1</td>
			<td>cell 2</td>
			<td>cell 3</td>
			<td>cell 4</td>
			<td>cell 5</td>
		</tr>
		<tr>
			<td>cell 1</td>
			<td>cell 2</td>
			<td>cell 3</td>
			<td>cell 4</td>
			<td>cell 5</td>
		</tr>
		<tr>
			<td>cell 1</td>
			<td>cell 2</td>
			<td>cell 3</td>
			<td>cell 4</td>
			<td>cell 5</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<tr>
			<th>Footer 1</th>
			<th>Footer 2</th>
			<th>Footer 3</th>
			<th>Footer 4</th>
			<th>Footer 5</th>
		</tr>
		</tr>
	</tfoot>
</table>

<h2>Code</h2>

<p>
<strong>Keyboard input:</strong>
<kbd>Cmd</kbd>
</p>

<p>
	<strong>Inline code:</strong>
	<code>code</code>
</p>

<p>
	<strong>Sample output:</strong>
	<samp>This is sample output from a computer program.</samp>
</p>

<h2>Preformmated Text</h2>
<pre>
"P R E F O R M A T T E D T E X T
  ! " # $ % &amp; ' ( ) * + , - . /
  0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
  @ A B C D E F G H I J K L M N O
  P Q R S T U V W X Y Z [ \ ] ^ _
  ` a b c d e f g h i j k l m n o
  p q r s t u v w x y z { | } ~ "
</pre>

<h2>Inline elements</h2>
<div>
<p><a href="#">This text is a link</a></p>
<p><strong>This is strong text</strong></p>
<p><em>This is emphasis text</em></p>
<p><b>This is bold text</b></p>
<p><i>This is italicised text</i></p>
<p><u>This text is underlined</u></p>
<p><del>This text is deleted</del> and <ins>This text is inserted</ins></p>
<p><s>This text has a strikethrough</s></p>
<p>Superscript<sup>®</sup></p>
<p>subscript H<sub>2</sub>O</p>
<p><small>This is small print</small></p>
<p>Abbrieviation <abbr title="HyperText Markup Language">HTML</abbr></p>
<p><dfn>this is definition Text</dfn></p>
<p><mark>This text is marked</mark></p>
<p>The <var>variable element</var> , such as <var>x</var> = <var>y</var></p>
<p>The time element <time datetime="2017-08-11">Yesterday</time></p>
</div>

<h2>Embedded content</h2>

<h2>Images</h2>
<h3>No <code>&lt;figure&gt;</code>element</h3>

<img src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg" alt="Image alt text">

<h3>Wrapped in a &lt;figure&gt; element, no &lt;figcaption&gt;</h3>

<figure>
	<img src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg" alt="Image alt text">
</figure>

<h3>Wrapped in a &lt;figure&gt; element and with a &lt;figcaption&gt;</h3>

<figure>
	<img src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg" alt="Image alt text">
	<figcaption>This is the caption for the image</figcaption>
</figure>

<h2>Audio</h2>
<audio controls></audio>

<h2>Video</h2>
<video controls></video>

<h2>Canvas</h2>
<canvas></canvas>

<h2>Meter</h2>
<meter value="2" min="0" max="10">2 out of 10</meter>

<h2>Progress</h2>
<progress value="50" max="100"></progress>

<h2>Inline SVG</h2>
<svg width="100px" height="100">
<circle cx="100" cy="100" r="100" fill="#1fa3ec"></circle>
</svg>

<h2>Iframe</h2>
<iframe src="sample-page" height="300"></iframe>

<h2>Form Elements</h2>
<form>
	<fieldset>
		<legend>Input fields</legend>
		<p>
			<label for="text">Text input:</label>
			<input id="text" type="text" placeholder="Text input">
		</p>
		<p>
			<label for="pass">Password:</label>
			<input id="pass" type="Password" placeholder="Type Password">
		</p>
		<p>
			<label for="web">Web Address:</label>
			<input id="web" type="url" placeholder="https://website.com">
		</p>
		<p>
			<label for="email">Email Address:</label>
			<input id="email" type="email" placeholder="name@email.com">
		</p>
		<p>
			<label for="phone">Phone Number:</label>
			<input id="phone" type="tel" placeholder="07123456789">
		</p>
		<p>
			<label for="search">Search:</label>
			<input id="search" type="search" placeholder="Enter search term">
		</p>
		<p>
			<label for="num">Number input:</label>
			<input id="num" type="Number" placeholder="Enter a number">
		</p>
		<p>
			<label for="error">Error:</label>
			<input id="error" type="error" placeholder="Text input">
		</p>
		<p>
			<label for="valid">Valid:</label>
			<input id="valid" type="valid" placeholder="Text input">
		</p>
	</fieldset>


<br/>

<fieldset>
	<legend>select menu</legend>
	<label for="select">Select</label>
	<span>
	<select id="Select" >
		<optgroup label="option group">
			<option>Select 1</option>
			<option>Select 2</option>
			<option>Select 3</option>
		</optgroup>
	</select>
	</span>
</fieldset>

<br/>

<fieldset>
	<legend>Checkboxes</legend>
	<label for="Checkboxes">Checkboxes</label>
	<ul>
		<li>
			<label for="checkbox1">Choice A</label>
			<input id="checkbox1" type="checkbox" name="Checkbox1">
		</li>
		<li>
			<label for="checkbox2">Choice B</label>
			<input id="checkbox2" type="Checkbox" name="Checkbox2">
		</li>
		<li>
			<label for="checkbox3"> Choice C</label>
			<input id="checkbox3" type="Checkbox" name="Checkbox3">
		</li>
	</ul>
</fieldset>

<br/>

<fieldset>
	<legend>Raido buttons</legend>
	<ul>
		<li>
			<label for="radio1">Choice A</label>
			<input id="radio1" type="radio" name="radio1">
		</li>
		<li>
			<label for="radio2">Choice B</label>
			<input id="radio2" type="radio" name="radio2">
		</li>
		<li>
			<label for="radio3"> Choice C</label>
			<input id="radio3" type="radio" name="radio3">
		</li>
	</ul>
</fieldset>

<fieldset>
	<legend>Textareas</legend>
	<label for="textarea">Textarea</label>
	<textarea id="textarea" rows="8" cols="48s" name="textarea" placeholder="Enter your message here"></textarea>
</fieldset>

<fieldset>
	<ledgend>HTML5 inputs</ledgend>
	<p>
	<label for="color"></label>
	<input type="color" id="color" value="#000000">
	</p>
	<p>
	<label for="ni">Nuber Input</label>
	<input type="number" id="ni" max="10" min="0" value="5">
	</p>
	<p>
	<label for="ir">Range</label>
	<input type="range" id="ir" value="10">
	</p>
	<p>
	<label for="idd">date</label>
	<input type="date" id="idd" value="2000-01-01">
	</p>
	<p>
	<label for="idm">Month Input</label>
	<input type="month" id="idm" value="2017-12">
	</p>
	<p>
	<label for="idw">Week Input</label>
	<input type="week" id="idw" value="2017-01">
	</p>
	<p>
	<label for="idt">Datetime Input</label>
	<input type="datetime" id="idt" value="2000-01-01T00:00:00Z">
	</p>
	<p>
	<label for="idtl">Datetime-local Input</label>
	<input type="datetime-local" id="idtl" value="2000-01-01T00:00">
	</p>
</fieldset>

<fieldset>
	<legend>Action buttons</legend>
	<p>input buttons</p>

		<input type="submit" value="Submit">
		<input type="button" value="Button">
		<input type="reset" value="Reset">
		<input type="submit" value="Disabled" disabled>

	<p>regular buttons</p>
	<p>
		<button type="submit">Submit</button>
		<button type="button">button</button>
		<button type="reset">Reset</button>
		<button type="submit" disabled>Disabled</button>
	</p>
</fieldset>
</form>
	<!--  my html close -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'first10' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
