<?php 
// if(get_field('podcast_field', 'tovimagr_podcast')) { 
// $postobject = get_field('podcast_chosen', 'tovimagr_podcast'); ?>
<div class="wrap-wrap">
  <div class="maxgridrow">
    <div class="wrap-podcast mt-0">
      <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
        <div class="column is-narrow is-full-mobile">
          <div class="rect-width">
            <div class="wrap-header-section">
              <a href="#">
                <h2 class="header-section zonaultra f-400">PODCAST</h2>
              </a>
            </div>
          </div>
        </div>
        <div class="column is-relative is-full-mobile is-full-small">
          <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
            <div class="column is-full-mobile is-narrow-tablet is-narrow-desktop is-full-small">
              <div class="podcast-main-title">
                <?php if ($postobject) { ?>
                  <?php foreach ($postobject as $post) : setup_postdata($post); ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php endforeach; wp_reset_postdata(); ?>
                  <?php } ?>
                  <div class="podcast-inner-col">
                    <div class="podcast-inner-header">
                      <div class="podcast-title">
                        <h3 class="my-0 o-head f-400 zonabold">New Santorini Earthquakes Shatter Hopes of Stabilization</h3>
                      </div>
                    </div>
                  </div>

                  <?php if ($postobject) { ?>
                    </a>
                  <?php } ?>
              </div>
            </div>
            <div class="column is-relative is-full-mobile is-full-small">

              <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
                <div class="column is-full-mobile is-narrow-tablet is-narrow-desktop is-full-small">
                  <div class="podcast-cover">
                    <?php if ($postobject) { ?>
                      <?php foreach ($postobject as $post) : setup_postdata($post); ?>
                        <a href="<?php the_permalink(); ?>">
                        <?php endforeach;
                      wp_reset_postdata(); ?>
                      <?php } ?>
                      <img src="/wp-content/themes/whsk_tovima.gr/common/imgs/pods/okYesokYes@2x.png" alt="" width="400" height="400" loading="lazy" />
                      <?php if ($postobject) { ?>
                        </a>
                      <?php } ?>
                  </div>
                </div>
                <?php //END OF ADDED CODE 
                ?>
                <div class="column is-relative podcast-col is-full-mobile is-full-small">
                  <div class="podcast-inner-col">

                    <div class="podcast-inner-header">
                      <?php if(get_field('hypertext')) { ?>
                      <h3 class="manrope f-700 podcast-showname">
                        <?php echo get_field('hypertext'); ?></h3>
                      <?php } ?>
                      <?php /* if (get_field('podcast_description', 'tovimagr_podcast')) {  ?>
                      <h4 class="zonaregular f-400 podcast-showepisode"><?php echo get_field('podcast_description', 'tovimagr_podcast'); ?></h4>
                      <?php } */ ?>

                      <?php if ($postobject) { ?>
                        <?php foreach ($postobject as $post) : setup_postdata($post); ?>
                          <a href="<?php the_permalink(); ?>" class="is-block">
                            <div class="podcast-post">
                              <h3 class="zonabold f-600">
                                <?php include(TEMPLATEPATH .'/assets/repeaters/title.php');  ?>
                              </h3>
                            </div>
                          </a>
                        <?php endforeach;
                        wp_reset_postdata(); ?>
                      <?php } ?>
                    </div>
                    <div class="inner-vpodcast-bottom">
                      <div class="subscribe-area is-relative">
                        <span class="subscribe-label">SUBSCRIBE <span class="dashicons dashicons-arrow-down-alt2"></span></span>
                        <ul class="subscribe-options">
                            <li><a class="polink" target="_blank" href="#">SPOTIFY</a></li>
                            <li><a class="polink" target="_blank" href="#">APPLE PODCAST</a></li>
                        </ul>
                      </div>
                    </div>
                    <?php //End of added code ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php // } ?>