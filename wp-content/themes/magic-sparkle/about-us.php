<?php get_header(); /*Template Name: About Us*/ ?>

<section class="aboutusBanner">
	<?php if( have_rows('about_intro_section') ): ?>
		<?php while( have_rows('about_intro_section') ): the_row(); ?>
			<div class="wrapper">
				<div class="aboutusBannerContent">
					<div class="secHeading">
						<h1 class="font60 colorGy fontW600 playfair"><?php echo get_sub_field('section_heading'); ?></h1>
					</div>
					<p class="font18 colorGy"><?php echo get_sub_field('section_description'); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
	
<section class="decorationSectionOne">
	<?php if( have_rows('decoration_section_one') ): ?>
		<?php while( have_rows('decoration_section_one') ): the_row(); ?>
			<div class="decorationSectionContent">
				<div class="decorationOneImg">
					<?php $decorationimage1 = get_sub_field('section_image');
                        if( !empty( $decorationimage1 ) ): ?>
                        <img src="<?php echo esc_url($decorationimage1['url']); ?>" loading="lazy" alt="<?php echo esc_attr($decorationimage1['alt']); ?>" />
                    <?php endif; ?>
					<!-- <img src="<?php bloginfo('template_directory'); ?>/images/aboutOne.png" alt=""> -->
				</div>
				<div class="decorationOneContent">
					<h2 class="font60 fontW500 colorW playfair"><?php echo get_sub_field('section_heading'); ?></h2>
					<p class="colorW font18"><?php echo get_sub_field('section_description'); ?></p>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="aboutusHighlightSection">
	<div class="wrapper">
		<div class="aboutusHighlightContent">
			<p class="font40 colorB fontweight400 playfair"><?php echo get_field('about_highlight_section'); ?></p>
		</div>
	</div>
</section>

<section class="decorationSectionOne">
	<?php if( have_rows('decoration_section_two') ): ?>
		<?php while( have_rows('decoration_section_two') ): the_row(); ?>
			<div class="decorationSectionContent">
				<div class="decorationOneContent">
					<h2 class="font60 fontW500 colorW playfair"><?php echo get_sub_field('section_heading'); ?></h2>
					<p class="colorW font18"><?php echo get_sub_field('section_description'); ?></p>
				</div>
				<div class="decorationOneImg">
					<?php $decorationimage2 = get_sub_field('section_image');
                        if( !empty( $decorationimage2 ) ): ?>
                        <img src="<?php echo esc_url($decorationimage2['url']); ?>" loading="lazy" alt="<?php echo esc_attr($decorationimage2['alt']); ?>" />
                    <?php endif; ?>
					<!-- <img src="<?php bloginfo('template_directory'); ?>/images/aboutTwo.png" alt=""> -->
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="makeDifferenceSec">
	<?php if( have_rows('making_difference_section') ): ?>
		<?php while( have_rows('making_difference_section') ): the_row(); ?>
			<div class="wrapper">
				<div class="makeDifferenceContent">
					<div class="secHeading">
						<h2 class="colorGy fontW500 font60 playfair"><?php echo get_sub_field('section_heading'); ?></h2>
					</div>
					<div class="makeDifferenceDetails">
						<div class="makeDifferenceIcons">
							<ul>
								<?php if( have_rows('icons_section') ): ?>
									<?php while( have_rows('icons_section') ): the_row(); ?>
										<li>
											<?php $iconsimage = get_sub_field('icon_image');
						                        if( !empty( $iconsimage ) ): ?>
						                        <img src="<?php echo esc_url($iconsimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($iconsimage['alt']); ?>" />
						                    <?php endif; ?>
											<!-- <img src="<?php bloginfo('template_directory'); ?>/images/edible-black-icon.png" alt=""> -->
											<p class="rubik fontW400 colorGy"><?php echo get_sub_field('icon_text'); ?></p>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
						<div class="makeDifferenceInfo">
							<p class="font18"><?php echo get_sub_field('section_description'); ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<?php get_footer(); ?>