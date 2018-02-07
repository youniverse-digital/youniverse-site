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

	<a href="<?php echo home_url(); ?>" class="back-to-home"></a>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<section class="work-info">
		<div class="container">
			<?php
				$client_image =  get_field('client_image');
				$top_image =  get_field('top_image');

				if($client_image){
					echo '<img src="'.$client_image.'" class="client-image">';
				}
			?>

			<h1><?php the_title(); ?></h1>
			<div class="work-images">
				<?php
					if($top_image){
						echo '<img src="'.$top_image.'">';
					}
				?>
			</div>
		</div>
	</section>

	<section class="intro-text">
		<div class="container">
			<?php
				$phone_image =  get_field('phone_image');
				if($phone_image){
					echo '
						<div class="two-cols">
							<div>';
								the_content();
								echo '
							</div>
							<div class="phone-anim">
								<img src="'.get_template_directory_uri().'/dist/assets/media/phone.png" class="phone-anim-phone" alt="">
								<img src="'.$phone_image.'" class="website-scroll" alt="">
							</div>
						</div>
					';
				}else {
					echo '
						<div>'.the_content().'</div><br><br>
					';
				}
			?>
		</div>
	</section>

	<?php
		if(have_rows('other_images')){
			echo '
				<section class="other-work-images">
					<div class="container">';

			while (have_rows('other_images')) {
				the_row();
				$image = get_sub_field('image');
				echo '<img src="'.$image.'">';
			}

			echo '
					</div>
				</section>
			';
		}
	?>

	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
