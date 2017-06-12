<?php
//Registering all the styles to the frontend
if( ! function_exists('axel_load_css')):
	function axel_load_css()
	{
		wp_register_style('FA', get_template_directory_uri() .'/css/font-awesome.css');
        wp_register_style('animate', get_template_directory_uri() .'/css/animate.css');
		wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.css');
		wp_register_style('demo', get_template_directory_uri() .'/css/demo.css');
		wp_register_style('nivo-lightbox', get_template_directory_uri() . '/css/nivo-lightbox.css');
        wp_register_style('responsiveness', get_template_directory_uri() . '/css/responsiveness.css');
		wp_register_style('style', get_template_directory_uri() . '/css/style.css');
		wp_register_style('oswald',"https://fonts.googleapis.com/css?family=Oswald:400,700,300");
		wp_register_script('modernizer', get_template_directory_uri(). "/js/modernizr.js");

		wp_enqueue_style('animate');
		wp_enqueue_style('FA');
        wp_enqueue_style('animate');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('demo');
		wp_enqueue_style('nivo-lightbox');
        wp_enqueue_style('responsiveness');
		wp_enqueue_style('style');
	}
endif;




//Registering all the scripts to the footer
if( ! function_exists('axel_load_scripts')):
	function axel_load_scripts()
	{
        wp_register_script( 'jquery-custom' , get_template_directory_uri() . '/js/jquery.js' );
   		// wp_register_script( 'migrate' , get_template_directory_uri() . '/js/migrate.js' );
   		
    	wp_register_script( 'wow' , get_template_directory_uri() . '/js/wow.min.js' );
   		wp_register_script( 'bootstrap' , get_template_directory_uri() . '/js/bootstrap.js' );
    	wp_register_script( 'cbpAnimatedHeader' , get_template_directory_uri() . '/js/cbpAnimatedHeader.js' );
    	wp_register_script( 'classie' , get_template_directory_uri() . '/js/classie.js' );
        // wp_register_script( 'owl' , get_template_directory_uri() . '/js/owl.js' );
    	wp_register_script( 'contact' , get_template_directory_uri() . '/js/contact.js' );
        wp_register_script( 'jqBootstrapValidation' , get_template_directory_uri() . '/js/jqBootstrapValidation.js' );    
    	wp_register_script( 'jquery.easing.min' , get_template_directory_uri() . '/js/jquery.easing.min.js' );
        wp_register_script( 'modernizr.custom' , get_template_directory_uri() . '/js/modernizr.custom.js' );
        wp_register_script( 'nivo-lightbox.min' , get_template_directory_uri() . '/js/nivo-lightbox.min.js' );
        wp_register_script( 'SmoothScroll' , get_template_directory_uri() . '/js/SmoothScroll.js' );
        wp_register_script( 'main' , get_template_directory_uri() . '/js/main.js' );

    	

        wp_enqueue_script('jquery-custom',  false, array(), false, true);
    	wp_enqueue_script('bootstrap', false,  array(), false, true);
    	
    	wp_enqueue_script('wow',  false, array(), false, true);
    	wp_enqueue_script('cbpAnimatedHeader',  false, array(), false, true);
    	wp_enqueue_script('classie',  false, array(), false, true);
        // wp_enqueue_script('owl',  false, array(), false, true);
    	wp_enqueue_script('contact',  false, array(), false, true);
        wp_enqueue_script('jqBootstrapValidation',  false, array(), false, true);
   	
    	wp_enqueue_script('jquery.easing.min',  false, array(), false, true);
        wp_enqueue_script('modernizr.custom', false,  array(), false, true);
        wp_enqueue_script('nivo-lightbox.min', false,  array(), false, true);
        wp_enqueue_script('SmoothScroll', false,  array(), false, true);
        wp_enqueue_script('main', false,  array(), false, true);
	}
endif;

