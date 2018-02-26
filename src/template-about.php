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
            <li><a href="/">Home</a></li>
            <li><a href="/about" class="current-item">About</a></li>
			<li><a href="/#clients">Work</a></li>
			<li><a href="/#contact">Contact</a></li>
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
                            <div class="circle-text-container baskerville">
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
                    <p>UX</p>
                </div>
                <div class="star">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/star-gold.png" alt="">
                    <p>Tech</p>
                </div>
                <div class="star">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/src/img/star-grey.png" alt="">
                    <p>Social</p>
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

        <div class="logo-section">
            <img class="satellite-dish" src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/dish.png" alt="">
            <svg xmlns="http://www.w3.org/2000/svg" class="logos-cap" viewBox="0 0 1365.78 191"><title>logos-rect-cap</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M1365.78,191H0C199.05,69.81,432.82,0,682.89,0S1166.73,69.81,1365.78,191Z"/></g></g></svg>

            <div class="logos-container">
                <div class="container logos-inner">
                    <div class="logo-row">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/bbc.png" alt="" class="logo">
                        </div>
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/barnes.png" alt="" class="logo">
                        </div>
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/bonnier.png" alt="" class="logo">
                        </div>
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/2020.png" alt="" class="logo">
                        </div>
                    </div>
                </div>
                <div class="container logos-inner">
                        <div class="logo-row">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/guthy.png" alt="" class="logo">
                            </div>
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/hachette.png" alt="" class="logo">
                            </div>
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/hay.png" alt="" class="logo">
                            </div>
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/hodder.png" alt="" class="logo">
                            </div>
                        </div>
                    </div>
                    <div class="container logos-inner">
                        <div class="logo-row">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/hulu.png" alt="" class="logo">
                            </div>
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/nhs.png" alt="" class="logo">
                            </div>
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/council.png" alt="" class="logo">
                            </div>
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/penguin.png" alt="" class="logo">
                            </div>
                        </div>
                    </div>
                    <div class="container logos-inner">
                        <div class="logo-row">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/purely.png" alt="" class="logo">
                            </div>
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/sky.png" alt="" class="logo">
                            </div>
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/sterling.png" alt="" class="logo">
                            </div>
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/logos/verve.png" alt="" class="logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="project-management">
        <div class="container-large">
            <div class="pm-inner">
                <div class="container pm-heading">
                    <h2>Project management</h2>
                    <p>We use proven technologies for keeping projects on track and hassle free. We can also integrate into your own management systems for seamless communication.</p>
                </div>
            </div>
            <div class="pm-grid">
                <div class="pm-row">
                    <div class="pm-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/slack.png" alt="">
                    </div>
                    <div class="pm-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/googledocs.png" alt="">
                    </div>
                    <div class="pm-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/trello.png" alt="">
                    </div>
                </div>
                <div class="pm-row">
                    <div class="pm-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/toggl.png" alt="">
                    </div>
                    <div class="pm-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/googlecal.png" alt="">
                    </div>
                    <div class="pm-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/media/evernote.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="knowledge-network tesimonials-about">
        <div class="container-large">
            <div class="testimonials-inner">
                <div class="container">
                    <h2>Testimonials</h2>
                    <p>Some kind words from our clients</p>

                    <ul class="testimonials-list">
                        <li class="testimonial-item">
                            <p>
                                    “Fantastic!!!...What a great idea and excellent in its execution... Very serious praise from this end!” <span class="testimonial-client">Terry hayes author 'I am pilgrim' Penguin Random House</span>
                            </p>
                        </li>
                        <li class="testimonial-item">
                            <p>
                                    “Youniverse are exceptional and gifted designers. They have revolutionised the way my products look with their creative vision.” <span class="testimonial-client">Paul Mckenna Paul Mckenna Productions</span>
                            </p>
                        </li>
                        <li class="testimonial-item">
                            <p>
                                    “Great work! It’s fabulous. One of the very best author sites I’ve ever seen.”<span class="testimonial-client">Larry Finlay Managing Director, Transworld Publishers</span>
                            </p>
                        </li>
                        <li class="testimonial-item">
                            <p>
                                    “Thanks so much for your help with this project. It looks fantastic - we’re so pleased”<span class="testimonial-client">Abby Parsons, Auriol Bishop, Hodder &amp Stoughton</span>
                            </p>
                        </li>
                        <li class="testimonial-item">
                            <p>
                                “Having worked with youniverse on projects large and small, we’re continually impressed by their flair and enthusiasm. They’re not only great designers and creative thinkers they’re excellent listeners who quickly become part of the team. We get asked this all the time ‘this is great… who are your designers?’ ”<span class="testimonial-client">Jim Grevatte. Creative Approaches for Museums and Heritage</span>
                            </p>
                        </li>
                        <li class="testimonial-item">
                            <p>
                                “Absolutely love it !”“I just got a shiver down my spine looking at it !!”<span class="testimonial-client">Simon Slater MD, The Payback Group</span>
                            </p>
                        </li>
                        <li class="testimonial-item">
                            <p>
                                “And just had to say (again) how lovely it is! It’s truly one of our best websites.”<span class="testimonial-client">Emily Van Hest. International Sales &amp Marketing Manager, Transworld Publishers &amp Random House Children’s Books</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>