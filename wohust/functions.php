<?php

	function load_stylesheets()
	{

	  wp_register_style('bootstrap',get_template_directory_uri() . '/assets/css/bootstrap.min.css',array() ,1,'all');
		wp_enqueue_style('bootstrap');

		wp_register_style('owl',get_template_directory_uri() . '/assets/css/owl.theme.default.min.css',array() ,1,'all');
		wp_enqueue_style('owl');

		wp_register_style('carousel',get_template_directory_uri() . '/assets/css/owl.carousel.min.css',array() ,1,'all');
		wp_enqueue_style('carousel');

		wp_register_style('animate',get_template_directory_uri() . '/assets/css/animate.css',array() ,1,'all');
		wp_enqueue_style('animate');

		wp_register_style('boxicons',get_template_directory_uri() . '/assets/css/boxicons.min.css',array() ,1,'all');
		wp_enqueue_style('boxicons');

		wp_register_style('flaticon',get_template_directory_uri() . '/assets/css/flaticon.css',array() ,1,'all');
		wp_enqueue_style('flaticon');

		wp_register_style('meanmenu',get_template_directory_uri() . '/assets/css/meanmenu.css',array() ,1,'all');
		wp_enqueue_style('meanmenu');

		wp_register_style('niceselect',get_template_directory_uri() . '/assets/css/nice-select.css',array() ,1,'all');
		wp_enqueue_style('niceselect');

		wp_register_style('style',get_template_directory_uri() . '/assets/css/style.css',array() ,1,'all');
		wp_enqueue_style('style');

		wp_register_style('responsive',get_template_directory_uri() . '/assets/css/responsive.css',array() ,1,'all');
		wp_enqueue_style('responsive');
	}
    
    add_action('wp_enqueue_scripts','load_stylesheets');



    function addjs()
    {
    	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js',array() ,1,1,1);
    	wp_enqueue_script('jquery');

    	wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js',array() ,1,1,1);
    	wp_enqueue_script('popper');

    	wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array() ,1,1,1);
    	wp_enqueue_script('bootstrap');

    wp_register_script('meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js',array() ,1,1,1);
    	wp_enqueue_script('meanmenu');

    	 wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js',array() ,1,1,1);
    	wp_enqueue_script('wow');

    	wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array() ,1,1,1);
    	wp_enqueue_script('carousel');

    wp_register_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js',array() ,1,1,1);
    	wp_enqueue_script('nice-select');

    wp_register_script('form-validator', get_template_directory_uri() . '/assets/js/form-validator.min.js',array() ,1,1,1);
    	wp_enqueue_script('form-validator');

    	wp_register_script('contactform', get_template_directory_uri() . '/assets/js/contact-form-script.js',array() ,1,1,1);
    	wp_enqueue_script('contactform');

    	wp_register_script('map', get_template_directory_uri() . '/assets/js/map.jss',array() ,1,1,1);
    	wp_enqueue_script('map');

    	wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js',array() ,1,1,1);
    	wp_enqueue_script('custom');

    }