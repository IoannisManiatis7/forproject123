<?php if(get_field('podcast_field', 'tovimagr_podcast')) { 
$postobject = get_field('podcast_chosen', 'tovimagr_podcast'); ?>
<div class="wrap-podcast">
  <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
  <div class="column is-narrow is-hidden-mobile">
    <div class="rect-width">
      <div class="wrap-header-section">
      <a href="/category/podcasts/"><h2 class="header-section zonaultra f-400">PODCAST</h2></a>
      </div>
    </div>
  </div>
  <div class="column is-relative is-full-small">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
      <div class="column is-narrow-tablet is-narrow-desktop is-full-small">
        <div class="podcast-cover">
          <?php if( $postobject ) { ?>
          <?php foreach( $postobject as $post): setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>">
          <?php endforeach; wp_reset_postdata(); ?>
          <?php } ?>
          <img src="/wp-content/themes/whsk_tovima.com/common/imgs/SimeraCover@2x.png" alt="" width="400" height="402" loading="lazy" />
          <?php if( $postobject ) { ?>
          </a>
          <?php } ?>
        </div>
      </div>
      <div class="column is-relative podcast-col is-full-small">
        <div class="podcast-inner-col">
          
          <div class="podcast-inner-header">
            <?php if(get_field('podcast_title', 'tovimagr_podcast')) { ?>
            <h3 class="zonabold f-400 podcast-showname"><?php echo get_field('podcast_title', 'tovimagr_podcast'); ?></h3>
            <?php } ?>
            <?php if(get_field('podcast_description', 'tovimagr_podcast')) { ?>            
            <h4 class="zonaregular f-400 podcast-showepisode"><?php echo get_field('podcast_description', 'tovimagr_podcast'); ?></h4>
            <?php } ?>
            
            <?php if( $postobject ) { ?>
            <?php foreach( $postobject as $post): setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>" class="is-block">
            <div class="podcast-post">
              <h3 class="manrope f-600 is-size-3">
              <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
              </h3>
            </div>
            </a>
            <?php endforeach; wp_reset_postdata(); ?>
            <?php } ?>
          </div>
          
          <?php if( $postobject ) { ?>
          <?php foreach( $postobject as $post): setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>" class="is-block">
          <?php endforeach; wp_reset_postdata(); ?>
          <?php } ?>
          <div class="podcast-inner-footer">
            <div class="podcast-audio-button">
<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
  <g id="button" transform="translate(-0.27)">
    <circle id="Ellipse_7" data-name="Ellipse 7" cx="25" cy="25" r="25" transform="translate(0.27)" fill="#3a55a6"/>
    <path id="Union_4" data-name="Union 4" d="M0,24A24,24,0,1,1,24,48,24.029,24.029,0,0,1,0,24Zm2.526,0A21.474,21.474,0,1,0,24,2.526,21.5,21.5,0,0,0,2.526,24Zm17.628,7.728V16.42a1.221,1.221,0,0,1,.763-1.132,1.263,1.263,0,0,1,1.447.242l7.582,7.576a1.262,1.262,0,0,1,0,1.786L22.368,32.47a1.273,1.273,0,0,1-.1.089,1.22,1.22,0,0,1-2.114-.831Zm2.441-3.06L27.264,24,22.6,19.331Z" transform="translate(1.27 1)" fill="#fff"/>
  </g>
</svg>              
            </div>
            <div class="podcast-audio-wave">
              <div class="waveform" id="waveform">
                <img width="256" height="48" loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/audiogram.svg" />
              </div>              
            </div>
          </div>
          <?php if( $postobject ) { ?>
          </a>
          <?php } ?>
          
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<?php } ?>