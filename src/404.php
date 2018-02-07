<?php get_header(); ?>
	<div class="logo">
		<a href="<?php echo home_url(); ?>">
			<?php
				$alt_logo = get_field('alt_logo', 'options');
				if($alt_logo){
					echo '<img src="'.$alt_logo.'" alt="Logo">';
				}else {
					echo '<img src="'.get_template_directory_uri().'/dist/assets/media/ydl-logo-black.png" alt="Logo">';
				}
			?>
		</a>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<section>
		<div class="container">
			<h1>Sorry this page doesnt exist...</h1>
			<h2>Did you type it wrong, or did we?</h2>
			<p>I hope it wasnt us...</p>
			<a href="<?php echo home_url(); ?>"><?php _e( 'Return to homepage maybe?', 'html5blank' ); ?></a>

			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</section>
<?php get_footer(); ?>
