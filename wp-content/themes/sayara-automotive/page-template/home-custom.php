<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'sayara_automotive_before_slider' ); ?>

  <?php if( get_theme_mod('sayara_automotive_slider_arrows', false) != '' || get_theme_mod('sayara_automotive_enable_disable_slider', false) != ''){ ?>
    <section id="slider">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('sayara_automotive_slider_speed', 3000)); ?>"> 
        <?php $sayara_automotive_slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'sayara_automotive_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $sayara_automotive_slider_pages[] = $mod;
            }
          }
          if( !empty($sayara_automotive_slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $sayara_automotive_slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <?php if( get_theme_mod('sayara_automotive_slider_title',true) != '' || get_theme_mod('sayara_automotive_slider_content',true) != '' || get_theme_mod('sayara_automotive_slider_button',true) != '') { ?>
                  <div class="box">
                    <div class="box-content">
                      <?php if( get_theme_mod('sayara_automotive_slider_title',true) != ''){ ?>
                        <h1 class="pe-3 mb-2 text-capitalize"><?php the_title();?></h1>
                      <?php } ?>
                      <?php if( get_theme_mod('sayara_automotive_slider_content',true) != ''){ ?>
                        <p class="pe-4"><?php $excerpt = get_the_excerpt(); echo esc_html( sayara_automotive_string_limit_words( $excerpt, esc_attr(get_theme_mod('sayara_automotive_slider_excerpt_number','20')))); ?></p>
                      <?php } ?>
                      <div class="row">
                        <div class="col-lg-7 col-md-7">
                          <?php if (get_theme_mod( 'sayara_automotive_slider_button',true) != '' || get_theme_mod( 'sayara_automotive_show_hide_slider_button',true) != ''){ ?>
                            <?php if( get_theme_mod('sayara_automotive_slider_button_text','READ MORE') != ''){ ?>
                              <div class ="readbutton mt-md-3">
                                <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('sayara_automotive_slider_button_text','READ MORE'));?><i class="fas fa-angle-double-right ms-1"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('sayara_automotive_slider_button_text','READ MORE'));?></span></a>
                              </div>
                            <?php } ?>
                          <?php } ?>
                        </div>
                        <div class="col-lg-5 col-md-5">
                          <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><p class="m-0 p-0">PR</p><p class="m-0 p-0">EV</p></span>
                            <span class="screen-reader-text"><?php esc_html_e( 'Previous','sayara-automotive' );?></span>
                          </a>
                          <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
                            <span class="carousel-control-next-icon" aria-hidden="true"><p class="m-0 p-0">NE</p><p class="m-0 p-0">XT</p></span>
                            <span class="screen-reader-text"><?php esc_html_e( 'Next','sayara-automotive' );?></span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="shadow"></div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
      </div> 
      <div class="clearfix"></div>
    </section> 
  <?php }?> 

  <?php do_action( 'sayara_automotive_after_slider' ); ?>

  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="tab-main col-lg-3 col-md-4">
          <ul class="nav tab-nav row m-0">
            <?php 
            for ($n=1; $n < 4; $n++) { 
              $sayara_automotive_postData1 =  get_theme_mod('sayara_automotive_tab_pages'.$n);
              if($sayara_automotive_postData1){
                $args = array( 'name' => esc_html($sayara_automotive_postData1 ,'sayara-automotive'));
                $new = new WP_Query($args); ?>
                <?php $j=1;
                  while ( $new->have_posts() ){
                      $new->the_post();  ?>
                        <li  class="outside nav-item col-lg-12 col-md-12">
                          <a class="pointer nav-link <?php if($n==1){ echo 'active'; } ?>" href="#blog_tab<?php echo esc_attr($n);?>" role="tab" data-toggle="tab">
                            <h3 ><?php the_title(); ?></h3><span class="screen-reader-text"><?php the_title(); ?></span>
                          </a>
                        </li>
                  <?php $j++;}
               wp_reset_query(); }?>
            <?php } ?>
          </ul>
        </div>
        <div class="tab-content blog_content col-lg-9 col-md-8">
          <?php 
          for ($count=1; $count < 4; $count++) { 
            $sayara_automotive_postData1 =  get_theme_mod('sayara_automotive_tab_pages'.$count);
            if($sayara_automotive_postData1){
              $args = array( 'name' => esc_html($sayara_automotive_postData1 ,'sayara-automotive'));
              $new = new WP_Query($args); 
              ?>
              <?php $i=1; while ( $new->have_posts() ){
                $new->the_post();  ?>
                <div role="tabpanel" class="tm_tab tab-pane fade <?php if($count==1){ echo 'in active show'; } ?>" id="blog_tab<?php echo esc_attr($count);?>">
                  <div class="about-text p-md-0 p-3">
                    <div class="row">
                      <div class="<?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12"<?php } ?>">
                        <h2 class="text-capitalize"><?php the_title(); ?></h2>
                        <?php the_excerpt();  ?>
                        <div class ="aboutbtn my-3">
                          <a href="<?php the_permalink(); ?>"><?php esc_html_e('BROWSE MORE','sayara-automotive'); ?><span class="screen-reader-text"><?php esc_html_e( 'BROWSE MORE','sayara-automotive' );?></span></a>
                        </div>
                      </div>
                      <?php if(has_post_thumbnail()) {?>
                        <div class="col-lg-6 col-md-6">
                          <div class="abt-image">
                            <?php the_post_thumbnail(); ?>
                          </div>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              <?php $i++; }
             wp_reset_query(); }?>
          <?php }?>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>

  <?php do_action( 'sayara_automotive_after_about' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post();?>
      <?php the_content(); ?>
    <?php endwhile; // End of the loop.
    wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>