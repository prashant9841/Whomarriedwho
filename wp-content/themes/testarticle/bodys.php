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
              
          $args = array( 'post_type' => 'celebrity', 'category_name' => 'married', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC');
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
                  <span class="overlay"> <span class="overlay-content"> <?php the_title();?> </span> </span>
                </a>
              </div>
            </div>




        <?php 
            endwhile;
            wp_reset_query();
        ?>

    </section>
  </div>

  <hr>
  
  <div class="row">
    <section class="celebs-box selection-block clearfix">


        <?php 
              
          $args = array( 'post_type' => 'celebrity', 'category_name' => 'married', 'posts_per_page' => 6, 'offset' => 4, 'orderby' => 'date', 'order' => 'DESC'  );
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
                  <span class="overlay"> <span class="overlay-content"> <?php the_title(); ?> </span> das</span>
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
          $args = array( 'post_type' => 'celebrity', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC' );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $featured = types_render_field('featured');
          if ($featured == 'featured'): 
        ?>

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
              
            <?php endif ;
            endwhile;
            wp_reset_query();
        ?>

    </section>
  </div>

  <hr>
  
  <div class="row">
    <section class="celebs-box selection-block clearfix">


        <?php 
              
          $args = array( 'post_type' => 'celebrity', 'posts_per_page' => 6, 'offset' => 4  );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $featured = types_render_field('featured');
          if ($featured == 'featured'): 
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
              
            <?php endif ;
            endwhile;
            wp_reset_query();
        ?>
      
    </section>
  </div>


  
  <?php $today=date('Md'); ?>

  <?php 
        
    $args = array( 'post_type' => 'celebrity', 'category_name' => 'married', 'posts_per_page' => 4 );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); 
    $married_at = types_render_field( "married-at", array("format" => "Md") );
    $val = 0;
    if ($today == $married_at) {
        

  ?>
    <header class="page-header">
      <h2 class="title"> Married Today</h2>
    </header>

  <?php 
    if ($val == 'stop') {
      break;
    }
    $val = 'stop';
    }
      endwhile;
      wp_reset_query();
  ?>

  <div class="row">
    
    <section class="celebs-box selection-block clearfix">


        <?php 
              
          $args = array( 'post_type' => 'celebrity', 'category_name' => 'married', 'posts_per_page' => 4 );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
          $married_at = types_render_field( "married-at", array("format" => "Md") );
          if ($today == $married_at) {

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
          }
            endwhile;
            wp_reset_query();
        ?>
    </section>
  </div>  

  <hr>
</div>


   </div>




<?php get_footer(); ?>
