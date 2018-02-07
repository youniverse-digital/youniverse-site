<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>
	<div class="logo">
		<a href="<?php echo home_url(); ?>">
			<?php
				$mainLogo = get_field('main_logo', 'options');
				if($mainLogo){
					echo '<img src="'.$mainLogo.'" alt="Logo">';
				}else {
					echo '<img src="'.get_template_directory_uri().'/dist/assets/media/logo.png" alt="Logo">';
				}
			?>
		</a>
	</div>

	<header class="animating-header" id="intro">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/header-small.jpg" alt="header image" class="hero-bg-small">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/header.jpg" alt="header image" class="hero-bg-medium">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/header-large.jpg" alt="header image" class="hero-bg-large">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/identity-print-screen.png" alt="header text" class="header-text">
	</header>

	<div id="menuToggle"></div>

	<nav class="menu">
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/ydl-logo-black.png" alt="youniverse logo">
		</div>
		<div class="mobile-menu" id="close-menu"></div>
		<ul>
			<li><a href="#about" class="current-item">Intro</a></li>
			<li><a href="#work">Work</a></li>
			<li><a href="#why">Profile</a></li>
			<li><a href="#ckn">Creative Knowledge Network</a></li>
			<li><a href="#clients">Clients</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>

	<section id="about">
		<div class="container">
			<h2>Simply Intelligent design</h2>
			<p>We make things that people want to use.</p>
			<p>That are a pleasure to engage with.</p>
			<p>That inspire thought and action.</p>
			<p>We make things that help you achieve greater things.</p>
		</div>
	</section>

	<section class="work-slider" id="work">
		<div class="container-large">
            <div class="slider-wrapper">
            	<div class="slider" id="myslider">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/partridge.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/work-item-2.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/work-item-3.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/work-item-4.jpg">
				</div>
				<ul class="dots">
				    <li class="active"></li>
				    <li></li>
				    <li></li>
				    <li></li>
				</ul>
				<span class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#2E435A" d="M302.67 90.877l55.77 55.508L254.575 250.75 358.44 355.116l-55.77 55.506L143.56 250.75z"/></g></svg>
                </span>
                <span class="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 501.5 501.5"><g><path fill="#2E435A" d="M199.33 410.622l-55.77-55.508L247.425 250.75 143.56 146.384l55.77-55.507L358.44 250.75z"/></g></svg>
                </span>
            </div>
		</div>
	</section>

	<section id="why">
		<div class="container">
			<h2>We’re here to support you, champion you. To help you grow.</h2>
			<p>See if we’re the right fit for you.</p>
			<a href="/playbook/" class="button">View resume</a>
		</div>
	</section>

	<section class="team-panel">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/team.jpg">
		<div class="container">
			<ul class="team-list">
				<li data-target='team_mem_1' class="active">Joe</li>
				<li data-target='team_mem_2'>Alex</li>
				<li data-target='team_mem_3'>Dale</li>
				<li data-target='team_mem_4'>Frankie</li>
				<li data-target='team_mem_5'>Dan</li>
				<li data-target='team_mem_6'>Denny</li>
				<li data-target='team_mem_7'>Kish</li>
			</ul>
			<div id="team_mem_1" class="team-member-info active">
				<h3>Front End Developer</h3>
				<p>Sprite handler extraordinaire, Joe is our resident games and responsive design developer. His hobbies include snowboarding, Game Of Thrones quizzes and dressing up as Slash when answering the door. Why? We haven't asked. All the same - terrifying.</p>
			</div>
			<div id="team_mem_2" class="team-member-info">
				<h3>Managing Director</h3>
				<p>A man with many hats, Alex is responsible for the efficient day to day running of the business, whilst ensuring Youniverse adheres to the highest standards of design and delivery. Advocating an open and communicative work ethic, Alex manages the flow of in house development, delivery and client relationships. He also heads up design and user interface development, lucky chap.</p>
			</div>
			<div id="team_mem_3" class="team-member-info">
				<h3>Lead Developer</h3>
				<p>Dale is head of development and our esteemed boffin. He's particularly adept at discovering how things work and equally so at working out what’s wrong when they don't! When not up to his elbows in code, he’s likely to be knee-deep in lenses and cameras, or books, or the garden (if you can be knee-deep in a garden).</p>
				<p>He has less hats than Alex, but he does have a bow tie. And a beard.</p>
			</div>
			<div id="team_mem_4" class="team-member-info">
				<h3>Design</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div id="team_mem_5" class="team-member-info">
				<h3>Development</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div id="team_mem_6" class="team-member-info">
				<h3>Project Managment &amp; Social Media</h3>
				<p>Denny has worked with a number of major publishers, museums, art galleries and retailers, helping to develop their print and digital content. Her passion for culture and creativity drew her to Youniverse where she researches industry trends and innovations, making sure we continue to break new ground. When she's not too busy movie-marathoning for her Masters in Film, she's running our social media networks. Come say hello on there.</p>
			</div>
			<div id="team_mem_7" class="team-member-info">
				<h3>Other</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>

	<section class="knowledge-network" id='ckn'>
		<div class="inner">
			<div class="container">
				<h2>Creative Knowledge<span>.</span>Network</h2>
				<h3>Stimulating thought, support and action</h3>
			</div>
			<div class="split-container">
				<div class="two-cols">
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p>Od tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="/creative-knowledge-network/" class="button">Find out more</a>
					</div>
					<div>
						<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/knowledge-team.jpg">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="work-panels" id="clients">
		<div class="container-large two-cols">
			<?php
				// The Query
				$args = array(
					'post_type' => 'work',
					'posts_per_page' => -1
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) {
					// The Loop
					while ( $query->have_posts() ) {
						$query->the_post();
						$thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
						$thumb_url = $thumb_url_array[0];

						$client_thumb = get_field('client_thumb');

						echo '
							<a class="work-item" href="'.get_the_permalink().'">
								<div class="inner-bg">
									<img src="'.$thumb_url.'">
								</div>
								<img src="'.$client_thumb.'" class="client">
							</a>
						';

					}
					wp_reset_postdata();
				}
			?>
		</div>
		<p style="text-align:center;"><a href="javascript:void(0);" class="button view-more-work">View more</a></p>
	</section>

	<section class="contact" id="contact">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/contact.jpg" alt="contact image" class="contact-bg">
		<div class="container">
			<div class="map">
				<img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/glow.png">
				<div>
					<p class="phone">0116 261 6853</p>
					<p><strong>Leicester Studio</strong></p>
					<p>31 Rutland St</p>
					<p>Leicester</p>
					<p>LE1 1RE</p>
					<p><a href="mailto:contact@youniverse.co.uk">contact@youniverse.co.uk</a></p>
					<p><a href="">Skype us: youniverseltd</p></a>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
