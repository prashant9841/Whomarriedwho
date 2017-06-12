<?php
   /*
  Template Name: bodys
  */

  get_header(); 
?>

    <!-- Header/Homepage
    ================================================== -->
    <header id="banner" class="carousel slide zoom carousel-fade" data-ride="carousel">

      <div class="carousel-inner"><!-- Inner wrapper for slides -->
        <?php 
              
          $args = array( 'post_type' => 'slider', 'posts_per_page' => 1 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>

            <div class="item active"> <!-- First item slider -->
              <img src="<?php echo $imgsrc; ?>" alt="<?php the_title(); ?>"> <!-- First item background image slider -->
              <div class="carousel-caption overlay">
                <div class="content">
                  <div class="text wow bounceIn" data-wow-delay="0.2s">
                    <h1><?php the_title(); ?></h1>
                    <hr>
                  </div>
                </div>
              </div> <!-- End first item background image slider -->
            </div> <!-- End first item slider -->

        <?php 
            endwhile;
            wp_reset_query();
        ?>


        
      </div> <!-- End inner wrapper for slides -->

      <!-- Controls -->
      <a class="left carousel-control" href="#banner" role="button" data-slide="prev">
        <img src="<?php echo  get_template_directory_uri().'/img/06_left.png' ?>" alt="prev-img"> <!-- Left controls -->
      </a>
      <a class="right carousel-control" href="#banner" role="button" data-slide="next">
        <img src="<?php echo  get_template_directory_uri().'/img/05_right.png' ?>" alt="prev-img"> <!-- Left controls -->
      </a>
    </header>


    <!-- Vision/Mission 
    ================================================== -->
    <section id="vision">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <?php 
              
              $args = array( 'post_type' => 'service', 'posts_per_page' => 1 );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post(); 
              $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>

              <div class="item active">
                <div class="dark-overlay vision">
                  <div class="vision-border centered wow bounceIn">
                    <h2><?php the_title(); ?></h2>
                    <h6><?php the_content(); ?></h6>
                  </div>
                </div>
              </div>

            <?php 
                endwhile;
                wp_reset_query();
            ?>
          </div>

        </div>
    <!-- Portfolio Title -->
      <div class="light-overlay ptitle">
        <h2>Just Cool Images</h2>
        <h5>Recent pictures we’ve taken. Check them out!</h5>
      </div>
    </section>

    <!-- Portfolio Section
    ================================================== -->
    <section id="portfolio" class="grid">


        <?php 
          
          $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 9 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $i = 1;
        ?>
              <figure class="effect-portfolio wow fadeIn" data-wow-duration="<?php echo $i; ?>s"> <!-- Portfolio 1 -->
                <img src="<?php echo $imgsrc; ?> " alt="<?php the_title(); ?>"/> <!-- Your image here -->
                <figcaption> <!-- Caption -->
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>
                  <a href="#portfolioModal <?php $post->id; ?>" class="portfolio-link" data-toggle="modal">View more</a> <!-- Larger image popup -->
                </figcaption> <!-- End caption -->   
              </figure> <!-- End portfolio 1 -->

        <?php 
          $i++;
            endwhile;
            wp_reset_query();
        ?>

      
    </section> <!-- End Portfolio Section -->

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Youtube Video Embed</h2>
                            <div class="videoWrapper">
                                <iframe src="http://www.youtube.com/embed/aZpV2Cor0rE" allowfullscreen></iframe> <!-- Your Youtube URL Here -->
                            </div>
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p><strong>Want these theme for your portfolio?</strong> You can download this theme here for only $10, courtesy of jlpmedia.com. Awesome Photography/Portfolio Template is a bootstrap based awesome photography portfolio template. Creatively designed to present your artwork beautifully and clean. Catch more visitors and potential clients by using Solstice Photography/Portfolio Template to showcase your photography and crafts. This is mobile responsive template, very easy to use and well-documented codes.</p>
                            <ul class="list-inline">
                                <li>Date: August 2014</li>
                                <li>Client: Tarsier Graphics</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call-To-Action Section
    ================================================== -->
    <section id="subscribe"> 
      <div class="container">
        <div class="row">
          <div class="col-md-8 wow fadeIn" data-wow-delay="0.2s">
            <p><span>View All Galleries</span></p>
          </div>
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.4s">
            <a class="page-scroll" href="#footer"><span class="btn right">More</span></a> <!-- Subscribe button -->
          </div>
        </div>
      </div>
    </section>

    <!-- About Section
    ================================================== -->
<?php include('about.php'); ?>

    <!-- Footer Section
    ================================================== -->
    <section id="footer"> <!-- Start footer -->
      <div class="container"> <!-- Container -->
        <h4 class="foo_title">Studio PurLit</h4>
        <br>
        <br>
        <!-- Buttons --> 
        <a id="show" class="btn wow bounceIn" data-wow-delay="0.6s"><h2>Contact Us</h2></a> <!-- Button to click toggle contact form -->
        <br>
        <p><?php echo get_option('office_location') ?></p> <!-- Your email add here -->
        <p><?php echo get_option('phone_1') ?> <?php echo get_option('phone_1') ?></p> <!-- Any other information here -->

      </div> <!-- End container -->
    </section> <!-- End footer -->

    <!-- Toggle Contact Section
    ================================================== -->
    <section id="contact">  <!-- Start contact -->
      <div class="container"> <!-- Container -->

        <h2 style="text-align: center;">Book an Appointment</h2>
        <br>
        <br>
        <br>

        <?php echo do_shortcode('[contact-form-7 id="28" title="Untitled"]' ); ?>
      </div> <!-- End container -->
    </section> <!-- Start contact -->




<?php get_footer(); ?>
