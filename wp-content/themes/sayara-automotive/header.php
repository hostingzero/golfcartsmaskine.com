<?php
/**
 * The header for our theme 
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>
	<?php if(get_theme_mod('sayara_automotive_loader_setting',false) != '' || get_theme_mod('sayara_automotive_enable_disable_preloader',false) != ''){ ?>
	    <div id="pre-loader">
	      <div class='demo'>
	        <?php $sayara_automotive_theme_lay = get_theme_mod( 'sayara_automotive_preloader_types','Default');
	        if($sayara_automotive_theme_lay == 'Default'){ ?>
				<div class='circle'>
					<div class='inner'></div>
				</div>
				<div class='circle'>
					<div class='inner'></div>
				</div>
				<div class='circle'>
					<div class='inner'></div>
				</div>
	        <?php }elseif($sayara_automotive_theme_lay == 'Circle'){ ?>
	            <div class='circle'>
	            	<div class='inner'></div>
	            </div>
	        <?php }elseif($sayara_automotive_theme_lay == 'Two Circle'){ ?>
	            <div class='circle'>
	            	<div class='inner'></div>
	            </div>
	            <div class='circle'>
	            	<div class='inner'></div>
	            </div>
	        <?php } ?>
	      </div>
	    </div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'sayara-automotive' ); ?></a>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 align-self-center">
							<div class="logo py-2 text-md-start text-center align-self-center">
								<?php if ( has_custom_logo() ) : ?>
					              <div class="site-logo"><?php the_custom_logo(); ?></div>
					            <?php endif; ?>
					              <?php $blog_info = get_bloginfo( 'name' ); ?>
					              <?php if ( ! empty( $blog_info ) ) : ?>
					              	<?php if( get_theme_mod('sayara_automotive_show_site_title',true) != ''){ ?>
						                <?php if ( is_front_page() && is_home() ) : ?>
					                  		<h1 class="site-title m-0 p-0 text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></h1>
						                <?php else : ?>
					                  		<p class="site-title m-0 p-0 text-uppercase"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						                <?php endif; ?>
						            <?php }?>
								<?php endif; ?>
								<?php
								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) :
								?>
									<?php if( get_theme_mod('sayara_automotive_show_tagline',true) != ''){ ?>
										<p class="site-description m-0 p-0">
											<?php echo esc_html($description); ?>
										</p>
					              	<?php }?>
					            <?php endif; ?>
					        </div>
						</div>
						<div class="col-lg-9 col-md-8 align-self-center <?php if( get_theme_mod( 'sayara_automotive_fixed_header', false) != '' || get_theme_mod( 'sayara_automotive_enable_disable_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
							<?php if ( has_nav_menu( 'top' ) ) : ?>
								<div class="navigation-top py-2">
									<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<?php if( get_theme_mod('sayara_automotive_show_hide_topbar', false) != '' || get_theme_mod('sayara_automotive_enable_disable_topbar', false) != ''){ ?>
				<div class="topbar text-md-start text-center">
					<div class="container">
						<div class="top-bg py-2 px-3">
							<div class="row">
								<div class="col-lg-3 col-md-6 contact-details mb-lg-0 mb-3 align-self-center">
									<div class="row">
										<?php if( get_theme_mod( 'sayara_automotive_location_head','' ) != '' || get_theme_mod( 'sayara_automotive_address','' ) != '') { ?>
											<div class="col-lg-2 col-md-2">
												<i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_location_icon_changer','fas fa-map-marker-alt')); ?> pt-2"></i>
											</div>
											<div class="col-lg-10 col-md-10">
												<p class="top-head m-0"><?php echo esc_html( get_theme_mod('sayara_automotive_location_head','' )); ?></p>
												<p class="m-0"><?php echo esc_html( get_theme_mod('sayara_automotive_address','' )); ?></p>
											</div>
										<?php }?>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 contact-details mb-lg-0 mb-3 align-self-center">
									<div class="row">
										<?php if( get_theme_mod( 'sayara_automotive_contact_head','' ) != '' || get_theme_mod( 'sayara_automotive_contact_no','' ) != '' || get_theme_mod( 'sayara_automotive_mail_address','' ) != '') { ?>
											<div class="col-lg-2 col-md-2">
												<i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_contact_icon_changer','fa fa-phone')); ?> pt-2"></i>
											</div>
											<div class="col-lg-10 col-md-10">
												<p class="top-head m-0"><?php echo esc_html( get_theme_mod('sayara_automotive_contact_head','' )); ?></p>
												<a href="tel:<?php echo esc_attr( get_theme_mod('sayara_automotive_contact_no','' )); ?>"><?php echo esc_html( get_theme_mod('sayara_automotive_contact_no','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('sayara_automotive_contact_no','' )); ?></span></a>
												<a href="mailto:<?php echo esc_attr( get_theme_mod('sayara_automotive_mail_address','') ); ?>"><?php echo esc_html( get_theme_mod('sayara_automotive_mail_address','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('sayara_automotive_mail_address','' )); ?></span></a>
											</div>
										<?php }?>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 contact-details mb-lg-0 mb-3 align-self-center">
									<div class="row">
										<?php if( get_theme_mod( 'sayara_automotive_time_head','' ) != '' || get_theme_mod( 'sayara_automotive_time','' ) != '') { ?>
											<div class="col-lg-2 col-md-2">
												<i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_time_icon_changer','far fa-clock')); ?> pt-2"></i>
											</div>
											<div class="col-lg-10 col-md-10">
												<p class="top-head m-0"><?php echo esc_html( get_theme_mod('sayara_automotive_time_head','' )); ?></p>
												<p class="m-0"><?php echo esc_html( get_theme_mod('sayara_automotive_time','' )); ?></p>
											</div>
										<?php }?>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 p-0 align-self-center">
									<div class="social-icon text-md-start text-center align-self-center">
										<?php if( get_theme_mod( 'sayara_automotive_facebook_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'sayara_automotive_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_facebook_icon_changer','fab fa-facebook-f')); ?> my-2 me-1" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','sayara-automotive' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'sayara_automotive_twitter_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'sayara_automotive_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_twitter_icon_changer','fab fa-twitter')); ?> my-2 me-1"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','sayara-automotive' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'sayara_automotive_insta_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'sayara_automotive_insta_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_insta_icon_changer','fab fa-instagram')); ?> my-2 me-1"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','sayara-automotive' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'sayara_automotive_youtube_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'sayara_automotive_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_youtube_icon_changer','fab fa-youtube')); ?> my-2 me-1"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','sayara-automotive' );?></span></a>
										<?php } ?>
										<?php if( get_theme_mod( 'sayara_automotive_linkedin_url') != '') { ?>
										    <a href="<?php echo esc_url( get_theme_mod( 'sayara_automotive_linkedin_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_linkedin_icon_changer','fab fa-linkedin-in')); ?> my-2 me-1"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','sayara-automotive' );?></span></a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</header>
		
	<div class="site-content-contain">
		<div id="content">