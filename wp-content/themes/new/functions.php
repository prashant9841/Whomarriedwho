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

 ?>