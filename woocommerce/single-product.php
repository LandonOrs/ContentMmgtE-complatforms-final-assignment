<?php

if ( !defined( 'ABSOLUTE_PATH' ) ) {
    exit; // Exit if accessed directly
}
// Ensure WooCommerce is active
get_header(); ?>
<div class="container">
    <?php
    while ( have_posts() ) :
        the_post();
        wc_get_template_part( 'content', 'single-product' );
    endwhile; // End of the loop.
    ?>
</div>
<?php get_footer(); ?>