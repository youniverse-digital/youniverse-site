<?php /* Template Name: Playbook Template */ ?>

<?php get_header(); ?>
	<div class="logo">
		<a href="<?php echo home_url(); ?>">
			<?php
				$altLogo = get_field('alt_logo', 'options');
				if($altLogo){
					echo '<img src="'.$altLogo.'" alt="Logo">';
				}else {
					echo '<img src="'.get_template_directory_uri().'/dist/assets/media/ydl-logo-black.png" alt="Logo">';
				}
			?>
		</a>
	</div>

	<div id="menuToggle"></div>
	<nav class="menu playbook-menu">
		<div class="logo">
			<img src="assets/media/ydl-logo-black.png" alt="youniverse logo">
		</div>
		<div class="mobile-menu" id="close-menu"></div>
		<ul>
			<li><a href="#playbook-about" class="current-item">About us</a></li>
			<li><a href="#what">What we do</a></li>
			<li><a href="#how">How we do it</a></li>
			<li><a href="#who">Who we do it for</a></li>
			<li><a href="#project-management">Project management</a></li>
			<li><a href="#testimonials">Testimonials</a></li>
			<li><a href="#contacts">Contacts</a></li>
			<li><a href="#not-included">What we dont do</a></li>
		</ul>
	</nav>
	<section class="playbook-start">
		<div class="container">
			<h1>Resume <span>v1.0</span></h1>
			<a href="#" class="pdf-link">
				<img src="assets/media/ydl-pdf.png" alt="">
			</a>
		</div>
	</section>


	<section class="playbook" id="playbook-about">
		<div class="container">
			<h2>About us</h2>
			<p>Youniverse was formed in 2010 - the other Universe having had a head start.</p>
			<p>We’re a multidisciplinary design agency working with diverse clients across identity, print and digital. We’re creative specialists who understand that intelligent thought and transformative design builds strong brands and happy clients.</p>
			<p>We see beyond the mundane, creating work with heart, meaning and lasting value.</p>
			<div class="accordion">
				<h3>Reasons to work with us</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<h3>Culture</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<h3>Music to our ears</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="playbook" id="what">
		<div class="container">
			<h2>What we do</h2>
			<p>We have a ‘very particular set of skills’. These we use to deliver work with speed, impact and deadly accuracy.</p>
			<p>Our core team remains small, but covers the key bases – from research and analysis to design, development and content creation.</p>
			<div class="accordion">
				<h3>Strategy</h3>
				<div class="content">
					<div class="inner">
						<ul>
							<li>Strategy and positioning workshops</li>
							<li>Target audience analytics</li>
							<li>Google design sprints</li>
							<li>Iterative design and moodboard development</li>
							<li>Copywriting</li>
						</ul>
					</div>
				</div>
				<h3>Design</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<h3>User Experience</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<h3>Technology</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<h3>Social media</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="playbook" id="how">
		<div class="container">
			<h2>How we do it</h2>
			<p>Good design has incredible power to influence and shape outcomes and it is at the very heart of successful brands.</p>
			<p>It doesn’t happen in isolation but is a part of a rigorous structured process. Our development framework ensures wild ideas result in the strongest solutions.</p>
			<div class="accordion">
				<h3>Think</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<h3>Design</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<h3>Develop</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="playbook" id="who">
		<div class="container">
			<h2>Who we do it for</h2>
			<p>We work with a number of diverse clients, ranging from boutique start-ups to global organisations. Here’s a selection:</p>
			<img src="assets/media/clients-moodboard.jpg" alt="clients image">
		</div>
	</section>




	<section class="playbook" id="testimonials">
		<div class="container">
			<h2>Testimonials</h2>
			<p>Some kind words from our clients.</p>
			<div class="testimonials">
				<blockquote>“Fantastic!!!...What a great idea and excellent in its execution... Very serious praise from this end!”</blockquote>
				<p>Terry hayes author 'I am pilgrim'penguin random house</p>

				<blockquote>“Youniverse are exceptional and gifted designers. They have revolutionised the way my products look with theircreative vision.”</blockquote>
				<p>Paul mckenna paul mckenna productions</p>

				<blockquote>“Great work! It’s fabulous. One of the very best author sites I’ve ever seen.”</blockquote>
				<p>Larry finlay managing director,transworld publishers</p>

				<blockquote>“Thanks so much for your help with this project. It looks fantastic - we’re so pleased”</blockquote>
				<p>Abby parsons, auriol bishophodder &amp; stoughton</p>

				<blockquote>“Having worked with youniverse on projects large and small, we’re continually impressed by their flair and enthusiasm. They’re not only great designers and creative thinkers they’re excellent listeners who quickly become part of the team. We get asked this all the time ‘this is great… who are your designers?’ ”</blockquote>
				<p>Jim grevatte creative approaches for museums and heritage</p>

				<blockquote>“Absolutely love it !”“I just got a shiver down my spine looking at it !!”</blockquote>
				<p>Simon Slater md, the payback group</p>

				<blockquote>“And just had to say (again) how lovely it is! It’s truly one of our best websites.”</blockquote>
				<p>Emily van hestinternational sales &amp; marketing manager transworld publishers & random house children’s books</p>
			</div>
		</div>
	</section>


	<section class="playbook" id="project-management">
		<div class="container">
			<h2>Project management</h2>
			<p>We use proven technologies for keeping projects on track and delivering to deadlines. This optimises our work flow and gives you real time feedback, input on progress and ensures production issues are dealt with effectively and with minimal impact.</p>
			<p>We’re always available by phone, email and Slack.</p>
			<div class="accordion">
				<h3>Project management apps</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="playbook" id="contacts">
		<div class="container">
			<h2>Contacts</h2>
			<p>We’re based in Leicester, located here, there and everywhere.</p>
			<br>
			<p>LCB Depot</p>
			<p>31 Rutland Street, Leicester LE1 1RE,</p>
			<p>Email info@lcbdepot.co.uk | Tel 0116 261 6800 </p>
			<br>
			<br>
			<p>We’re always keen to help you develop new projects. No pressure, no hard sell, call us for an informal chat.</p>
			<br>
			<p>New business: alex@youniverse.co.uk </p>
			<p>D: 0116 261 6853 </p>
		</div>
	</section>




	<section class="playbook" id="not-included">
		<div class="container">
			<h2>What we don’t do</h2>
			<p>A lot of things we do, some we don’t. Some because we can’t and some because we won’t.</p>
			<div class="accordion">
				<h3>Promise what we can't deliver</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<h3>Pitch for free</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<h3>Adhere to a particular model</h3>
				<div class="content">
					<div class="inner">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
