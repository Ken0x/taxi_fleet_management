<?php
	
	$driving_school_lite_first_theme_color = get_theme_mod('driving_school_lite_first_theme_color');

	$custom_css = '';

	if($driving_school_lite_first_theme_color != false){
		$custom_css .=' #footer input[type="submit"], .bradcrumbs a:hover, #sidebar .tagcloud a:hover, input[type="submit"],.topbar, h1.page-title, h1.search-title, #slider .carousel-caption, .blogbtn a, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #sidebar input[type="submit"], .pagination .current, span.meta-nav, .widget_calendar tbody a, .wrap input[type="submit"], .contact-icon,a.button{';
			$custom_css .='background-color: '.esc_html($driving_school_lite_first_theme_color).';';
		$custom_css .='}';
	}
	if($driving_school_lite_first_theme_color != false){
		$custom_css .=' .nav-menu ul li a:active, .nav-menu ul li a:hover, #our-features .right-part:hover h3, #our-features .right-part:hover a, .post-info i, a, .nav-menu li a:hover, .enroll span a:hover, #header span.location i, .social-media i, .social-media i:hover, .logo h1 a:hover,  #our-features h2, .footerinner ul li a:hover, .woocommerce-message::before, span.post-title, .nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
			$custom_css .='color: '.esc_html($driving_school_lite_first_theme_color).';';
		$custom_css .='}';
	}
	if($driving_school_lite_first_theme_color != false){
		$custom_css .=' #our-features .right-part:hover h3, #our-features .right-part:hover a, #our-features hr.head, .woocommerce-message, #sidebar .widget{';
			$custom_css .='border-color: '.esc_html($driving_school_lite_first_theme_color).';';
		$custom_css .='}';
	}

	// Layout Options
	$theme_layout = get_theme_mod( 'driving_school_lite_theme_layout_options','Default Theme');
    if($theme_layout == 'Default Theme'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}else if($theme_layout == 'Container Theme'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_layout == 'Box Container Theme'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$slider_layout = get_theme_mod( 'driving_school_lite_slider_alignment_option','Left Align');
    if($slider_layout == 'Left Align'){
		$custom_css .='#slider .carousel-caption{';
			$custom_css .='text-align:left; 
						   left:0;
						   -webkit-clip-path: polygon(0 0, 100% 0, 75% 100%, 100% 100%, 0 100%); 
						   clip-path: polygon(0 0, 100% 0, 75% 100%, 100% 100%, 0% 100%);';
		$custom_css .='}';
		$custom_css .='#slider .inner_carousel p, #slider .inner_carousel h1, .more-btn{';
			$custom_css .='text-align:left;';
		$custom_css .='}';
	}else if($slider_layout == 'Center Align'){
		$custom_css .='#slider .carousel-caption{';
			$custom_css .='text-align:center; left:30%; right:30%; clip-path:none; top:15%; bottom:30%;';
		$custom_css .='}';
		$custom_css .='#slider .carousel-caption.d-none.d-md-block{';
			$custom_css .=' width:auto; height:auto; padding:0';
		$custom_css .='}';
		$custom_css .='#slider .inner_carousel p, #slider .inner_carousel h1, .more-btn{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='@media screen and (max-width: 720px) and (min-width: 320px){
			#slider .more-btn{';
			$custom_css .='padding:20px 0;';
		$custom_css .='} }';
		$custom_css .='#slider .inner_carousel{';
			$custom_css .='padding:4%; background-color:#ffc61a;';
		$custom_css .='}';
	}else if($slider_layout == 'Right Align'){
		$custom_css .='#slider .carousel-caption{';
			$custom_css .='text-align:right;
						   right:0; left:auto;
						   -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 25% 100%); 
						   clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 25% 100%);';
		$custom_css .='}';
		$custom_css .='#slider .inner_carousel p, #slider .inner_carousel h1, .more-btn{';
			$custom_css .='text-align:right;';
		$custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$driving_school_lite_preloader_color = get_theme_mod('driving_school_lite_preloader_color');

	if($driving_school_lite_preloader_color != false){
		$custom_css .=' .tg-loader{';
			$custom_css .='border-color: '.esc_html($driving_school_lite_preloader_color).';';
		$custom_css .='} ';
		$custom_css .=' .tg-loader-inner{';
			$custom_css .='background-color: '.esc_html($driving_school_lite_preloader_color).';';
		$custom_css .='} ';
	}

	$driving_school_lite_preloader_bg_color = get_theme_mod('driving_school_lite_preloader_bg_color');

	if($driving_school_lite_preloader_bg_color != false){
		$custom_css .=' #overlayer{';
			$custom_css .='background-color: '.esc_html($driving_school_lite_preloader_bg_color).';';
		$custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$top_button_padding = get_theme_mod('driving_school_lite_top_button_padding');
	$bottom_button_padding = get_theme_mod('driving_school_lite_bottom_button_padding');
	$left_button_padding = get_theme_mod('driving_school_lite_left_button_padding');
	$right_button_padding = get_theme_mod('driving_school_lite_right_button_padding');
	if($top_button_padding != false || $bottom_button_padding != false || $left_button_padding != false || $right_button_padding != false){
		$custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
			$custom_css .='padding-top: '.esc_html($top_button_padding).'px; padding-bottom: '.esc_html($bottom_button_padding).'px; padding-left: '.esc_html($left_button_padding).'px; padding-right: '.esc_html($right_button_padding).'px; display:inline-block;';
		$custom_css .='}';
	}

	$button_border_radius = get_theme_mod('driving_school_lite_button_border_radius');
	$custom_css .='.more-btn span, .more-btn a, .blogbtn a, #comments input[type="submit"].submit{';
		$custom_css .='border-radius: '.esc_html($button_border_radius).'px;';
	$custom_css .='}';

	/*----------- Copyright css -----*/
	$copyright_top_padding = get_theme_mod('driving_school_lite_top_copyright_padding');
	$copyright_bottom_padding = get_theme_mod('driving_school_lite_top_copyright_padding');
	if($copyright_top_padding != false || $copyright_bottom_padding != false){
		$custom_css .='.copyright{';
			$custom_css .='padding-top: '.esc_html($copyright_top_padding).'px; padding-bottom: '.esc_html($copyright_bottom_padding).'px; ';
		$custom_css .='}';
	} 

	$copyright_alignment = get_theme_mod('driving_school_lite_copyright_alignment', 'center');
	if($copyright_alignment == 'center' ){
		$custom_css .='#footer .copyright p{';
			$custom_css .='text-align: '. $copyright_alignment .';';
		$custom_css .='}';
	}elseif($copyright_alignment == 'left' ){
		$custom_css .='#footer .copyright p{';
			$custom_css .=' text-align: '. $copyright_alignment .';';
		$custom_css .='}';
	}elseif($copyright_alignment == 'right' ){
		$custom_css .='#footer .copyright p{';
			$custom_css .='text-align: '. $copyright_alignment .';';
		$custom_css .='}';
	}

	$copyright_font_size = get_theme_mod('driving_school_lite_copyright_font_size');
	$custom_css .='#footer .copyright p{';
		$custom_css .='font-size: '.esc_html($copyright_font_size).'px;';
	$custom_css .='}';