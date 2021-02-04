,true<?php
/**
 * The template part for displaying services
 * @package Driving School Lite
 * @subpackage driving_school_lite
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<article class="blog-sec animated fadeInDown">
  <div class="mainimage">
    <?php 
      if(has_post_thumbnail()) { 
        the_post_thumbnail(); 
      }
    ?>
  </div> 
  <?php if( get_theme_mod( 'driving_school_lite_metafields_date',true) != '' || get_theme_mod( 'driving_school_lite_metafields_author',true) != '' || get_theme_mod( 'driving_school_lite_metafields_comment',true) != '') { ?>
    <div class="post-info">
      <?php if( get_theme_mod( 'driving_school_lite_metafields_date',true) != '') { ?>
        <i class="fa fa-calendar" aria-hidden="true"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'driving_school_lite_metafields_author',true) != '') { ?>
        <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author"> <?php esc_html(the_author()); ?></span><span class="screen-reader-text"><?php esc_html(the_author()); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'driving_school_lite_metafields_comment',true) != '') { ?>
        <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"> <?php comments_number( __('0 Comments','driving-school-lite'), __('0 Comments','driving-school-lite'), __('% Comments','driving-school-lite') ); ?></span> 
      <?php }?>
    </div>
  <?php }?>
  <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php esc_html(the_title()); ?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h2>
  <?php if(get_theme_mod('driving_school_lite_blog_post_content') == 'Full Content'){ ?>
    <?php the_content(); ?>
  <?php }
  if(get_theme_mod('driving_school_lite_blog_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
    <?php if(get_the_excerpt()) { ?>
      <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( driving_school_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('driving_school_lite_post_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('driving_school_lite_button_excerpt_suffix','...') ); ?></p></div>
    <?php }?>
  <?php }?>
  <?php if ( get_theme_mod('driving_school_lite_blog_button_text','Read Full') != '' ) {?>
    <div class="blogbtn">
      <a href="<?php esc_url(the_permalink()); ?>" class="blogbutton-small" ><?php echo esc_html( get_theme_mod('driving_school_lite_blog_button_text',__('Read Full', 'driving-school-lite')) ); ?><span class="screen-reader-text"><?php esc_html_e('Read Full','driving-school-lite'); ?></span></a>
    </div>
  <?php }?>
</article>