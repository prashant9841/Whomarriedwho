<?php 

 get_header();
$imgsrc = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

global $idse;
$idse = $post->ID;
 ?>

<?php
global $post;

foreach((get_the_category()) as $category) {
  $cat = $category->cat_name; 
} 
 ?>

<div class="container">


    <div class="row">
        <div class="col-md-8">
            <div class="ad-field clearfix">
                <a href="#">
                    <img src="images/add.jpg" alt="add for here">
                </a>
            </div>

            <div class="row">
                <div class="wrap-box col-xs-12">
                    <div class="profile-overview clearfix">
                        <div class="user-content">
                            <h1 class="title"><?php the_title(); ?></h1>
                            <strong class="uppercase"><a href="#"> <?php echo types_render_field('profession');?> </a> </strong>
                            
                        </div>
                        <div class="profile clearfix">
                            <div class="thumbnail">
                                <div class="user-thumb">
                                    <a class="user"><img src="<?php echo $imgsrc; ?>"></a>
                                    <a class="fancybox" data-rel="fancybox-button" href="<?php echo $imgsrc; ?> "><i class="fa fa-search icon-zoom"></i></a>
                                </div>

                            </div>

                        </div>


                        <div class="know-card clearfix">
                            <div class="card">
                                <i class="fa fa-calendar"></i>
                                <div class="card-dept clearfix">
                                    <label>Married at</label>
                                    <strong><time itemprop="Married Date" datetime="<?php echo types_render_field('married-at');?>"><a href="#"><?php echo types_render_field('married-at');?></a></time></strong>
                                </div>
                            </div>
                            <div class="card">
                                <i class="fa fa-map-marker"></i>
                                <div class="card-dept clearfix">
                                    <label>Married To</label>
                                    <strong><a href=" <?php echo types_render_field('married-url');?> "><?php echo types_render_field('married-name');?></a></strong>
                                </div>
                            </div>
                            <div class="card">
                                <i class="fa fa-rocket"></i>
                                <div class="card-dept clearfix">
                                    <label>AGE</label>
                                    <strong><a href="#"><?php echo types_render_field('age');?></a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-content">
                        <h3 class="title"><?php the_title(); ?> Facts <a href="#" data-toggle="modal" data-target="#myModal"></a></h3>
                        <span class="sub-title"><strong>Date of birth:</strong></span>
                        <p><?php echo types_render_field('dob-s');?></p>
                        <span class="sub-title"><strong>Birth Place</strong></span>
                        <p><?php echo types_render_field('birth-place');?></p>
                        <span class="sub-title"><strong>About</strong></span>
                        <p><?php echo types_render_field('about-him');?></p>
                        <span class="sub-title">BEFORE FAME</span>
                        <p><?php echo types_render_field('before-fame');?></p>
                        <span class="sub-title">TRIVIA FACT</span>
                        <p><?php echo types_render_field('trivia-fact');?></p>
                        <span class="sub-title">FAMILY LIFE</span>
                        <p><?php echo types_render_field('family-life');?></p>
                        <span class="sub-title">ASSOCIATED WITH</span>
                        <p><?php echo types_render_field('associated-with');?></p>
                        <span class="sub-title">RUMOR / CONTROVERSY</span>
                        <p><?php echo types_render_field('controversy');?></p>

                    </div>
                </div>
            </div>


            <!-- TIMELINE -->


            <div class="time-line row">
                <div class="col xs-12">
                    <h2 class="title">Timeline</h2>
                </div>
                <div class="col-xs-12">
                        <?php 

                            global $post;
                            // echo $post;
                            // print_r($post);
                      
                          $args = array( 'post_type' => 'new_time', 'post_parent' =>$post->ID, 'posts_per_page' => -1);
                          $loop = new WP_Query( $args );
                          while ( $loop->have_posts() ) : $loop->the_post(); 
                        ?>
                                
                            

                            <div class="item row">
                                <div class="col-xs-12 col-sm-3">
                                     <div class="date">

                                        <?php echo(types_render_field('event-date')); ?>
                                     </div>   
                                    
                                </div>
                                <div class="col-xs-12 col-sm-9">
                                    <div class="card">
                                        <h4><?php the_title(); ?> </h4>
                                        <p><?php the_excerpt(); ?></p>
                                        
                                    </div>
                                    
                                </div>
                            </div>

                          <br>

                        <?php 
                            endwhile;
                            wp_reset_query();
                        ?>
              
                </div>
            	
            </div>



        </div>
        <div class="col-md-4">
            <div class="sidebar wrap-box">
                <center><img src="http://placehold.it/336x250"></center>

                <h2>Related Bio</h2>
            
            	<?php 

                    global $post;              
                      $args = array( 'post_type' => 'new_celeb', 'category_name' => $cat,  'posts_per_page' => -1);
                      $loop = new WP_Query( $args );
                      while ( $loop->have_posts() ) : $loop->the_post(); 

                        $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                ?>

                    <div class="item col-xs-12">
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
            </div>
        </div>
    </div>








</div>

<?php get_footer(); ?>