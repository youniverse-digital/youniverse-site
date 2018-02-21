<?php 
    /**
     * Template Name: About Page
     */
?>

<?php get_header(); ?>

	<div class="header-about">
        <div class="about-header-container">
            <div class="logo-container">
                <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/ydl-logo-large.png" alt="">
            </div>
            
            <h1 class="expanding-heading">Expanding since 2010</h1>
        </div>
	</div>

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
    
    <section class="knowledge-network about-lead">
		<div class="inner">
			<div class="split-container">
				<div class="two-cols">
					<div>
                        <h2>About Us</h2>
                        <p>We’re a multidisciplinary design agency working with diverse clients across identity, print and digital. We’re creative specialists who understand that intelligent thought and transformative design builds strong brands and happy clients.</p>
                        <p>We create work with heart, meaning and lasting value.</p>
                        <p>We’re united by the love of ideas and the potential in every new project.</p>
					</div>
					<div class="about-lead-circle-container">
                        <img class="circle-flag" src="<?php bloginfo('stylesheet_directory') ?>/src/img/flag.png" alt="">
						<div class="about-lead-circle">
                            <div class="circle-text-container">
                                <p>Design is exciting.</p>
                                <p>Problem solving is satisfying.</p>
                                <p>Results are rewarding.</p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
    </section>
    
    <section class="what-we-do">
        <div class="container-large">
            <div class="container what-inner">
                <h2>What we do</h2>
                    <p>We have a very particular set of skills.<br>
                    These we use to deliver work with speed, impact and accuracy.</p>
                    <p>Our core team covers the key bases – from research and analysis to design, development and content creation. </p>
            </div>
            <div class="stars-container">
                <div class="star">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/star-gold.png" alt="">
                    <p>Strategy</p>
                </div>
                <div class="star">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/star-gold.png" alt="">
                    <p>Design</p>
                </div>
                <div class="star">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/star-gold.png" alt="">
                    <p>User Experience</p>
                </div>
                <div class="star">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/star-gold.png" alt="">
                    <p>Technology</p>
                </div>
                <div class="star">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/star-grey.png" alt="">
                    <p>Social Media &amp Content</p>
                </div>
            </div>
        </div>
    </section>

    <section class="knowledge-network how-we-do">
		<div class="container">
           <div class="how-inner">
               <h2>How we do it</h2>
               <p>
                    Good design has incredible power to influence and shape outcomes and it is at the very heart of successful brands.
               </p>
               <p>
                    It doesn’t happen in isolation but is a part of a rigorous structured process. Our development framework ensures wild ideas result in the strongest solutions. 
               </p>
           </div>
        </div>
        <div class="how-circles-container">
            <img class="pencil-line" src="<?php bloginfo('stylesheet_directory') ?>/src/img/pencil.png" alt="">
            <div class="how-circle-box">
                <div class="how-circle" style="background-color: #3f51b5">
                    <p>Think</p>
                </div>
            </div>
            
            <div class="how-circle-box">
                <div class="how-circle" style="background-color: #2196f3">
                    <p>Design</p>
                </div>
            </div>

            <div class="how-circle-box">
                <div class="how-circle" style="background-color: #03a9f5">
                    <p>Develop</p>
                </div>
            </div>
            
            <div class="how-circle-box">
                <div class="how-circle" style="background-color: #00bcd5">
                    <p>Connect</p>
                </div>
            </div>
            
        </div>
    </section>

    <section class="who-for">
        <div class="container-large">
            <div class="who-for-inner">
                <div class="container">
                    <h2>Who we do it for</h2>
                    <p>We work with a number of diverse clients, ranging from boutique start-ups to global organisations. We’d like to work with you.</p>
                </div>
            </div>
        </div>
        <div class="logos-container">
            
        </div>
    </section>

<?php get_footer(); ?>