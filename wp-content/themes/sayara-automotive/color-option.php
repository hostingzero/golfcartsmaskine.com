<?php
	
	$sayara_automotive_theme_color_first = get_theme_mod('sayara_automotive_theme_color_first');

	$sayara_automotive_custom_css = '';

	$sayara_automotive_custom_css .='#masthead, .social-icon i:hover, #slider span.carousel-control-prev-icon:hover,#slider span.carousel-control-next-icon:hover, .aboutbtn a, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .post-link a, .post-info, #sidebox h2, button.search-submit:hover, .search-form button.search-submit, .copyright, .widget .tagcloud a:hover, .widget .tagcloud a:focus,.widget.widget_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.wp_widget_tag_cloud a:hover,.wp_widget_tag_cloud a:focus, .prev.page-numbers:focus,.next.page-numbers:focus, button,input[type="button"],input[type="submit"],.tags p a,.post-navigation .nav-next a,.post-navigation .nav-previous a,.comment-reply-link, .readbutton a, .scrollup i, #sidebox h3, #sidebox .widget_price_filter .ui-slider-horizontal .ui-slider-range, #sidebox .widget_price_filter .ui-slider .ui-slider-handle, .site-footer .widget_price_filter .ui-slider-horizontal .ui-slider-range, .site-footer .widget_price_filter .ui-slider .ui-slider-handle,#sidebox .widget_shopping_cart .buttons a:hover, #sidebox .widget_price_filter .price_slider_amount .button:hover, .site-footer .widget_shopping_cart .buttons a:hover, .site-footer .widget_price_filter .price_slider_amount .button:hover, .site-footer form.woocommerce-product-search button:hover, .site-footer form.woocommerce-product-search button:focus, .page-numbers, .wp-block-button a, .fixed-header, .site-footer button[type="submit"], #sidebox button[type="submit"],.nav-links .nav-previous a,.nav-links .nav-next a {';
		$sayara_automotive_custom_css .='background-color: '.esc_attr($sayara_automotive_theme_color_first).';';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_custom_css .='a, .contact-details i, .main-navigation li li:focus > a,.main-navigation li li:hover > a,  .main-navigation ul ul li a,.blogger h2 a,#sidebox ul li a:hover, .text code, .post-categories a, p.logged-in-as a:hover {';
		$sayara_automotive_custom_css .='color: '.esc_attr($sayara_automotive_theme_color_first).';';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_custom_css .='#slider span.carousel-control-prev-icon:hover,#slider span.carousel-control-next-icon:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .readbutton a:hover,.aboutbtn a:hover,.main-navigation ul ul,.post-link a:hover,.wp-block-button a:hover{';
		$sayara_automotive_custom_css .='border-color: '.esc_attr($sayara_automotive_theme_color_first).';';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_custom_css .='.main-navigation ul ul li:hover{';
		$sayara_automotive_custom_css .='border-left-color: '.esc_attr($sayara_automotive_theme_color_first).';';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_custom_css .='.scrollup i{';
		$sayara_automotive_custom_css .='border-color: '.esc_attr($sayara_automotive_theme_color_first).';';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_custom_css .='.site-footer ul li a:hover, #about .outside:hover, #about .pointer:hover, a.pointer.nav-link.active.show, #about .outside:focus-within{';
		$sayara_automotive_custom_css .='color: '.esc_attr($sayara_automotive_theme_color_first).'!important;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_custom_css .='#about .outside:hover, #about .pointer:hover, a.pointer.nav-link.active.show, #about .outside:focus-within{';
		$sayara_automotive_custom_css .='background-color: '.esc_attr($sayara_automotive_theme_color_first).'!important;';
	$sayara_automotive_custom_css .='}';

	/*---------------------------Theme color option-------------------*/
	$sayara_automotive_theme_color_second = get_theme_mod('sayara_automotive_theme_color_second');

	$sayara_automotive_custom_css .='button:hover, button:focus,input[type="button"]:hover, input[type="button"]:focus,input[type="submit"]:hover, input[type="submit"]:focus, .social-icon i, .search-body i, .readbutton a:hover, #about .outside, .aboutbtn a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .post-link a:hover, .post-navigation .nav-next a:hover, .post-navigation .nav-previous a:hover,.tags p a:hover, .page-numbers:hover, .prev.page-numbers:hover, .nav-links .nav-previous a:hover, .nav-links .nav-next a:hover, .search-form .search-submit:hover, .site-footer button[type="submit"]:hover, #sidebox button[type="submit"]:hover {';
		$sayara_automotive_custom_css .='background-color: '.esc_attr($sayara_automotive_theme_color_second).';';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_custom_css .='h1, h2, h3, h4, h5, h6, a:hover,a:active, .contact-details p.top-head, #slider span.carousel-control-prev-icon,#slider span.carousel-control-next-icon, #slider .inner_carousel h1, #slider .inner_carousel p, #about .about-text h3, h2.woocommerce-loop-product__title,.woocommerce div.product .product_title , .woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce .products .star-rating span, .blogger h3 a,p.logged-in-as a,span.posted_in a,.woocommerce-MyAccount-content a,.woocommerce-info a,.woocommerce-privacy-policy-text a,.woocommerce .woocommerce-breadcrumb a, .woocommerce .woocommerce-breadcrumb,.woocommerce-cart .cart-collaterals .shipping-calculator-button,tr.woocommerce-cart-form__cart-item.cart_item a, #about .about-text h2, .about-text p, .blogger h2 a:hover, .entry-date:hover a, .entry-date:hover i, .entry-author:hover a, .entry-author:hover i {';
		$sayara_automotive_custom_css .='color: '.esc_attr($sayara_automotive_theme_color_second).';';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebox h3,  .aboutbtn a, .post-link a,.blogger, .post-info, .readbutton a, .wp-block-button a{';
		$sayara_automotive_custom_css .='border-left-color: '.esc_attr($sayara_automotive_theme_color_second).';';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_custom_css .='.wp-block-button a:hover, .site-footer{';
		$sayara_automotive_custom_css .='background-color: '.esc_attr($sayara_automotive_theme_color_second).';';
	$sayara_automotive_custom_css .='}';

	// css
	$sayara_automotive_show_slider = get_theme_mod( 'sayara_automotive_slider_arrows', false);
	if($sayara_automotive_show_slider == false){
		$sayara_automotive_custom_css .='.page-template-home-custom .topbar{';
			$sayara_automotive_custom_css .='border-bottom: 2px solid #153655;';
		$sayara_automotive_custom_css .='}';
	}
	if($sayara_automotive_show_slider == false){
		$sayara_automotive_custom_css .='.page-template-home-custom .top-bg{';
			$sayara_automotive_custom_css .='box-shadow:none !important;';
		$sayara_automotive_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/
	$sayara_automotive_theme_lay = get_theme_mod( 'sayara_automotive_theme_options','Default');
    if($sayara_automotive_theme_lay == 'Default'){
		$sayara_automotive_custom_css .='body{';
			$sayara_automotive_custom_css .='max-width: 100%;';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='.page-template-custom-home-page .middle-header{';
			$sayara_automotive_custom_css .='width: 97.3%';
		$sayara_automotive_custom_css .='}';
	}else if($sayara_automotive_theme_lay == 'Wide Layout'){
		$sayara_automotive_custom_css .='body{';
			$sayara_automotive_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='.page-template-custom-home-page .middle-header{';
			$sayara_automotive_custom_css .='width: 97.7%';
		$sayara_automotive_custom_css .='}';
	}else if($sayara_automotive_theme_lay == 'Box Layout'){
		$sayara_automotive_custom_css .='body{';
			$sayara_automotive_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$sayara_automotive_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$sayara_automotive_slider_layout = get_theme_mod( 'sayara_automotive_slider_opacity_color','0.9');
	if($sayara_automotive_slider_layout == '0'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0';
		$sayara_automotive_custom_css .='}';
		}else if($sayara_automotive_slider_layout == '0.1'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0.1';
		$sayara_automotive_custom_css .='}';
		}else if($sayara_automotive_slider_layout == '0.2'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0.2';
		$sayara_automotive_custom_css .='}';
		}else if($sayara_automotive_slider_layout == '0.3'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0.3';
		$sayara_automotive_custom_css .='}';
		}else if($sayara_automotive_slider_layout == '0.4'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0.4';
		$sayara_automotive_custom_css .='}';
		}else if($sayara_automotive_slider_layout == '0.5'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0.5';
		$sayara_automotive_custom_css .='}';
		}else if($sayara_automotive_slider_layout == '0.6'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0.6';
		$sayara_automotive_custom_css .='}';
		}else if($sayara_automotive_slider_layout == '0.7'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0.7';
		$sayara_automotive_custom_css .='}';
		}else if($sayara_automotive_slider_layout == '0.8'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0.8';
		$sayara_automotive_custom_css .='}';
		}else if($sayara_automotive_slider_layout == '0.9'){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:0.9';
		$sayara_automotive_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$sayara_automotive_slider_layout = get_theme_mod( 'sayara_automotive_slider_content_option','Left');
    if($sayara_automotive_slider_layout == 'Left'){
		$sayara_automotive_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$sayara_automotive_custom_css .='text-align:left; left:10%; right:50%;';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='
		@media screen and (max-width: 767px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$sayara_automotive_custom_css .='text-align:center; left:10%; right:13%;';
		$sayara_automotive_custom_css .='} }';
	}else if($sayara_automotive_slider_layout == 'Center'){
		$sayara_automotive_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$sayara_automotive_custom_css .='text-align:center; left:30%; right:30%;';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='#slider .box-content,.shadow{';
			$sayara_automotive_custom_css .='clip-path: polygon(0% 0%, 0% 0%, 100% 0, 100% 100%, 0% 100%);';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='
		@media screen and (max-width: 767px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$sayara_automotive_custom_css .='text-align:center; left:10%; right:13%;';
		$sayara_automotive_custom_css .='} }';
	}else if($sayara_automotive_slider_layout == 'Right'){
		$sayara_automotive_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$sayara_automotive_custom_css .='left:50%; right:10%;text-align:right;';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='#slider .box-content{';
			$sayara_automotive_custom_css .='clip-path: polygon(15% 0%, 0% 0%, 100% 0, 100% 100%, 0% 100%);';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='.shadow{';
			$sayara_automotive_custom_css .='position: absolute; right: 20px; left:-20px; top: 15px;clip-path: polygon(15% 0%, 0% 0%, 100% 0, 100% 100%, 0% 100%);';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='
		@media screen and (max-width: 767px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$sayara_automotive_custom_css .='text-align:center; left:10%; right:13%;';
		$sayara_automotive_custom_css .='} }';
	}

	/*------------------------------ Button Settings option-----------------------*/
	$sayara_automotive_top_bottom_padding = get_theme_mod('sayara_automotive_top_bottom_padding');
	$sayara_automotive_left_right_padding = get_theme_mod('sayara_automotive_left_right_padding');
	$sayara_automotive_custom_css .='.post-link a, #slider .readbutton a, .form-submit input[type="submit"], .about-text .aboutbtn a{';
		$sayara_automotive_custom_css .='padding-top: '.esc_attr($sayara_automotive_top_bottom_padding).'px; padding-bottom: '.esc_attr($sayara_automotive_top_bottom_padding).'px; padding-left: '.esc_attr($sayara_automotive_left_right_padding).'px; padding-right: '.esc_attr($sayara_automotive_left_right_padding).'px; display:inline-block;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_border_radius = get_theme_mod('sayara_automotive_border_radius');
	$sayara_automotive_custom_css .='.post-link a,#slider .readbutton a, .form-submit input[type="submit"],.about-text .aboutbtn a{';
		$sayara_automotive_custom_css .='border-radius: '.esc_attr($sayara_automotive_border_radius).'px;';
	$sayara_automotive_custom_css .='}';

	/*---------------------------Blog Layout -------------------*/
	$sayara_automotive_theme_lay = get_theme_mod( 'sayara_automotive_blog_post_layout','Default');
    if($sayara_automotive_theme_lay == 'Default'){
		$sayara_automotive_custom_css .='.blogger{';
			$sayara_automotive_custom_css .='';
		$sayara_automotive_custom_css .='}';
	}else if($sayara_automotive_theme_lay == 'Center'){
		$sayara_automotive_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$sayara_automotive_custom_css .='text-align:center;';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='.post-info{';
			$sayara_automotive_custom_css .='margin-top:10px;';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='.blogger .post-link{';
			$sayara_automotive_custom_css .='margin-top:25px;';
		$sayara_automotive_custom_css .='}';
	}else if($sayara_automotive_theme_lay == 'Image and Content'){
		$sayara_automotive_custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$sayara_automotive_custom_css .='text-align:Left;';
		$sayara_automotive_custom_css .='}';
		$sayara_automotive_custom_css .='.blogger .post-link{';
			$sayara_automotive_custom_css .='text-align:right;';
		$sayara_automotive_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$sayara_automotive_loader_color_setting = get_theme_mod('sayara_automotive_loader_color_setting');
	$sayara_automotive_custom_css .=' .circle .inner{';
		$sayara_automotive_custom_css .='border-color: '.esc_attr($sayara_automotive_loader_color_setting).';';
	$sayara_automotive_custom_css .='} ';

	$sayara_automotive_loader_background_color = get_theme_mod('sayara_automotive_loader_background_color');
	$sayara_automotive_custom_css .=' #pre-loader{';
		$sayara_automotive_custom_css .='background-color: '.esc_attr($sayara_automotive_loader_background_color).';';
	$sayara_automotive_custom_css .='} ';

	$sayara_automotive_theme_lay = get_theme_mod( 'sayara_automotive_preloader_types','Default');
    if($sayara_automotive_theme_lay == 'Default'){
		$sayara_automotive_custom_css .='{';
			$sayara_automotive_custom_css .='';
		$sayara_automotive_custom_css .='}';
	}elseif($sayara_automotive_theme_lay == 'Circle'){
		$sayara_automotive_custom_css .='.circle .inner{';
			$sayara_automotive_custom_css .='width:unset;';
		$sayara_automotive_custom_css .='}';
	}elseif($sayara_automotive_theme_lay == 'Two Circle'){
		$sayara_automotive_custom_css .='.circle .inner{';
			$sayara_automotive_custom_css .='width:80%;
    border-right: 5px;';
		$sayara_automotive_custom_css .='}';
	}

	// Responsive Media
    $sayara_automotive_preloader = get_theme_mod( 'sayara_automotive_enable_disable_preloader', false);
	if($sayara_automotive_preloader == true && get_theme_mod( 'sayara_automotive_loader_setting', false) == false){
    	$sayara_automotive_custom_css .='#pre-loader{';
			$sayara_automotive_custom_css .='visibility:hidden;';
		$sayara_automotive_custom_css .='} ';
	}
    if($sayara_automotive_preloader == true){
    	$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='#pre-loader{';
			$sayara_automotive_custom_css .='visibility:visible;';
		$sayara_automotive_custom_css .='} }';
	}else if($sayara_automotive_preloader == false){
		$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='#pre-loader{';
			$sayara_automotive_custom_css .='visibility:hidden;';
		$sayara_automotive_custom_css .='} }';
	}

	$sayara_automotive_sidebar = get_theme_mod( 'sayara_automotive_enable_disable_sidebar', true);
    if($sayara_automotive_sidebar == true){
    	$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='#sidebox{';
			$sayara_automotive_custom_css .='display:block;';
		$sayara_automotive_custom_css .='} }';
	}else if($sayara_automotive_sidebar == false){
		$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='#sidebox{';
			$sayara_automotive_custom_css .='display:none;';
		$sayara_automotive_custom_css .='} }';
	}

	$sayara_automotive_topbar = get_theme_mod( 'sayara_automotive_enable_disable_topbar', false);
	if($sayara_automotive_topbar == true && get_theme_mod( 'sayara_automotive_show_hide_topbar', false) == false){
    	$sayara_automotive_custom_css .='.topbar{';
			$sayara_automotive_custom_css .='display:none;';
		$sayara_automotive_custom_css .='} ';
	}
    if($sayara_automotive_topbar == true){
    	$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='.topbar{';
			$sayara_automotive_custom_css .='display:block;';
		$sayara_automotive_custom_css .='} }';
	}else if($sayara_automotive_topbar == false){
		$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='.topbar{';
			$sayara_automotive_custom_css .='display:none;';
		$sayara_automotive_custom_css .='} }';
	}

	$sayara_automotive_stickyheader = get_theme_mod( 'sayara_automotive_enable_disable_fixed_header',false);
	if($sayara_automotive_stickyheader == true && get_theme_mod( 'sayara_automotive_fixed_header', false) == false){
    	$sayara_automotive_custom_css .='.fixed-header{';
			$sayara_automotive_custom_css .='position:static;';
		$sayara_automotive_custom_css .='} ';
	}
    if($sayara_automotive_stickyheader == true){
    	$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='.fixed-header{';
			$sayara_automotive_custom_css .='position:fixed;';
		$sayara_automotive_custom_css .='} }';
	}else if($sayara_automotive_stickyheader == false){
		$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='.fixed-header{';
			$sayara_automotive_custom_css .='position:static;';
		$sayara_automotive_custom_css .='} }';
	}

	$sayara_automotive_slider = get_theme_mod( 'sayara_automotive_enable_disable_slider', false);
	if($sayara_automotive_slider == true && get_theme_mod( 'sayara_automotive_slider_arrows', false) == false){
    	$sayara_automotive_custom_css .='#slider{';
			$sayara_automotive_custom_css .='display:none;';
		$sayara_automotive_custom_css .='} ';
	}
    if($sayara_automotive_slider == true){
    	$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='#slider{';
			$sayara_automotive_custom_css .='display:block;';
		$sayara_automotive_custom_css .='} }';
	}else if($sayara_automotive_slider == false){
		$sayara_automotive_custom_css .='@media screen and (max-width:575px){';
		$sayara_automotive_custom_css .='#slider{';
			$sayara_automotive_custom_css .='display:none;';
		$sayara_automotive_custom_css .='} }';
	}

	$sayara_automotive_sliderbutton = get_theme_mod( 'sayara_automotive_show_hide_slider_button',true);
	if($sayara_automotive_sliderbutton == true && get_theme_mod( 'sayara_automotive_slider_button',true) != true){
    	$sayara_automotive_custom_css .='#slider .readbutton{';
			$sayara_automotive_custom_css .='display:none;';
		$sayara_automotive_custom_css .='} ';
	}
    if($sayara_automotive_sliderbutton == true){
    	$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='#slider .readbutton{';
			$sayara_automotive_custom_css .='display:block;';
		$sayara_automotive_custom_css .='} }';
	}else if($sayara_automotive_sliderbutton == false){
		$sayara_automotive_custom_css .='@media screen and (max-width:575px){';
		$sayara_automotive_custom_css .='#slider .readbutton{';
			$sayara_automotive_custom_css .='display:none;';
		$sayara_automotive_custom_css .='} }';
	}

	$sayara_automotive_scroll = get_theme_mod( 'sayara_automotive_enable_disable_scrolltop',false);
	if($sayara_automotive_scroll == true && get_theme_mod( 'sayara_automotive_hide_show_scroll',false) != true){
    	$sayara_automotive_custom_css .='.scrollup i{';
			$sayara_automotive_custom_css .='display:none;';
		$sayara_automotive_custom_css .='} ';
	}
    if($sayara_automotive_scroll == true){
    	$sayara_automotive_custom_css .='@media screen and (max-width:575px) {';
		$sayara_automotive_custom_css .='.scrollup i{';
			$sayara_automotive_custom_css .='display:block;';
		$sayara_automotive_custom_css .='} }';
	}else if($sayara_automotive_scroll == false){
		$sayara_automotive_custom_css .='@media screen and (max-width:575px){';
		$sayara_automotive_custom_css .='.scrollup i{';
			$sayara_automotive_custom_css .='display:none;';
		$sayara_automotive_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$sayara_automotive_copyright_top_bottom_padding = get_theme_mod('sayara_automotive_copyright_top_bottom_padding');
	$sayara_automotive_custom_css .='.copyright{';
		$sayara_automotive_custom_css .='padding-top: '.esc_attr($sayara_automotive_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($sayara_automotive_copyright_top_bottom_padding).'px;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_footer_text_font_size = get_theme_mod('sayara_automotive_footer_text_font_size', 16);
	$sayara_automotive_custom_css .='.site-info{';
		$sayara_automotive_custom_css .='font-size: '.esc_attr($sayara_automotive_footer_text_font_size).'px;';
	$sayara_automotive_custom_css .='}';

	// Slider Height 
	$sayara_automotive_slider_height_option = get_theme_mod('sayara_automotive_slider_height_option');
	$sayara_automotive_custom_css .='#slider img{';
		$sayara_automotive_custom_css .='height: '.esc_attr($sayara_automotive_slider_height_option).'px;';
	$sayara_automotive_custom_css .='}';

	// scroll to top setting
	$sayara_automotive_scroll_border_radius = get_theme_mod('sayara_automotive_scroll_border_radius');
	$sayara_automotive_custom_css .='.scrollup i{';
		$sayara_automotive_custom_css .='border-radius: '.esc_attr($sayara_automotive_scroll_border_radius).'px;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_scroll_top_fontsize = get_theme_mod('sayara_automotive_scroll_top_fontsize');
	$sayara_automotive_custom_css .='.scrollup i{';
		$sayara_automotive_custom_css .='font-size: '.esc_attr($sayara_automotive_scroll_top_fontsize).'px;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_scroll_top_bottom_padding = get_theme_mod('sayara_automotive_scroll_top_bottom_padding');
	$sayara_automotive_scroll_left_right_padding = get_theme_mod('sayara_automotive_scroll_left_right_padding');
	$sayara_automotive_custom_css .='.scrollup i{';
		$sayara_automotive_custom_css .='padding-top: '.esc_attr($sayara_automotive_scroll_top_bottom_padding).'px; padding-bottom: '.esc_attr($sayara_automotive_scroll_top_bottom_padding).'px; padding-left: '.esc_attr($sayara_automotive_scroll_left_right_padding).'px; padding-right: '.esc_attr($sayara_automotive_scroll_left_right_padding).'px;';
	$sayara_automotive_custom_css .='}';

	// comment settings
	$sayara_automotive_comment_button_text = get_theme_mod('sayara_automotive_comment_button_text', 'Post Comment');
	if($sayara_automotive_comment_button_text == ''){
		$sayara_automotive_custom_css .='#comments p.form-submit {';
			$sayara_automotive_custom_css .='display: none;';
		$sayara_automotive_custom_css .='}';
	}

	$sayara_automotive_comment_form_heading = get_theme_mod('sayara_automotive_comment_form_heading', 'Leave a Reply');
	if($sayara_automotive_comment_form_heading == ''){
		$sayara_automotive_custom_css .='#comments h2#reply-title {';
			$sayara_automotive_custom_css .='display: none;';
		$sayara_automotive_custom_css .='}';
	}

	$sayara_automotive_comment_form_size = get_theme_mod( 'sayara_automotive_comment_form_size',100);
	$sayara_automotive_custom_css .='#comments textarea{';
		$sayara_automotive_custom_css .='width: '.esc_attr($sayara_automotive_comment_form_size).'%;';
	$sayara_automotive_custom_css .='}';

	/*------------ Woocommerce Settings  --------------*/
	$sayara_automotive_shop_button_padding_top = get_theme_mod('sayara_automotive_shop_button_padding_top', 9);
	$sayara_automotive_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$sayara_automotive_custom_css .='padding-top: '.esc_attr($sayara_automotive_shop_button_padding_top).'px; padding-bottom: '.esc_attr($sayara_automotive_shop_button_padding_top).'px;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_shop_button_padding_left = get_theme_mod('sayara_automotive_shop_button_padding_left', 16);
	$sayara_automotive_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$sayara_automotive_custom_css .='padding-left: '.esc_attr($sayara_automotive_shop_button_padding_left).'px; padding-right: '.esc_attr($sayara_automotive_shop_button_padding_left).'px;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_shop_button_border_radius = get_theme_mod('sayara_automotive_shop_button_border_radius',3);
	$sayara_automotive_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$sayara_automotive_custom_css .='border-radius: '.esc_attr($sayara_automotive_shop_button_border_radius).'px;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_display_related_products = get_theme_mod('sayara_automotive_display_related_products',true);
	if($sayara_automotive_display_related_products == false){
		$sayara_automotive_custom_css .='.related.products{';
			$sayara_automotive_custom_css .='display: none;';
		$sayara_automotive_custom_css .='}';
	}

	$sayara_automotive_shop_products_border = get_theme_mod('sayara_automotive_shop_products_border', true);
	if($sayara_automotive_shop_products_border == false){
		$sayara_automotive_custom_css .='.woocommerce .products li{';
			$sayara_automotive_custom_css .='border: none;';
		$sayara_automotive_custom_css .='}';
	}

	$sayara_automotive_shop_page_top_padding = get_theme_mod('sayara_automotive_shop_page_top_padding',10);
	$sayara_automotive_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sayara_automotive_custom_css .='padding-top: '.esc_attr($sayara_automotive_shop_page_top_padding).'px !important; padding-bottom: '.esc_attr($sayara_automotive_shop_page_top_padding).'px !important;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_shop_page_left_padding = get_theme_mod('sayara_automotive_shop_page_left_padding',10);
	$sayara_automotive_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sayara_automotive_custom_css .='padding-left: '.esc_attr($sayara_automotive_shop_page_left_padding).'px !important; padding-right: '.esc_attr($sayara_automotive_shop_page_left_padding).'px !important;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_shop_page_border_radius = get_theme_mod('sayara_automotive_shop_page_border_radius',0);
	$sayara_automotive_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sayara_automotive_custom_css .='border-radius: '.esc_attr($sayara_automotive_shop_page_border_radius).'px;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_shop_page_box_shadow = get_theme_mod('sayara_automotive_shop_page_box_shadow',0);
	$sayara_automotive_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$sayara_automotive_custom_css .='box-shadow: '.esc_attr($sayara_automotive_shop_page_box_shadow).'px '.esc_attr($sayara_automotive_shop_page_box_shadow).'px '.esc_attr($sayara_automotive_shop_page_box_shadow).'px #e4e4e4;';
	$sayara_automotive_custom_css .='}';

	// footer widget background
	$sayara_automotive_footer_widget_background = get_theme_mod('sayara_automotive_footer_widget_background', '#153655');
	$sayara_automotive_custom_css .='.site-footer{';
		$sayara_automotive_custom_css .='background-color: '.esc_attr($sayara_automotive_footer_widget_background).';';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_footer_widget_image = get_theme_mod('sayara_automotive_footer_widget_image');
	if($sayara_automotive_footer_widget_image != false){
		$sayara_automotive_custom_css .='.site-footer{';
			$sayara_automotive_custom_css .='background: url('.esc_attr($sayara_automotive_footer_widget_image).');';
		$sayara_automotive_custom_css .='}';
	}

	/*------------- Navigation Menu Font Size ------------------*/
	$sayara_automotive_navigation_menu_font_size = get_theme_mod('sayara_automotive_navigation_menu_font_size');{
		$sayara_automotive_custom_css .='.main-navigation a, .navigation-top a{';
			$sayara_automotive_custom_css .='font-size: '.esc_attr($sayara_automotive_navigation_menu_font_size).'px;';
		$sayara_automotive_custom_css .='}';
	}

	$sayara_automotive_theme_lay = get_theme_mod( 'sayara_automotive_menu_text_tranform','Default');
	if($sayara_automotive_theme_lay == 'Uppercase'){
		$sayara_automotive_custom_css .='.main-navigation a, .navigation-top a,.main-navigation ul ul a{';
			$sayara_automotive_custom_css .='text-transform:Uppercase;';
		$sayara_automotive_custom_css .='}';
	}

	$sayara_automotive_theme_lay = get_theme_mod( 'sayara_automotive_menu_font_weight','Default');
	if($sayara_automotive_theme_lay == 'Normal'){
		$sayara_automotive_custom_css .='.main-navigation a, .navigation-top a{';
			$sayara_automotive_custom_css .='font-weight: normal;';
		$sayara_automotive_custom_css .='}';
	}

	// site title font size option
	$sayara_automotive_site_title_font_size = get_theme_mod('sayara_automotive_site_title_font_size', 30);{
	$sayara_automotive_custom_css .='.logo h1, .site-title a{';
	$sayara_automotive_custom_css .='font-size: '.esc_attr($sayara_automotive_site_title_font_size).'px;';
		$sayara_automotive_custom_css .='}';
	}

	$sayara_automotive_site_tagline_font_size_settings = get_theme_mod('sayara_automotive_site_tagline_font_size_settings', 14);{
	$sayara_automotive_custom_css .='.logo p{';
	$sayara_automotive_custom_css .='font-size: '.esc_attr($sayara_automotive_site_tagline_font_size_settings).'px !important;';
		$sayara_automotive_custom_css .='}';
	}

	/*------------------ Background Skin Option  -------------------*/
	$sayara_automotive_theme_lay = get_theme_mod( 'sayara_automotive_background_image_type','Transparent');
    if($sayara_automotive_theme_lay == 'Background'){
		$sayara_automotive_custom_css .='.blogger, #sidebox .widget, .tab-content, .related-posts .page-box, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .background-img-skin, .pages-te, .woocommerce .woocommerce-ordering{';
			$sayara_automotive_custom_css .='background-color: #fff; padding:10px; ';
		$sayara_automotive_custom_css .='}';
	}else if($sayara_automotive_theme_lay == 'Transparent'){
		$sayara_automotive_custom_css .='{';
			$sayara_automotive_custom_css .='background-color: transparent;';
		$sayara_automotive_custom_css .='}';
	}

	// slider overlay
	$sayara_automotive_show_slider_image_overlay = get_theme_mod('sayara_automotive_show_slider_image_overlay', true);
	if($sayara_automotive_show_slider_image_overlay == false){
		$sayara_automotive_custom_css .='#slider img{';
			$sayara_automotive_custom_css .='opacity:1;';
		$sayara_automotive_custom_css .='}';
	} 
	$sayara_automotive_color_slider_image_overlay = get_theme_mod('sayara_automotive_color_slider_image_overlay', true);
	if($sayara_automotive_show_slider_image_overlay != false){
		$sayara_automotive_custom_css .='#slider{';
			$sayara_automotive_custom_css .='background-color: '.esc_attr($sayara_automotive_color_slider_image_overlay).';';
		$sayara_automotive_custom_css .='}';
	}

	// woocommerce product sale settings
	$sayara_automotive_border_radius_product_sale_text = get_theme_mod('sayara_automotive_border_radius_product_sale_text',50);
	$sayara_automotive_custom_css .='.woocommerce span.onsale {';
		$sayara_automotive_custom_css .='border-radius: '.esc_attr($sayara_automotive_border_radius_product_sale_text).'%;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_position_product_sale = get_theme_mod('sayara_automotive_position_product_sale', 'Right');
	if($sayara_automotive_position_product_sale == 'Right' ){
		$sayara_automotive_custom_css .='.woocommerce ul.products li.product .onsale{';
			$sayara_automotive_custom_css .=' left:auto; right:0;';
		$sayara_automotive_custom_css .='}';
	}elseif($sayara_automotive_position_product_sale == 'Left' ){
		$sayara_automotive_custom_css .='.woocommerce ul.products li.product .onsale{';
			$sayara_automotive_custom_css .=' left:0; right:auto;';
		$sayara_automotive_custom_css .='}';
	}

	$sayara_automotive_product_sale_text_size = get_theme_mod('sayara_automotive_product_sale_text_size',14);
	$sayara_automotive_custom_css .='.woocommerce span.onsale{';
		$sayara_automotive_custom_css .='font-size: '.esc_attr($sayara_automotive_product_sale_text_size).'px;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_top_bottom_product_sale_padding = get_theme_mod('sayara_automotive_top_bottom_product_sale_padding');
	$sayara_automotive_left_right_product_sale_padding = get_theme_mod('sayara_automotive_left_right_product_sale_padding');
	$sayara_automotive_custom_css .='.woocommerce span.onsale{';
		$sayara_automotive_custom_css .='padding-top: '.esc_attr($sayara_automotive_top_bottom_product_sale_padding).'px; padding-bottom: '.esc_attr($sayara_automotive_top_bottom_product_sale_padding).'px; padding-left: '.esc_attr($sayara_automotive_left_right_product_sale_padding).'px; padding-right: '.esc_attr($sayara_automotive_left_right_product_sale_padding).'px; display:inline-block;';
	$sayara_automotive_custom_css .='}';

	// woocommerce Product Navigation
	$sayara_automotive_shop_products_navigation = get_theme_mod('sayara_automotive_shop_products_navigation', 'Yes');
	if($sayara_automotive_shop_products_navigation == 'No'){
		$sayara_automotive_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$sayara_automotive_custom_css .='display: none;';
		$sayara_automotive_custom_css .='}';
	}

	// Post Block
	$sayara_automotive_post_break_block_setting = get_theme_mod( 'sayara_automotive_post_break_block_setting','Into Blocks');
    if($sayara_automotive_post_break_block_setting == 'Without Blocks'){
		$sayara_automotive_custom_css .='.blogger{';
			$sayara_automotive_custom_css .='border: none; margin:30px 0;';
		$sayara_automotive_custom_css .='}';
	}

	// fixed header padding option
	$sayara_automotive_fixed_header_padding_option = get_theme_mod('sayara_automotive_fixed_header_padding_option');
	$sayara_automotive_custom_css .='.fixed-header{';
		$sayara_automotive_custom_css .='padding: '.esc_attr($sayara_automotive_fixed_header_padding_option).'px;';
	$sayara_automotive_custom_css .='}';

	// slider top and bottom padding
	$sayara_automotive_padding_top_bottom_slider_content = get_theme_mod('sayara_automotive_padding_top_bottom_slider_content');
	$sayara_automotive_padding_left_right_slider_content = get_theme_mod('sayara_automotive_padding_left_right_slider_content');
	$sayara_automotive_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$sayara_automotive_custom_css .='top: '.esc_attr($sayara_automotive_padding_top_bottom_slider_content).'%; bottom: '.esc_attr($sayara_automotive_padding_top_bottom_slider_content).'%;left: '.esc_attr($sayara_automotive_padding_left_right_slider_content).'%;right: '.esc_attr($sayara_automotive_padding_left_right_slider_content).'%;';
	$sayara_automotive_custom_css .='}';

	// featured image setting
	$sayara_automotive_post_image_border_radius = get_theme_mod('sayara_automotive_post_image_border_radius', 0);
	$sayara_automotive_custom_css .='.post-image img, .wrapper img{';
		$sayara_automotive_custom_css .='border-radius: '.esc_attr($sayara_automotive_post_image_border_radius).'px;';
	$sayara_automotive_custom_css .='}';

	$sayara_automotive_featured_image_box_shadow = get_theme_mod('sayara_automotive_featured_image_box_shadow',0);
	$sayara_automotive_custom_css .='.post-image img, .wrapper img{';
		$sayara_automotive_custom_css .='box-shadow: '.esc_attr($sayara_automotive_featured_image_box_shadow).'px '.esc_attr($sayara_automotive_featured_image_box_shadow).'px '.esc_attr($sayara_automotive_featured_image_box_shadow).'px #ccc;';
	$sayara_automotive_custom_css .='}';
   
    //Copyright background css
	$sayara_automotive_copyright_background_color = get_theme_mod('sayara_automotive_copyright_background_color');
	$sayara_automotive_custom_css .='.copyright{';
		$sayara_automotive_custom_css .='background-color: '.esc_attr($sayara_automotive_copyright_background_color).';';
	$sayara_automotive_custom_css .='}';
     














