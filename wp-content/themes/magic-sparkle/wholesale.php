<?php get_header(); /*Template Name: wholesale*/ ?>

<section class="tradecustomformSection">
    <div class="wrapper">
        <div class="formBox">
            <div class="backcta">
                <a href="<?php echo get_field('back_cta_link'); ?>" class="colorW font18 fontW400">< <?php echo get_field('back_cta_text'); ?></a>
            </div>
            <div class="tradecustomerInfo">
                <h2 class="colorW playfair font60"><?php the_title(); ?></h2>
                <p class="colorW font18 fontW300"><?php echo get_field('wholesale_description'); ?></p>
            </div>
			<?php echo get_field('form_box'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>