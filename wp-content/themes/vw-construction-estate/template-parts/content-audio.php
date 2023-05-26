<?php
/**
 * The template part for displaying audio Post
 *
 * @package VW Construction Estate 
 * @subpackage vw_construction_estate
 * @since VW Construction Estate 1.0
 */
?>
<?php 
  $vw_construction_estate_archive_year  = get_the_time('Y'); 
  $vw_construction_estate_archive_month = get_the_time('m'); 
  $vw_construction_estate_archive_day   = get_the_time('d'); 
?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="postbox smallpostimage wow zoomInDown delay-1000" data-wow-duration="2s">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
    <div class="new-text">
      <div class="box-content">
        <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2> 
        <?php if( get_theme_mod( 'vw_construction_estate_toggle_postdate',true) == 1 || get_theme_mod( 'vw_construction_estate_toggle_author',true) == 1 || get_theme_mod( 'vw_construction_estate_toggle_comments',true) == 1 || get_theme_mod( 'vw_construction_estate_toggle_time',true) == 1) { ?> 
          <div class="metabox">
            <?php if(get_theme_mod('vw_construction_estate_toggle_postdate',true)==1){ ?>
              <i class="fas fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_construction_estate_archive_year, $vw_construction_estate_archive_month, $vw_construction_estate_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_construction_estate_toggle_author',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_construction_estate_meta_field_separator'));?></span><i class="fas fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_construction_estate_toggle_comments',true)==1){ ?>
              <span><?php echo esc_html(get_theme_mod('vw_construction_estate_meta_field_separator'));?></span><i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','vw-construction-estate'), __('0 Comments','vw-construction-estate'), __('% Comments','vw-construction-estate') ); ?></span>
            <?php } ?>

            <?php if(get_theme_mod('vw_construction_estate_toggle_time',true)==1){ ?>
             <span><?php echo esc_html(get_theme_mod('vw_construction_estate_meta_field_separator'));?></span> <i class="fas fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
            <?php } ?>
          </div>
        <?php } ?>
        <hr class="big">
        <hr class="small">
        <div class="entry-content">
          <p>
            <?php $vw_construction_estate_theme_lay = get_theme_mod( 'vw_construction_estate_excerpt_settings','Excerpt');
            if($vw_construction_estate_theme_lay == 'Content'){ ?>
              <?php the_content(); ?>
            <?php }
            if($vw_construction_estate_theme_lay == 'Excerpt'){ ?>
              <?php if(get_the_excerpt()) { ?>
                <?php $vw_construction_estate_excerpt = get_the_excerpt(); echo esc_html( vw_construction_estate_string_limit_words( $vw_construction_estate_excerpt, esc_attr(get_theme_mod('vw_construction_estate_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_construction_estate_excerpt_suffix',''));?>
              <?php }?>
            <?php }?>
          </p>
        </div>
        <?php if( get_theme_mod('vw_construction_estate_button_text','Read Full') != ''){ ?>
          <div class="read_full">
            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html(get_theme_mod('vw_construction_estate_button_text',__('Read Full','vw-construction-estate')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_construction_estate_button_text',__('Read Full','vw-construction-estate')));?></span></a>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="clearfix"></div> 
  </div>
</article>