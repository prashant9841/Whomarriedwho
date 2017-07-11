<?php

 get_header(); 
 global $post;
$category = get_category( get_query_var( 'cat' ) );
$cats = $category->cat_ID;
$tacs = get_cat_name( $category_id = $cats );
 ?>


<div class="container">
	<header class="page-header">
	    <h2 class="title"><?php single_cat_title(); ?></h2>
	</header>

	<div class="row">
	    <section class="celebs-box clearfix">


			


			<?php

			// The Loop
			$args = array( 'post_type' => 'celebrity', 'category_name' => $tacs, 'posts_per_page' => -1 );
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


			<?php endwhile; 
				 ?>


		</section>
	</div>

</div>


<?php get_footer( ); ?>
