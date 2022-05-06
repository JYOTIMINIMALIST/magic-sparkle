<?php get_header(); /*Template Name: Trade-customers*/ ?>

<section class="tradecustomerSection">
	<div class="wrapper">
		<div class="secHeading">
			<h1 class="colorW playfair font60"><?php the_title(); ?></h1>
		</div>
		<div class="tradecustomerBox">
			<div class="box-content">
				<?php if( have_rows('retail') ): ?>
					<?php while( have_rows('retail') ): the_row(); ?>
						<h2 class="colorW playfair font60"><?php echo get_sub_field('retail_heading'); ?></h2>
						<p class="colorW font18 fontW300"><?php echo get_sub_field('retail_description'); ?></p>
						<a href="<?php echo get_sub_field('cta_link'); ?>" class="font20 colorW sparkley"><?php echo get_sub_field('retail_cta'); ?></a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="box-content">
				<?php if( have_rows('wholesale') ): ?>
					<?php while( have_rows('wholesale') ): the_row(); ?>
						<h2 class="colorW playfair font60"><?php echo get_sub_field('wholesale_heading'); ?></h2>
						<p class="colorW font18 fontW300"><?php echo get_sub_field('wholesale_description'); ?></p>
						<a href="<?php echo get_sub_field('cta_link'); ?>" class="font20 colorW sparkley"><?php echo get_sub_field('wholesale_cta'); ?></a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>