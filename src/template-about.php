<?php 
    /**
     * Template Name: About Page
     */
?>

<?php get_header(); ?>

<?php 

    /**
     * Page Content Variables
     */

     $about_lead_text        = get_field('about_lead_text');
     $about_lead_circle_text = get_field('about_lead_circle_text');

     $what_we_do_text  = get_field('what_we_do_text');
     $what_we_do_stars = get_field('what_we_do_stars');

     $how_we_do_it_text    = get_field('how_we_do_it_text');
     $how_we_do_it_circles = get_field('how_we_do_it_circles');

     $who_we_do_it_for_text  = get_field('who_we_do_it_for_text');
     $who_we_do_it_for_logos = get_field('who_we_do_it_for_logos');
    
     $project_management_text  = get_field('project_management_text');
     $project_management_logos = get_field('project_management_logos');

     $testimonials_text = get_field('testimonials_text');
     $testimonials_list = get_field('testimonials_list');

?>

	<div class="header-about">
        <div class="about-header-container">
            <div class="logo-container">
                <img src="<?php bloginfo('stylesheet_directory') ?>/assets/media/ydl-logo-large.png" alt="">
            </div>
            
            <h1 class="expanding-heading">Expanding since 2010</h1>
        </div>
	</div>

	<div id="menuToggle"></div>

	<nav class="menu">
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/media/ydl-logo-black.png" alt="youniverse logo">
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
					<div class="self-centre">
                        <h2>About Us</h2>
                        <?php echo $about_lead_text ?>
					</div>
					<div class="about-lead-circle-container self-centre">
                        <img class="circle-flag" src="<?php bloginfo('stylesheet_directory') ?>/assets/media/flag.png" alt="">
						<div class="about-lead-circle">
                            <div class="circle-text-container baskerville">
                                <?php echo $about_lead_circle_text ?>
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
                <?php echo $what_we_do_text ?>
            </div>
            <div class="stars-content-panel">
                <div class="close-btn">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/media/cancel-music.svg" alt="">
                </div>
                <div class="stars-content">
                    <h2 class="popup-name">Strategy</h2>
                    <ul class="stars-list">

                    </ul>
                </div>
            </div>
            <div class="stars-container">
                <?php if ( have_rows('what_we_do_stars') ): ?>
                    <?php while ( have_rows('what_we_do_stars') ): the_row(); ?>
                       <?php 
                            $star_name   = get_sub_field('star_title');
                            $star_filled = get_sub_field('star_filled');
                            $star_data   = get_sub_field('star_data');
                            $star_link   = "";

                            if ($star_filled == true) {
                                $star_link = "star-gold.png";
                            } else {
                                $star_link = "star-grey.png";
                            }
                        ?>

                        <div class="star">
                            <img class="star-img" src="<?php bloginfo('stylesheet_directory') ?>/img/<?php echo $star_link ?>" alt="">
                            <p class="star-name"><?php echo $star_name ?></p>
                            <div class="star-info">
                                <?php echo $star_data ?>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                
            </div>
        </div>
    </section>

    <section class="knowledge-network how-we-do">
		<div class="container">
           <div class="how-inner">
               <h2>How we do it</h2>
               <?php echo $how_we_do_it_text ?>
           </div>
        </div>
        <div class="how-circles-container">
            <svg id="Layer_1" class="pencil-line" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1243.95 397.57"><defs><style>.cls-3,.cls-4{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:3px;}.cls-4{stroke-dasharray:6.01 6.01;}</style></defs><title>Untitled-2</title><path class="cls-3" d="M71.5,293.5s.37,1,1.09,2.79" transform="translate(-70.1 -89.43)"/><path class="cls-4" d="M74.85,301.86c24.14,58,175.86,387.4,363.63-8.36,205-432,349.42-26,349.42-26s183.49,479,391.39,0c0,0,20.92-65.29,129.42-172.77" transform="translate(-70.1 -89.43)"/><path class="cls-3" d="M1310.86,92.6l2.14-2.1" transform="translate(-70.1 -89.43)"/></svg>
            <img src="<?php echo get_template_directory_uri() ?>/assets/media/pencil-dash.png" alt="" class="pencil-dash">
            <?php if ( have_rows('how_we_do_it_circles') ): ?>
                <?php while ( have_rows('how_we_do_it_circles') ): the_row(); ?>
                    <?php
                        $circle_text   = get_sub_field('circle_title');
                        $circle_colour = get_sub_field('circle_colour');
                    ?>

                    <div class="how-circle-box">
                        <div class="how-circle" style="background-color: <?php echo $circle_colour ?>">
                            <p><?php echo $circle_text ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="who-for">
        <div class="container-large">
            <div class="who-for-inner">
                <div class="container">
                    <h2>Who we do it for</h2>
                    <?php echo $who_we_do_it_for_text ?>
                </div>
            </div>
        </div>

        <div class="logo-section">
            <img class="satellite-dish" src="<?php echo get_template_directory_uri(); ?>/assets/media/dish.png" alt="">
            <svg xmlns="http://www.w3.org/2000/svg" class="logos-cap" viewBox="0 0 1365.78 191"><title>logos-rect-cap</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M1365.78,191H0C199.05,69.81,432.82,0,682.89,0S1166.73,69.81,1365.78,191Z"/></g></g></svg>

            <div class="logos-container">
                <?php 
                    $logo_counter = 0;
                ?>
                <?php if ( have_rows('who_we_do_it_for_logos') ): ?>
                    <?php while( have_rows('who_we_do_it_for_logos') ): the_row(); ?>
                        <?php 
                            if ($logo_counter % 4 == 0 && $logo_counter != 0) {
                                echo '</div></div>';
                            }
                            if ($logo_counter == 0 || $logo_counter % 4 == 0) {
                                echo '<div class="container logos-inner"> <div class="logo-row">';
                            }

                            $client_name = get_sub_field('client_name');
                            $client_logo = get_sub_field('client_logo');
                        ?>

                        <div class="img-container">
                            <img src="<?php echo $client_logo ?>" alt="<?php echo $client_name ?>" class="logo">
                        </div>

                        <?php $logo_counter++; ?>
                    <?php endwhile; ?>
                        </div></div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="project-management">
        <div class="container-large">
            <div class="pm-inner">
                <div class="container pm-heading">
                    <h2>Project management</h2>
                    <?php echo $project_management_text ?>
                </div>
            </div>
            <div class="pm-grid">
                <?php if ( have_rows('project_management_logos') ): ?>
                    <?php 
                        $logo_counter = 0;
                    ?>
                    <?php while ( have_rows('project_management_logos') ): the_row(); ?>
                        <?php 
                            if ($logo_counter % 3 == 0 && $logo_counter != 0) {
                                echo '</div>';
                            }

                            if ($logo_counter % 3 == 0 || $logo_counter == 0) {
                                echo '<div class="pm-row">';
                            }

                            $system_logo  = get_sub_field('system_logo');
                            $system_name  = get_sub_field('system_name');
                        ?>
                        <div class="pm-item">
                            <img src="<?php echo $system_logo ?>" alt="<?php echo $system_name ?>">
                        </div>

                        <?php $logo_counter++; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="knowledge-network tesimonials-about">
        <div class="container-large">
            <div class="testimonials-inner">
                <div class="container">
                    <h2>Testimonials</h2>
                    <?php echo $testimonials_text ?>

                    <ul class="testimonials-list">
                        <?php if ( have_rows('testimonials_list') ): ?>
                            <?php while ( have_rows('testimonials_list')): the_row(); ?>
                                <?php 
                                    $testimonial_content = get_sub_field('testimonial_content');
                                    $testimonial_client  = get_sub_field('testimonial_client');
                                ?>

                                <li class="testimonial-item">
                                    <p>
                                        <?php echo $testimonial_content ?><span class="testimonial-client"><?php echo $testimonial_client ?></span>
                                    </p>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>