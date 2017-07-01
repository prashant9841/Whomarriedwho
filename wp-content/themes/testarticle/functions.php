<?php 
	show_admin_bar( 0 );

	add_theme_support( 'widgets' );
    add_theme_support( 'post-thumbnails' );
    include('includes/enqueue.php');
	include('includes/navigation.php');
	include('includes/axel_widgets.php');
	include('includes/general-settings.php');




	add_action('wp_enqueue_scripts','axel_load_css');
	add_action('wp_enqueue_scripts','axel_load_scripts');

	add_action('init','axel_navigation_menu');



	if(! function_exists('axel_main_nav')):
		function axel_main_nav(){
			  
			register_sidebar(array(
				'name'          => 'main nav',
				'id'            => 'main-nav',
				'description'   => 'Main Nav',
				'class'         => 'nav',
				
			));
		}
	endif;
	add_action('widgets_init','axel_main_nav'); 

	if (!function_exists("get_logo")) {
		function get_logo () {
			echo get_template_directory_uri().'/images/logo.png';

		}
	}





	add_action( 'init', 'create_post_type_celeb' );
	function create_post_type_celeb() {
	  register_post_type( 'new_celebs',
	    array(
	      'labels' => array(
	        'name' => __( 'Celebs' ),
	        'singular_name' => __( 'celeb' )
	      ),
	      'public' => true,
	      'has_archive' => true,
	      // 'hierarchical' => true,
	      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
	    )
	  );
	}

	add_action( 'init', 'create_post_type' );
	function create_post_type() {
	  register_post_type( 'new_time',
	    array(
	      'labels' => array(
	        'name' => __( 'times' ),
	        'singular_name' => __( 'time' )
	      ),
	      'public' => true,
	      'has_archive' => true,
	      // 'hierarchical' => true,
	      'supports' => array( 'title', 'excerpt'),
	    )
	  );
	}

	// FOR SELECTING PARENT
	/* Hook meta box to just the 'new_time' post type. */
	add_action( 'add_meta_boxes_new_time', 'my_add_meta_boxes' );



	/* Creates the meta box. */
	function my_add_meta_boxes( $post ) {

	    add_meta_box(
	        'my-new_time-parent',
	        __( 'celebs', 'example-textdomain' ),
	        'my_new_time_parent_meta_box',
	        $post->post_type,
	        'side',
	        'core'
	    );
	}

	/* Displays the meta box. */
	function my_new_time_parent_meta_box( $post ) {

	    $parents = get_posts(
	        array(
	            'post_type'   => 'new_celebs', 
	            'orderby'     => 'title', 
	            'order'       => 'ASC', 
	            'numberposts' => -1 
	        )
	    );

	    if ( !empty( $parents ) ) {

	        echo '<select name="parent_id" class="widefat">'; // !Important! Don't change the 'parent_id' name attribute.

	        foreach ( $parents as $parent ) {
	            printf( '<option value="%s"%s>%s</option>', esc_attr( $parent->ID ), selected( $parent->ID, $post->post_parent, false ), esc_html( $parent->post_title ) );
	        }

	        echo '</select>';
	    }
	}

 ?>