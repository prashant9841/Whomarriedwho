<?php
   /*
  Template Name: bodys
  */

  get_header(); 
?>

   <div class="body">
     
<div class="container">
  <div class="ad-field clearfix">
    <a href="#">
      <img src="<?php echo  get_template_directory_uri().'/images/add.jpg' ?>" alt="add for here">
    </a>
  </div>
  <header class="page-header">
    <h2 class="title">Married Couples</h2>
  </header>
  <div class="row">
    <section class="celebs-box clearfix">

        <?php 
              
          $args = array( 'post_type' => 'new_celebs', 'category_name' => 'married', 'posts_per_page' => 4 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>


            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="celeb">
                <a href="<?php echo get_the_permalink(); ?>">
                  <figure class="thumb">
                    <img src="<?php echo $imgsrc; ?>" alt="<?php the_title(); ?>">
                  </figure>
                  <span class="overlay"> <span class="overlay-content"> <?php the_title(); ?> </span> </span>
                </a>
              </div>
            </div>




        <?php 
            endwhile;
            wp_reset_query();
        ?>

    </section>
  </div>
  
  <div class="row">
    <section class="celebs-box selection-block clearfix">


        <?php 
              
          $args = array( 'post_type' => 'new_celebs', 'category_name' => 'married', 'posts_per_page' => 12, 'offset' => 4  );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>


            <div class="col-md-2 col-sm-4 col-xs-12">
              <div class="celeb">
                <a href="<?php echo get_the_permalink(); ?>">
                  <figure class="thumb">
                    <img src="<?php echo $imgsrc; ?>" alt="<?php the_title(); ?>">
                  </figure>
                  <span class="overlay"> <span class="overlay-content"> <?php the_title(); ?> </span> </span>
                </a>
              </div>
            </div>




        <?php 
            endwhile;
            wp_reset_query();
        ?>

        <hr>

        <?php 
              
          $args = array( 'post_type' => 'new_celebs', 'posts_per_page' => 12 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>


            <div class="col-md-2 col-sm-4 col-xs-12">
              <div class="celeb">
                <a href="<?php echo get_the_permalink(); ?>">
                  <figure class="thumb">
                    <img src="<?php echo $imgsrc; ?>" alt="<?php the_title(); ?>">
                  </figure>
                  <span class="overlay"> <span class="overlay-content"> <?php the_title(); ?> </span> </span>
                </a>
              </div>
            </div>




        <?php 
            endwhile;
            wp_reset_query();
        ?>
      
    </section>
  </div>


  <!-- END OF MARRIED COPULES -->


  <header class="page-header">
    <h2 class="title">Featured Celebs</h2>
  </header>

  <div class="row">
    <section class="celebs-box clearfix">

        <?php 
              
          $args = array( 'post_type' => 'new_celebs', 'posts_per_page' => 4 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>

        <?php $featured = types_render_field('featured') ?>
            <?php if ($featured == 'Featured'): ?>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="celeb">
                  <a href="<?php echo get_the_permalink(); ?>">
                    <figure class="thumb">
                      <img src="<?php echo $imgsrc; ?>" alt="<?php the_title(); ?>">
                    </figure>
                    <span class="overlay"> <span class="overlay-content"> <?php the_title(); ?> </span> </span>

                      
                    <?php 
                      foreach((get_the_category()) as $category) {
                        echo '<span class="badge">'.$category->cat_name . '</span> '; 
                      } 
                    ?>
                  </a>
                </div>
              </div>
              
            <?php endif ?>






        <?php 
            endwhile;
            wp_reset_query();
        ?>

    </section>
  </div>
  
  <div class="row">
    <section class="celebs-box selection-block clearfix">


        <?php 
              
          $args = array( 'post_type' => 'new_celebs', 'posts_per_page' => 12, 'offset' => 4  );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>


            <div class="col-md-2 col-sm-4 col-xs-12">
              <div class="celeb">
                <a href="<?php echo get_the_permalink(); ?>">
                  <figure class="thumb">
                    <img src="<?php echo $imgsrc; ?>" alt="<?php the_title(); ?>">
                  </figure>
                  <span class="overlay"> <span class="overlay-content"> <?php the_title(); ?> </span> </span>

                  <?php 
                    foreach((get_the_category()) as $category) {
                      echo '<span class="badge">'.$category->cat_name . '</span> '; 
                    } 
                  ?>

                </a>
              </div>
            </div>




        <?php 
            endwhile;
            wp_reset_query();
        ?>
      
    </section>
  </div>


  
  <header class="page-header">
    <h2 class="title"> Married Today</h2>
  </header>

  
  <section class="feature-region clearfix">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="feature-box clearfix">
          <a href="#"><i class="fa fa-weixin"></i></a>
          <aside class="content">
            <h3 class="title">Today's Horoscope</h3>
            <p>Being a Gemini born on June 17th, you probably are accustomed to being called ta...</p>
            <a href="#" class="feature-btn">Jun 17 Horoscope</a>
          </aside>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="feature-box clearfix">
          <a href="#"><i class="fa fa-weixin"></i></a>
          <aside class="content">
            <h3 class="title">Today's Horoscope</h3>
            <p>Being a Gemini born on June 17th, you probably are accustomed to being called ta...</p>
            <a href="#" class="feature-btn">Jun 17 Horoscope</a>
          </aside>
        </div>
      </div>
    </div>
  </section>
  
</div>


   </div>




<?php get_footer(); ?>
