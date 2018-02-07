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
			<h1><?php the_title(); ?></h1>
		</div>
	</section>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<section>
			<div class="container">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
