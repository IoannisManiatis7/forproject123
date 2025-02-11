<?php
if (is_single()) {
    global $post;
    $varpostid = $post->ID;
} else {
    $varpostid = '';
}
if (is_tag()) {
    $tag = get_queried_object();
}

global $wp;

?>

<?php if(is_home()) { ?>
<script>
    window.skinSize = 'small';
    var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (w > 1300) {
        window.skinSize = 'large';
    }
    if (w <= 668) {
        var platform = 'mobile';
        /*
        $(document).ready(function() {
            f = $(".das-mmiddle");
            d = $("#das-mmiddle-wp");
            var waypoint = new Waypoint({
                element: d[0],
                handler: function(n) {
                    "up" === n ? f.addClass('ups') : "down" === n && f.removeClass('ups')
                },
                offset: function() {
                    return window.innerHeight
                }
            })
        });
        */
    } else {
        var platform = 'desktop';
    }
</script>
<script async='async' src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script>
<script src="https://www.alteregomedia.org/files/js/gtags.js?v=1"></script>
<script>
    // gpush
    var plink = "<?php echo home_url( $wp->request ); ?>";
    try {setas()} catch (e) {var lineitemids = ''; var adserver = ''}
    googletag.cmd.push(function() {
        var header_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([670, 200], [[970, 250], [970, 90], [728, 90]]).build();
        var skin_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1100, 200], [1920, 1200]).build();
        var right_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([875, 200], [[300, 250], [300, 450], [300, 600]]).build();
        var over_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1000, 200], [1, 1]).build();
        var mapping_320 = googletag.sizeMapping().addSize([0, 0], [320, 50]).addSize([668, 0], []).build();
        var middle_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([300, 250], [[300, 250]]).addSize([300, 500], [[300, 600], [300, 250]]).addSize([668, 0], []).build();
        googletag.defineSlot('/28509845/tovima_group/tovima_home_320x50_top', [320, 50], '320x50_top').defineSizeMapping(mapping_320).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_mobile_300x250_middle_home', [[300, 600], [300, 250]], '300x250_middle_home').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_1x1_over', [1, 1], '1x1_over').defineSizeMapping(over_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_970x90_top', [[970, 250], [970, 90], [728, 90]], '970x90_top').defineSizeMapping(header_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_970x90_middle', [[970, 250], [970, 90], [728, 90]], '970x90_middle').defineSizeMapping(header_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_300x250_r1', [[300, 250], [300, 450], [300, 600]], '300x250_r1').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_300x250_r2', [[300, 250], [300, 450], [300, 600]], '300x250_r2').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_300x250_r3', [[300, 250], [300, 450], [300, 600]], '300x250_r3').defineSizeMapping(right_mapping).addService(googletag.pubads());
//         googletag.defineSlot('/28509845/tovima_group/tovima_home_1x1_out', [1920, 1200], '1x1_out').defineSizeMapping(skin_mapping).addService(googletag.pubads());
        var islot = googletag.defineOutOfPageSlot('/28509845/tovima_group/tovima_interstitial', googletag.enums.OutOfPageFormat.INTERSTITIAL);
        if (islot) {islot.addService(googletag.pubads());}
        googletag.pubads().setTargeting('Version', 'English');        
        googletag.pubads().setTargeting('Category', 'home');
        googletag.pubads().setTargeting('SubCategory', '');
        googletag.pubads().setTargeting('AdServer', adserver);
        googletag.pubads().setTargeting('Item_Id', '');
        googletag.pubads().setTargeting('Tags', '');
        googletag.pubads().setTargeting('Skin', skinSize);
        googletag.pubads().setTargeting('Platform', platform);
        googletag.pubads().collapseEmptyDivs(true);

        googletag.pubads().enableVideoAds();
        googletag.pubads().addEventListener('slotRenderEnded', function(event) {
        if(event.slot.getSlotElementId() === '300x250_r1' && !event.isEmpty && event.size[1] >= 300 ){ document.querySelector('body').classList.add('das600');}
        if(event.slot.getSlotElementId() === '300x250_r2' && !event.isEmpty && event.size[1] >= 300 ){ document.querySelector('body').classList.add('das600_r2'); }
        if(event.slot.getSlotElementId() === '300x250_r3' && !event.isEmpty && event.size[1] >= 300 ){ document.querySelector('body').classList.add('das600_r3'); }
        if(event.slot.getSlotElementId() === '300x250_r1' && !event.isEmpty && event.size[1] === 250 ){ document.querySelector('body').classList.add('das300'); }
        if(event.slot.getSlotElementId() === '300x250_r2' && !event.isEmpty && event.size[1] === 250 ){ document.querySelector('body').classList.add('das300_r2'); }
        if(event.slot.getSlotElementId() === '300x250_r3' && !event.isEmpty && event.size[1] === 250 ){ document.querySelector('body').classList.add('das300_r3'); }
        // if(event.slot.getSlotElementId() === '1x1_out' && !event.isEmpty ){ document.querySelector('body').classList.add('fxskin'); }
        if (event.slot.getSlotElementId() === '300x250_r1' || event.slot.getSlotElementId() === '300x250_middle' || event.slot.getSlotElementId() === '300x250_middle_home') 
        {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300();}};
        if (event.slot.getSlotElementId() === '300x250_middle_2') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("300x250_middle_2");}};
        if (event.slot.getSlotElementId() === '300x250_middle_3') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("300x250_middle_3");}};
        if (event.slot.getSlotElementId() === '320x50_bottom') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("320x50_bottom");}};
        if (event.slot.getSlotElementId() === '320x50_bottom_2') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("320x50_bottom_2");}};        
        if (event.slot.getSlotElementId() === '320x50_top')  {if (!event.isEmpty && mlineitemids.includes(event.lineItemId, 0) || !event.isEmpty && morderids.includes(event.campaignId, 0)) {pgm320();}}
        if (event.slot.getSlotElementId() === '970x90_top')  {if (!event.isEmpty && xlineitemids.includes(event.lineItemId, 0) || !event.isEmpty && xorderids.includes(event.campaignId, 0)) {pgm970();}}
        
        if(event.slot.getSlotElementId() === "970x90_top" && !event.isEmpty) {
        /*
          const TopBillboard = document.getElementById('970x90_top').offsetHeight;
//           stickyBilboard(document.getElementById('970x90_top'));
          const varbody =  document.querySelector('.tovimagr');
          varbody.style.paddingTop = ''+TopBillboard+'px';
          */
            
            const stickyToggleHeight = document.getElementById('dk-ad-sticky-toggle').offsetHeight;
            console.log ('ThestickyToggleHeight:', stickyToggleHeight);
            const checkAd = function() {

                const adCheckedElement = $('.dk-ad-checker-section');
                adCheckedElement.each(function(){
                    let desktopAdElement = $(this).find('.dk-ad-content-check-dskt');
                    let adCheckDesktop = $(this).find('.dk-ad-content-check-dskt').length;

                    if (adCheckDesktop === 0 ){
                        $(this).hide();
                    }
                });

            };

            checkAd();

            if($('.dk-ad-checker-section:not(.dk-ad-checker--static) .dk-ad-sticky-toggle').is(':visible')){
                $('.vimasite').css('margin-top', stickyToggleHeight);
                $('.dk-ad-sticky-toggle').css('position', 'fixed');
                $('.dk-ad-sticky-toggle').css('top', '0');
                $('.dk-ad-close-cta').show();
        //        $('.dk-ad-sticky-toggle').css('transform', 'translateY(0px)');
            };

            if($('.dk-ad-checker--static .dk-ad-sticky-toggle').is(':visible')){
                $('.dk-ad-close-cta').show();
            };

            $('.dk-ad-close-stickt-cta').click(function(){
                $(this).closest('.dk-mobile-ad-sticky').fadeOut();
            });


            let buttonClicked = false; 
            $('.dk-ad-close-cta').click(function(){
                // $('.dk-ad-sticky-toggle').css('transform', 'translateY(-250px)');

                if($('.dk-ad-checker-section').hasClass('dk-ad-checker--static')){
                    $(this).closest('.dk-ad-checker--static').fadeOut();
                } else {
                    $('.dk-ad-sticky-toggle').css('transform', 'translateY(-'+stickyToggleHeight+'px)');
                } 

                $('.vimasite').css('margin-top','0');
                buttonClicked = true;
            });


            $(window).scroll(function() {
                if (buttonClicked == false){
                    const scrollPosition = $(window).scrollTop();
                    const stopPosition = 700;
                    const stickyElement = $('.dk-ad-sticky-toggle');

                    if (scrollPosition > stopPosition) {
                    //    stickyElement.css('transform', 'translateY(-250px)');
                      stickyElement.css('transform', 'translateY(-'+stickyToggleHeight+'px)');
                    } else {
                        stickyElement.css('transform', 'translateY(0px)');
                    }
                }
            });
            
        }
        
        });
        googletag.pubads().setCentering(true);
        googletag.enableServices();
        googletag.display(islot);
      
    });
</script>

<?php } else { ?>

<script>
    window.skinSize = 'small';
    var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (w > 1300) {
        window.skinSize = 'large';
    }
    if (w <= 668) {
        var platform = 'mobile';
    } else {
        var platform = 'desktop';
    }

    function display320() {
        googletag.cmd.push(function() {
            googletag.display('320x50_bottom_2')
        });
        display320 = function() {}
    }

    function ways() {
        f = $(".das-mmiddle");
        d = $("#das-mmiddle-wp");
        var waypoint = new Waypoint({
            element: d[0],
            handler: function(n) {
                "up" === n ? f.addClass('ups') : "down" === n && f.removeClass('ups');
                display320()
            },
            offset: function() {
                return window.innerHeight
            }
        })
    }
</script>
<script async='async' src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script>
<script src="https://www.alteregomedia.org/files/js/gtags.js?v=1"></script>
<?php
if (is_category()) {
    $getcategories = explode(";", get_category_parents(get_category($cat)->term_id, false, ";", true));
    if (is_array($getcategories)) {
        array_pop($getcategories);
        $maincat = $getcategories[0];
    } else {
        $maincat = $getcategories;
    }
    if (count($getcategories) >= 2) {
        $subcat = $getcategories[1];
    } else {
        $subcat = "";
    }
} elseif (is_single()) {
    $getcatars = get_the_category();
    $pushcatar = array();
    $pushcatarparent = array();
    foreach ($getcatars as $getcatar) {
        if ($getcatar->category_parent != "0") {
            array_push($pushcatar, $getcatar->term_id);
        }
    }
    if (count($pushcatar) > 0) {
        $getcatego = explode(";", get_category_parents($pushcatar[0], false, ";", true));
        $maincat = $getcatego[0];
        $subcat = $getcatego[1];
    } else {
        foreach ($getcatars as $getcatar) {
            if ($getcatar->category_parent == "0") {
                array_push($pushcatarparent, $getcatar->slug);
            }
        }
        if (count($pushcatarparent) > 0) {
            $maincat = $pushcatarparent[0];
        } else {
            $maincat = "";
        }
        $subcat = "";
    }
}
?>
<script>
    var plink = "<?php echo home_url( $wp->request ); ?>";
    <?php if(is_single()) { ?>
    <?php
    $post_title = get_the_title();
    $post_summary = apply_filters( 'the_excerpt', get_the_excerpt() );
    $post_summary = str_replace('&quot;', '"', $post_summary);
    $post_summary = str_replace('"', '', $post_summary);
    $post_summary = str_replace('<p>', '', $post_summary);
    $post_summary = str_replace('</p>', '', $post_summary);
    $post_content = apply_filters('the_content',get_the_content());
    $post_tags = get_the_tags();
    ?>
    var title = '<?php echo htmlspecialchars($post_title, ENT_QUOTES, 'utf-8'); ?>';
    var summary = '<?php echo wp_strip_all_tags($post_summary); ?>';
    <?php
    $text = str_replace("'",'"',strip_tags( html_entity_decode( $post_content ) ) );
    $text = trim(preg_replace('/\s+/', ' ', $text));
    ?>
    var text = '<?php echo $text; ?>';
    <?php
    $thetags = array();
    $tags = "";
    if (!empty($post_tags)) {
        foreach ($post_tags as $onetag) {
            $thetags[] = $onetag->name;
        }
        $thetags = implode(" ", $thetags);
        $tags = str_replace("'", '"', strip_tags($thetags));
    ?>
    var tags = '<?php echo $tags; ?>';
    <?php } else { ?>
    var tags = '';
    <?php } ?>
    <?php } ?>
    try {setas()} catch (e) {var lineitemids = ''; var adserver = ''}
    googletag.cmd.push(function() {
        var header_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([670, 200], [[1000,250],[970, 250], [970, 90], [728, 90]]).build();
        var skin_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1100, 200], [1920, 1200]).build();
        var right_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([875, 200], [[300, 250], [300, 450], [300, 600]]).build();
        var over_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1000, 200], [1, 1]).build();
        var textlink_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([600, 200], ['fluid',[520, 40],[300, 250]]).build();
        var mapping_320 = googletag.sizeMapping().addSize([0, 0], [320, 50]).addSize([668, 0], []).build();
        var middle_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([300, 250], [[300, 250]]).addSize([300, 500], [[300, 600], [300, 250]]).addSize([668, 0], []).build();
        var bottom_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([300, 250], [[320, 50], [300, 250], [300, 450]]).addSize([300, 500], [[320, 50], [300, 250], [300, 450], [300, 600]]).addSize([668, 0], []).build();
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_320x50_top', [320, 50], '320x50_top').defineSizeMapping(mapping_320).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_mobile_300x250_middle', [[300, 600], [300, 250]], '300x250_middle').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_mobile_300x250_middle_home', [[300, 600], [300, 250]], '300x250_middle_home').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_320x50_bottom', [[320, 50], [300, 250], [300, 450], [300, 600]], '320x50_bottom').defineSizeMapping(bottom_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_320x50_bottom_2', [[320, 50], [300, 250], [300, 450], [300, 600]], '320x50_bottom_2').defineSizeMapping(bottom_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_1x1_over', [1, 1], '1x1_over').defineSizeMapping(over_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_970x90_top', [[970, 250], [970, 90], [728, 90], [1000, 250]], '970x90_top').defineSizeMapping(header_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_r1', [[300, 250], [300, 450], [300, 600]], '300x250_r1').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_r2', [[300, 250], [300, 450], [300, 600]], '300x250_r2').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_r3', [[300, 250], [300, 450], [300, 600]], '300x250_r3').defineSizeMapping(right_mapping).addService(googletag.pubads());
        <?php /* if(is_archive() || is_singular('post')) { ?>
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_1x1_out_1', [1920, 1200], '1x1_out').defineSizeMapping(skin_mapping).addService(googletag.pubads());
        <?php } */ ?>
        <?php if(is_singular('post')){ ?>
        // googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_m1', [[300, 250], [300, 450], [300, 600]], '300x250_m1').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_m1', [[300, 250], [520, 40]], '300x250_m1').defineSizeMapping(textlink_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_m2', [[300, 250], [520, 40]], '300x250_m2').defineSizeMapping(textlink_mapping).addService(googletag.pubads());  
        googletag.defineSlot('/28509845/tovima_group/tovima_Mobile_300x250_middle_2', [[300, 600], [300, 250]], '300x250_middle_2').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_mobile_300x250_middle_3', [[300, 600], [300, 250]], '300x250_middle_3').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        
        <?php } ?>
        var islot = googletag.defineOutOfPageSlot('/28509845/tovima_group/tovima_interstitial', googletag.enums.OutOfPageFormat.INTERSTITIAL);
        if (islot) {islot.addService(googletag.pubads());}
        <?php if(is_single()){ ?>
        googletag.defineSlot('/28509845/tovima_group/tovima_textlink_1', [520, 40], 'textlink_1').defineSizeMapping(textlink_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_textlink_2', [520, 40], 'textlink_2').defineSizeMapping(textlink_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_textlink_3', [520, 40], 'textlink_3').defineSizeMapping(textlink_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_640x360_overlay', [640, 360], '640x360').addService(googletag.companionAds()).addService(googletag.pubads());
        <?php } ?>
        googletag.pubads().setTargeting('AdServer', adserver);
        googletag.pubads().setTargeting('Item_Id', '<?php echo $varpostid; ?>');
        <?php if( is_404() ) { ?>
        googletag.pubads().setTargeting('Category', 'service_page');
        googletag.pubads().setTargeting('SubCategory', '404');
        <?php } elseif(is_category() || is_single() ) { ?>
        googletag.pubads().setTargeting('Category', '<?php echo $maincat; ?>');
        googletag.pubads().setTargeting('SubCategory', '<?php echo $subcat; ?>');
        <?php } elseif(is_tag()) { ?>
        googletag.pubads().setTargeting('Category', 'tags');
        googletag.pubads().setTargeting('SubCategory', '<?php echo $tag->slug; ?>');
        <?php } ?>
        <?php
        if (is_single()) {
            global $post;
            if (has_tag()) {
                $restags = array();
                foreach (get_the_tags() as $resu) {
                    $restags[] = "'".str_replace("'", '`', str_replace('"', '`', $resu->name))."'";
                    $restags1[] = str_replace("'", "", $resu->name);
                }
        ?>
        googletag.pubads().setTargeting('Tags', [<?php echo implode(',',$restags); ?>]);
        <?php
            }
        }
        ?>
        googletag.pubads().setTargeting('Version', 'English');        
        googletag.pubads().setTargeting('Skin', skinSize);
        googletag.pubads().setTargeting('Platform', platform);
        <?php $postl = wordcount(strip_tags ( $post->post_content)); ?>
<?php if ( $postl < 301 ) { $postlengh = "small"; } elseif ( $postl > 301 && $postl < 600 ) { $postlengh = "medium"; } elseif ( $postl > 601 ) { $postlengh = "large"; } ?>
        googletag.pubads().setTargeting('Length', '<?php echo $postlengh; ?>');
        googletag.pubads().collapseEmptyDivs(true);
        
        googletag.pubads().enableVideoAds();
        googletag.pubads().addEventListener('slotRenderEnded', function(event) {
        // if(event.slot.getSlotElementId() === '1x1_out' && !event.isEmpty ){ document.querySelector('body').classList.add('fxskin'); }
        if (event.slot.getSlotElementId() === '300x250_middle') {ways();}
        if (event.slot.getSlotElementId() === '300x250_r1' || event.slot.getSlotElementId() === '300x250_middle' || event.slot.getSlotElementId() === '300x250_middle_home') 
        {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300();}};
        if (event.slot.getSlotElementId() === '300x250_middle_2') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("300x250_middle_2");}};
        if (event.slot.getSlotElementId() === '300x250_middle_3') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("300x250_middle_3");}};
        if (event.slot.getSlotElementId() === '320x50_bottom') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("320x50_bottom");}};
        if (event.slot.getSlotElementId() === '320x50_bottom_2') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("320x50_bottom_2");}};
        if (event.slot.getSlotElementId() === '320x50_top')  {if (!event.isEmpty && mlineitemids.includes(event.lineItemId, 0) || !event.isEmpty && morderids.includes(event.campaignId, 0)) {pgm320();}}
        if (event.slot.getSlotElementId() === '970x90_top')  {if (!event.isEmpty && xlineitemids.includes(event.lineItemId, 0) || !event.isEmpty && xorderids.includes(event.campaignId, 0)) {pgm970();}}
        
        
        if(event.slot.getSlotElementId() === "970x90_top" && !event.isEmpty) {
        /*
          const TopBillboard = document.getElementById('970x90_top').offsetHeight;
//           stickyBilboard(document.getElementById('970x90_top'));
          const varbody =  document.querySelector('.tovimagr');
          varbody.style.paddingTop = ''+TopBillboard+'px';
          */
            
            const stickyToggleHeight = document.getElementById('dk-ad-sticky-toggle').offsetHeight;
            console.log ('ThestickyToggleHeight:', stickyToggleHeight);
            const checkAd = function() {

                const adCheckedElement = $('.dk-ad-checker-section');
                adCheckedElement.each(function(){
                    let desktopAdElement = $(this).find('.dk-ad-content-check-dskt');
                    let adCheckDesktop = $(this).find('.dk-ad-content-check-dskt').length;

                    if (adCheckDesktop === 0 ){
                        $(this).hide();
                    }
                });

            };

            checkAd();

            if($('.dk-ad-checker-section:not(.dk-ad-checker--static) .dk-ad-sticky-toggle').is(':visible')){
                $('.vimasite').css('margin-top', stickyToggleHeight);
                $('.dk-ad-sticky-toggle').css('position', 'fixed');
                $('.dk-ad-sticky-toggle').css('top', '0');
                $('.dk-ad-close-cta').show();
        //        $('.dk-ad-sticky-toggle').css('transform', 'translateY(0px)');
            };

            if($('.dk-ad-checker--static .dk-ad-sticky-toggle').is(':visible')){
                $('.dk-ad-close-cta').show();
            };

            $('.dk-ad-close-stickt-cta').click(function(){
                $(this).closest('.dk-mobile-ad-sticky').fadeOut();
            });


            let buttonClicked = false; 
            $('.dk-ad-close-cta').click(function(){
                // $('.dk-ad-sticky-toggle').css('transform', 'translateY(-250px)');

                if($('.dk-ad-checker-section').hasClass('dk-ad-checker--static')){
                    $(this).closest('.dk-ad-checker--static').fadeOut();
                } else {
                    $('.dk-ad-sticky-toggle').css('transform', 'translateY(-'+stickyToggleHeight+'px)');
                } 

                $('.vimasite').css('margin-top','0');
                buttonClicked = true;
            });


            $(window).scroll(function() {
                if (buttonClicked == false){
                    const scrollPosition = $(window).scrollTop();
                    const stopPosition = 700;
                    const stickyElement = $('.dk-ad-sticky-toggle');

                    if (scrollPosition > stopPosition) {
                    //    stickyElement.css('transform', 'translateY(-250px)');
                      stickyElement.css('transform', 'translateY(-'+stickyToggleHeight+'px)');
                    } else {
                        stickyElement.css('transform', 'translateY(0px)');
                    }
                }
            });
            
        }
          
        });
        googletag.pubads().setCentering(true);
        googletag.enableServices();
        googletag.display(islot);
      
      
    });

    var invideoslot = '/28509845/tovima_group/tovima_640vast';
    var randomNumber=Math.floor(10000000000 + Math.random() * 90000000000);
    <?php if(is_tag()) { ?>
    var optionsString = 'Category=tags&SubCategory=<?php echo $tag->slug; ?>&Item_Id=<?php echo $varpostid; ?>&Skin=' + skinSize + '&Platform=' + platform + '&AdServer=' + adserver;
    var optionsUri = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480%7C400x300&ad_type=audio_video&iu=/28509845/tovima_group/tovima_640vast&impl=s&gdfp_req=1&vpmute=1&env=vp&output=vast&unviewed_position_start=1&url=' + encodeURIComponent(plink) + '&description_url=' + encodeURIComponent(plink) +'&correlator=' + randomNumber + '&ciu_szs=640x360&cust_params=' + encodeURIComponent(optionsString);
    <?php } else { ?>
    var optionsString = 'Category=<?php echo $maincat; ?>&SubCategory=<?php echo $subcat; ?>&Item_Id=<?php echo $varpostid; ?>&Tags=<?php echo (isset($restags1) && count($restags1)) ? implode(',', $restags1) : ''; ?>&Length=<?php echo $postlengh; ?>&Skin=' + skinSize + '&Platform=' + platform + '&AdServer=' + adserver;
    var optionsUri = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480%7C400x300&ad_type=audio_video&iu=/28509845/tovima_group/tovima_640vast&impl=s&gdfp_req=1&vpmute=1&env=vp&output=vast&unviewed_position_start=1&url=' + encodeURIComponent(plink) + '&description_url=' + encodeURIComponent(plink) +'&correlator=' + randomNumber + '&ciu_szs=640x360&cust_params=' + encodeURIComponent(optionsString);
    <?php } ?>

    var options = {
        id: 'content_video',
        adTagUrl: optionsUri
    };
</script>

<?php } ?>