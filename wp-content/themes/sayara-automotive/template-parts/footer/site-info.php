<?php
/**
 * Displays footer site info
 */

?>
<?php if( get_theme_mod( 'sayara_automotive_hide_show_scroll', false) != '' || get_theme_mod( 'sayara_automotive_enable_disable_scrolltop', false) != '') { ?>
    <?php $sayara_automotive_theme_lay = get_theme_mod( 'sayara_automotive_footer_options','Right');
    if($sayara_automotive_theme_lay == 'Left align'){ ?>
        <a href="#" class="scrollup left"><i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'sayara-automotive' ); ?></span></a>
    <?php }else if($sayara_automotive_theme_lay == 'Center align'){ ?>
        <a href="#" class="scrollup center"><i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'sayara-automotive' ); ?></span></a>
    <?php }else{ ?>
        <a href="#" class="scrollup"><i class="<?php echo esc_attr(get_theme_mod('sayara_automotive_scroll_icon_changer','fas fa-long-arrow-alt-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Scroll Up', 'sayara-automotive' ); ?></span></a>
    <?php }?>
<?php }?>
<div class="site-info">
	<span><?php sayara_automotive_credit(); ?> <?php echo esc_html(get_theme_mod('sayara_automotive_footer_text',__('By ThemesEye','sayara-automotive'))); ?> </span>
	<span class="footer_text"><?php echo esc_html_e('Powered By WordPress','sayara-automotive') ?></span>
</div>