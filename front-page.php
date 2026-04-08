<?php get_header(); ?>
<div class = "container">
    <?php echo do_shortcode('[fitness_promo]'); ?>

    <section class="hero">
        <h1>Fresh, Macro Friendly Meals Delivered to</h1>
        <P>Fuel your workout with Landons expert crafted nutriion.</p>
        
    </section>

    <section class="featured-section">
        <h2>Featured Meals</h2>
        <?php echo do_shortcode('[featured_products limit="3" columns="3"]'); ?>
        <p style="text-align: center; margin-top: 20px;"><a href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>" class="button">View All Meals</a>
    </p>
    </section>
</div>
<?php get_footer(); ?>