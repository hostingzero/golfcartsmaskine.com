<?php
/**
 * Displays top navigation
 */
?>

<div class="header-menu">
	<div class="row m-0">
		<div class="col-lg-11 col-md-10 align-self-center">
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'sayara-automotive' ); ?>">
				<button role="tab" class="menu-toggle my-3 mx-auto p-3" aria-controls="top-menu" aria-expanded="false">
					<?php
						esc_html_e( 'Menu', 'sayara-automotive' );
					?>
				</button>
				<?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'top-menu',
				) ); ?>				
			</nav>
		</div>
		<?php if( get_theme_mod('sayara_automotive_show_hide_search',true) != ''){ ?>
			<div class="col-lg-1 col-md-2 align-self-center">
				<div class="search-body mt-2 align-self-center">
					<button type="button" class="search-show"><i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_search_icon_changer','fas fa-search')); ?> p-3"></i></button>
				</div>
			</div>
		<?php } ?>
		<div class="searchform-inner">
			<?php get_search_form(); ?>
			<button type="button" class="close"aria-label="Close"><span aria-hidden="true">X</span></button>
		</div>
	</div>
</div>