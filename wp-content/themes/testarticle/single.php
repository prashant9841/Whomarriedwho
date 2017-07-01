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
            <div class="wrap-box">
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
                                <label>BIRTHDAY</label>
                                <strong><time itemprop="birthDate" datetime="1976-06-18"><a href="#"><?php echo types_render_field('dob-s');?></a></time></strong>
                            </div>
                        </div>
                        <div class="card">
                            <i class="fa fa-map-marker"></i>
                            <div class="card-dept clearfix">
                                <label>BIRTHPLACE</label>
                                <strong><a href="#"><?php echo types_render_field('birth-place');?></a></strong>
                            </div>
                        </div>
                        <div class="card">
                            <i class="fa fa-rocket"></i>
                            <div class="card-dept clearfix">
                                <label>AGE</label>
                                <strong><a href="#"><?php echo types_render_field('age');?></a></strong>
                            </div>
                        </div>
                        <div class="card">
                            <i class="fa fa-globe"></i>
                            <div class="card-dept clearfix">
                                <label>BIRTH SIGN</label>
                                <strong><a href="#"><?php echo types_render_field('birth-sign');?></a></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-content">
                    <h3 class="title"><?php the_title(); ?> Facts <a href="#" data-toggle="modal" data-target="#myModal"></a></h3>
                    <span class="sub-title"><strong>Married To:</strong></span>
                    <p><a href=" <?php echo types_render_field('married-url');?> "><?php echo types_render_field('married-name');?></a></p>
                    <span class="sub-title"><strong>Married At</strong></span>
                    <p><?php echo types_render_field('married-at');?></p>
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
            <!-- 
            <div class="popularity clearfix">
                <h4 class="profile-related-title"><span>Height of <?php the_title(); ?></span></h4>
                <div class="popularity-categories">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <a href="#" class="popularity-box">
                                <div class="popularity-box-content">
                                    <h4 class="number-value">5 Feet 4 Inch </h4>
                                    <b> Height in Feet </b>

                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <a href="#" class="popularity-box">
                                <div class="popularity-box-content">
                                    <h4 class="number-value">64 Inch</h4>
                                    <b> Height in Feet </b>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <a href="#" class="popularity-box">
                                <div class="popularity-box-content">
                                    <h4 class="number-value">1.75 Meter</h4>
                                    <b> Height in Feet </b>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <a href="#" class="popularity-box">
                                <div class="popularity-box-content">
                                    <h4 class="number-value">175 CM</h4>
                                    <b> Height in Feet </b>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
 -->
            <div class="time-line row">
            	<?php 

                    global $post;
                    // echo $post;
                    // print_r($post);
              
                  $args = array( 'post_type' => 'new_time', 'post_parent' =>$post->ID, 'posts_per_page' => -1);
                  $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post(); 
                ?>
                    

                    <div class="item col-xs-12">
                         <?php the_title(); ?> 
                         <div class="date">

                            <?php echo(types_render_field('event-date')); ?>
                         </div>   
                    </div>

                  <br>

                <?php 
                    endwhile;
                    wp_reset_query();
                ?>
              
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