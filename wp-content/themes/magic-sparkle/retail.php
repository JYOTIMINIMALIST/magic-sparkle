<?php get_header(); /*Template Name: retail*/ ?>

<section class="tradecustomformSection">
    <div class="wrapper">
        <div class="formBox">
            <div class="backcta">
                <a href="<?php echo get_site_url(); ?>/trade-customers/" class="colorW font18 fontW400"><?php echo get_field('back_button_cta'); ?></a>
            </div>
            <div class="tradecustomerInfo">
                <h2 class="colorW playfair font60">Retail</h2>
                <p class="colorW font18 fontW300"><?php echo get_field('retail_description'); ?></p>
            </div>
            <?php echo do_shortcode('[hubspot type=form portal=4324136 id=e711fc79-c81c-4670-b3cd-16d3b1e3d708]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>