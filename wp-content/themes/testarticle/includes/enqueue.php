<?php
//Registering all the styles to the frontend
if( ! function_exists('axel_load_css')):
	function axel_load_css()
	{
		wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css');
        wp_register_style('FA', get_template_directory_uri() .'/css/font-awesome.min.css');
        wp_register_style('fancybox', get_template_directory_uri() .'/css/jquery.fancybox.css');
		wp_register_style('style', get_template_directory_uri() . '/css/style.css');
        wp_register_style('responsiveness', get_template_directory_uri() . '/css/responsive.css');
		wp_register_script('modernizer', get_template_directory_uri(). "/js/modernizr.js");

		wp_enqueue_style('bootstrap');
        wp_enqueue_style('FA');
        wp_enqueue_style('fancybox');
        wp_enqueue_style('style');
        wp_enqueue_style('responsiveness');
	}
endif;




//Registering all the scripts to the footer
if( ! function_exists('axel_load_scripts')):
	function axel_load_scripts()
	{
        wp_register_script( 'jquery-custom' , get_template_directory_uri() . '/js/jquery.js' );   		
   		wp_register_script( 'bootstrap' , get_template_directory_uri() . '/js/bootstrap.js' );
    	wp_register_script( 'fancyboxjs' , get_template_directory_uri() . '/js/jquery.fancybox.js' );
    	wp_register_script( 'classie' , get_template_directory_uri() . '/js/classie.js' );
    	wp_register_script( 'uisearch' , get_template_directory_uri() . '/js/uisearch.js' );

    	

        wp_enqueue_script('jquery-custom',  false, array(), false, true);
    	wp_enqueue_script('bootstrap', false,  array(), false, true);    	
    	wp_enqueue_script('fancyboxjs',  false, array(), false, true);
    	wp_enqueue_script('classie',  false, array(), false, true);
    	wp_enqueue_script('uisearch',  false, array(), false, true);
	}
endif;

