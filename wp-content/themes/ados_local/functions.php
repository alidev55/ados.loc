<?php

function blog_assets(){
	
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');

	wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');

	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');

	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');

	wp_enqueue_style('layers', get_template_directory_uri() . '/assets/revolution/css/layers.css');

	wp_enqueue_style('settings', get_template_directory_uri() . '/assets/revolution/css/settings.css');

	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');

	wp_enqueue_style('megamenu', get_template_directory_uri() . '/assets/css/megamenu.css');

	wp_enqueue_style('shortcodes', get_template_directory_uri() . '/assets/css/shortcodes.css');

	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');

	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');


	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(),'20151215', true);

	wp_enqueue_script('jquery.min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(),'20151215', true);

	wp_enqueue_script('tether.min', get_template_directory_uri() . '/assets/js/tether.min.js', array(),'20151215', true);

	wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(),'20151215', true);

	wp_enqueue_script('jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array(),'20151215', true);

	wp_enqueue_script('jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery-waypoints.js', array(),'20151215', true);

	wp_enqueue_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery-validate.js', array(),'20151215', true);

	wp_enqueue_script('numinate.min', get_template_directory_uri() . '/assets/js/numinate.min.js', array(),'20151215', true);

	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array(),'20151215', true);

	wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(),'20151215', true);

	wp_enqueue_script('price_range_script', get_template_directory_uri() . '/assets/js/price_range_script.js', array(),'20151215', true);
	
	wp_enqueue_script('easyzoom', get_template_directory_uri() . '/assets/js/easyzoom.js', array(),'20151215', true);

	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(),'20151215', true);


	wp_enqueue_script('jquery.themepunch.tools.min', get_template_directory_uri() . 'revolution/js/jquery.themepunch.tools.min.js', array(),'20151215', true);

	wp_enqueue_script('jquery.themepunch.revolution.min', get_template_directory_uri() . 'revolution/js/jquery.themepunch.revolution.min.js', array(),'20151215', true);

	wp_enqueue_script('slider', get_template_directory_uri() . 'revolution/js/slider.js', array(),'20151215', true);


	wp_enqueue_script('revolution.extension.actions.min', get_template_directory_uri() . 'revolution.extension.actions.min.js', array(),'20151215', true);

	wp_enqueue_script('revolution.extension.carousel.min', get_template_directory_uri() . 'revolution.extension.carousel.min.js', array(),'20151215', true);

	wp_enqueue_script('revolution.extension.kenburn.min', get_template_directory_uri() . 'revolution.extension.kenburn.min.js', array(),'20151215', true);

	wp_enqueue_script('revolution.extension.layeranimation.min', get_template_directory_uri() . 'revolution.extension.layeranimation.min.js', array(),'20151215', true);

	wp_enqueue_script('revolution.extension.migration.min', get_template_directory_uri() . 'revolution.extension.migration.min.js', array(),'20151215', true);

	wp_enqueue_script('revolution.extension.navigation.min', get_template_directory_uri() . 'revolution.extension.navigation.min.js', array(),'20151215', true);

	wp_enqueue_script('revolution.extension.parallax.min', get_template_directory_uri() . 'revolution.extension.parallax.min.js', array(),'20151215', true);

	wp_enqueue_script('revolution.extension.slideanims.min', get_template_directory_uri() . 'revolution.extension.slideanims.min.js', array(),'20151215', true);

	wp_enqueue_script('revolution.extension.video.min', get_template_directory_uri() . 'revolution.extension.video.min.js', array(),'20151215', true);
	
}

add_action('wp_enqueue_scripts', 'blog_assets');

