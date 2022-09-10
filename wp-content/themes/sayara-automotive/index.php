<?php
/**
 * The main template file
 */

get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<?php
	    $sayara_automotive_layout_setting = get_theme_mod( 'sayara_automotive_layout_settings', __('Right Sidebar','sayara-automotive') );
	    if($sayara_automotive_layout_setting == 'Left Sidebar'){ ?>
		    <div class="row">
			    <div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<?php if( get_theme_mod( 'sayara_automotive_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php sayara_automotive_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
			</div>
		<?php }else if($sayara_automotive_layout_setting == 'Right Sidebar'){ ?>
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<?php if( get_theme_mod( 'sayara_automotive_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php sayara_automotive_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			</div>
		<?php }else if($sayara_automotive_layout_setting == 'One Column'){ ?>
				<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();
							
							get_template_part( 'template-parts/post/content', get_post_format() );

						endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>
				<?php if( get_theme_mod( 'sayara_automotive_show_post_pagination',true) != '') { ?>
					<div class="navigation">
		                <?php sayara_automotive_pagination_type(); ?>
	       	 		</div>
	       	 	<?php } ?>
		<?php }else if($sayara_automotive_layout_setting == 'Grid Layout'){ ?>
			<div class="row">
				<div class="col-lg-9 col-md-9">
					<div class="row">
						<?php
							if ( have_posts() ) :

								/* Start the Loop */
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/post/gridlayout' );

								endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif;
						?>
						<?php if( get_theme_mod( 'sayara_automotive_show_post_pagination',true) != '') { ?>
							<div class="navigation">
				                <?php sayara_automotive_pagination_type(); ?>
			       	 		</div>
			       	 	<?php } ?>
	       	 		</div>
				</div>
				<div id="sidebox" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebox-2'); ?>
				</div>
			</div>
		<?php }else {?>
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<?php if( get_theme_mod( 'sayara_automotive_show_post_pagination',true) != '') { ?>
						<div class="navigation">
			                <?php sayara_automotive_pagination_type(); ?>
		       	 		</div>
		       	 	<?php } ?>
				</div>
				<div id="sidebox" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebox-1'); ?>
				</div>
			</div>
		<?php } ?>
	</div>
</main>

<?php get_footer();