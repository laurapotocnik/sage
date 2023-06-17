<div class="">
    <p class=" font-bold"><?php echo get_field("naslov_pravi"); ?></p>
</div>

<div>
<?php

// Check rows existexists.
if( have_rows('barve') ):

    // Loop through rows.
    while( have_rows('barve') ) : the_row();

        // Load sub field value.
        $textbarv = get_sub_field('barve_test');
        $image = get_sub_field('slika_barve');

        // Do something...
        ?><p><?php echo $textbarv;?></p><?php

        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
</div>
