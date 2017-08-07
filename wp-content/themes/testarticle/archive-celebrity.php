<?php
   /*
  Template Name: bodys
  */

  get_header(); 
?>

   <div class="body">
     
<div class="container">
  
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
  
  
</div>


   </div>




<?php get_footer(); ?>
