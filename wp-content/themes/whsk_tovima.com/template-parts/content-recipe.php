<?php
/*
 * Template Name: Recipe Post Template
 * Template Post Type: post
 */
get_header();  
?>

<main id="site-content" class="recipe-template" role="main">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            $post_id = get_the_ID();

            $field_groups = acf_get_field_groups(array('post_id' => $post_id));

            
            $info_fields = [];
            $recipe_fields = [];

            
            foreach ($field_groups as $field_group) {
                if ($field_group['title'] == 'Info') {
                    $info_fields = acf_get_fields($field_group['ID']);
                } elseif ($field_group['title'] == 'Recipe Fields') {
                    $recipe_fields = acf_get_fields($field_group['ID']);
                }
            }

            
            $prep_time = get_field('prep_time') ?? 'Δεν είναι διαθέσιμο'; 
            $cook_time = get_field('cook_time') ?? 'Δεν είναι διαθέσιμο'; 
            $difficulty = get_field('difficulty') ?? '0'; 
            $ingredients = get_field('ingredients') ?? ''; 
            $steps = get_field('steps') ?? [];

            $description = get_the_excerpt();
        ?>

<div class="container article-layout">
    <div class="bcooking">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/B_Cooking.svg" alt="Cooking">
    </div>

    <div class="article-content">
        <div class="article-text">
            <h1 class="recipe-title"><?php the_title(); ?></h1>
            <p class="recipe-description"><?php echo esc_html($description); ?></p>
            <div class="recipe-author">
            <img src="https://via.placeholder.com/150" alt="Placeholder Image">

                <p>Αργυρώ Μπαρμπαρίγου</p>
            </div>
        </div>

        <div class="article-image">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
            <?php endif; ?>

            
        </div>
    </div>

</div>

<hr class="custom-divider">


<div class="recipe-grid">

    <div class="recipe-sidebar">
        <div class="recipe-info">
        <div class="info-divider"></div>
            <h2 class="info-title">Info</h2>
            <div class="info-dividergray"></div>
            <p class="info-text"><strong>Χρόνος Προετοιμασίας:</strong> <?php echo esc_html($prep_time); ?> </p>
            <p class="info-text"><strong>Χρόνος Μαγειρέματος:</strong> <?php echo esc_html($cook_time); ?> </p>
            <p class="info-text"><strong>Βαθμός Δυσκολίας:</strong> 
                <?php 
                $difficulty_value = intval($difficulty);
                
                if ($difficulty_value > 0) {
                    for ($i = 0; $i < $difficulty_value; $i++) {
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/knife.svg" alt="Knife Icon" class="knife-icon">';
                    }
                } else {
                    echo 'Δεν είναι Διαθέσιμο';
                }
                ?>
            </p>
            <div class="recipe-share">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/share.svg" alt="Share Icon">
            </div>
        </div>

        <div class="recipe-ingredients">
        <div class="ingr-divider"></div>
            <h2 class="ingredients-title">Υλικά</h2>
            <?php if( !empty($ingredients) ): ?>
                <div class="ingredients-list">
                    <?php echo wp_kses_post($ingredients); ?>
                </div>
            <?php else : ?>
                <p class="info-text">Δεν υπάρχουν υλικά.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="recipe-steps">
    <div class="steps-divider"></div>
        <h2 class="steps-title">Εκτέλεση</h2>
        
        <?php if( have_rows('steps') ): ?>
            <ol>
                <?php while( have_rows('steps') ): the_row(); ?>
                    <li><?php the_sub_field('step'); ?></li>
                <?php endwhile; ?>
            </ol>
        <?php else : ?>
            <p class="info-text">Δεν υπάρχουν διαθέσιμα βήματα εκτέλεσης.</p>
        <?php endif; ?>
    </div>

    <div class="recipe-placeholder"></div>
</div>

        <?php }
    } ?>
</main>

<?php get_footer(); ?>
