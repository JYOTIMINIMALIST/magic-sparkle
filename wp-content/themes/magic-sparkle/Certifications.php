<?php get_header(); /*Template Name: Certifications*/ ?>

<section class="certificateSection">
	<div class="wrapper">
		<div class="secHeading">
			<h1 class="font60 fontW400 playfair"><?php echo get_field('section_heading'); ?></h1>
		</div>
		<div class="certificateContent">
			<?php if( have_rows('certifications_content') ): ?>
				<?php while( have_rows('certifications_content') ): the_row(); ?>
					<div class="certificateData" id="<?php echo get_sub_field('certify_section_id'); ?>">
						<div class="certificateLogo">
							<?php $certificateimage = get_sub_field('certificate_logo');
		                        if( !empty( $certificateimage ) ): ?>
		                        <img src="<?php echo esc_url($certificateimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($certificateimage['alt']); ?>" />
		                    <?php endif; ?>
						</div>
						<div class="certificateInfo">
							<h3 class="font24 fontW400"><?php echo get_sub_field('certificate_heading'); ?></h3>
							<p class="font18 fontW300"><?php echo get_sub_field('certificate_description'); ?> <a href="<?php echo get_sub_field('cta_link'); ?>" target="_blank" class="colorGy"><?php echo get_sub_field('cta_text'); ?></a></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<script>
	$('html,body').animate({
		scrollTop: $(window.location.hash).offset().top - 100
	});
</script>