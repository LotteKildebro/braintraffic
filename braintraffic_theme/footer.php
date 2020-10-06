<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package braintraffic_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<h2>Join the Brain Traffic mailing list</h2>
		<h3>Sign up for email about upcoming events, new posts, and other delightful tidbits.</h3>
	
<form class="pure-form">
 <div class="row">

	 <div class="column">

<input type="name" class="form-control" id="name" placeholder="First Name">

	<input type="name" class="form-control" id="Lname" placeholder="Last Name">

	
    <input type="email" class="form-control" id="email" placeholder="Email Adress">

	
		<button type="submit">Submit</button>
		</div>
</div>
</form>
		<div class="site-info">
			<p><a class="brain" href="#">&copy; 2020 Brain Traffic</a>
<a href="#">Button Conference</a>
<a href="#">Content Strategy Podcast</a>    
<a href="#">Contact Us</a>
<a href="#">Newsletter</a>
<a href="#">Twitter</a>
<a href="#">LinkedIn</a>
</p>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Font Awesome-script -->
<script src="https://kit.fontawesome.com/269c89033b.js" crossorigin="anonymous"></script>
</body>
</html>
