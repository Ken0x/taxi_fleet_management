<?php
/**
 * The Header for our theme.
 * @package Driving School Lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'driving-school-lite' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>

  <?php if(get_theme_mod('driving_school_lite_preloader',true)){ ?>
    <div id="overlayer"></div>
    <span class="tg-loader">
      <span class="tg-loader-inner"></span>
    </span>
  <?php }?>

  <header role="banner" id="header">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'driving-school-lite' ); ?><span class="screen-reader-text"><?php esc_html_e('Skip to Content','driving-school-lite'); ?></span></a>
    <div class="toggle-menu responsive-menu">
      <button role="tab" onclick="driving_school_lite_resMenu_open()"><i class="fas fa-bars"></i><?php esc_html_e('Menu','driving-school-lite'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','driving-school-lite'); ?></span></button>
    </div>
    
    <div class="contact-detail">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="logo">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php else: ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                  <p class="site-description">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <?php if ( get_theme_mod('driving_school_lite_call_text','') != "" ) {?>
                  <div class="call">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-3 p-0">
                          <div class="contact-icon">
                            <i class="fas fa-phone-volume"></i>
                          </div>
                        </div>
                        <div class="col-lg-9 col-md-12 col-9 p-0">
                          <?php if ( get_theme_mod('driving_school_lite_call_text','') != "" ) {?>
                            <p class="header-txt"><?php echo esc_html( get_theme_mod('driving_school_lite_call_text','' )); ?></p>
                          <?php }?>
                          <?php if ( get_theme_mod('driving_school_lite_call_number','') != "" ) {?>
                            <p><?php echo esc_html( get_theme_mod('driving_school_lite_call_number','' )); ?></p>
                          <?php }?>
                        </div>
                    </div>                  
                  </div>
                <?php }?>
              </div>
              <div class="col-lg-4 col-md-4">
                <?php if ( get_theme_mod('driving_school_lite_email_text','') != "" ) {?>
                  <div class="mail">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-3 p-0">
                        <div class="contact-icon">
                          <i class="far fa-envelope"></i>
                        </div>
                      </div>
                      <div class="col-lg-9 col-md-12 col-9 p-0">
                        <?php if ( get_theme_mod('driving_school_lite_email_text','') != "" ) {?>
                          <p class="header-txt"><?php echo esc_html( get_theme_mod('driving_school_lite_email_text','') ); ?></p>
                        <?php }?>
                        <?php if ( get_theme_mod('driving_school_lite_email','') != "" ) {?>
                          <p><?php echo esc_html( get_theme_mod('driving_school_lite_email','') ); ?></p>
                        <?php }?>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <?php if ( get_theme_mod('driving_school_lite_timing_text','') != "" ) {?>
                  <div class="time">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-3 p-0">
                        <div class="contact-icon">
                          <i class="far fa-clock"></i>
                        </div>
                      </div>
                      <div class="col-lg-9 col-md-12 col-9 p-0">
                        <?php if ( get_theme_mod('driving_school_lite_timing_text','') != "" ) {?>
                          <p class="header-txt"><?php echo esc_html( get_theme_mod('driving_school_lite_timing_text','') ); ?></p>
                        <?php }?>
                        <?php if ( get_theme_mod('driving_school_lite_timing','') != "" ) {?>
                          <p><?php echo esc_html( get_theme_mod('driving_school_lite_timing','') ); ?></p>
                        <?php }?>
                      </div> 
                    </div>
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-section <?php if( get_theme_mod( 'driving_school_lite_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
      <div class="menuborder">
        <div class="container">
          <div class="menu-sec">
            <div class="row m-0">
              <div class="col-lg-11 col-md-6 col-6 black p-0">
                <div class="top-bar">
                  <div class="menubox">
                    <div id="sidelong-menu" class="nav side-nav">
                      <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'driving-school-lite' ); ?>">
                        <?php 
                          wp_nav_menu( array( 
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu-navigation clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) ); 
                        ?>
                        <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="driving_school_lite_resMenu_close()"><?php esc_html_e('Close Menu','driving-school-lite'); ?><i class="fas fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','driving-school-lite'); ?></span></a>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-1 col-md-6 col-6 black p-0">
                <div class="search-box">
                  <div class="wrap"><?php get_search_form(); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="dash">
      </div>
    </div>
  </header>