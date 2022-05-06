<?php get_header(); /*Template Name: Gallery*/ ?>

<section class="gallerySectionPage">
	<div class="wrapper">
		<div class="secHeading">
			<h1 class="font60 fontW400 playfair">The Sparkling Gallery</h1>
		</div>
		<div class="galleryContent">
			<div class="button-group filters-button-group">
				<button class="button font24 fontW300 is-checked" data-filter="*">ALL</button>
				<button class="button font24 fontW300" data-filter=".images">IMAGES</button>
				<button class="button font24 fontW300" data-filter=".videos">VIDEOS</button>
			</div>
			<section id="grid-container" class="transitions-enabled fluid masonry js-masonry grid">
				<?php if (have_rows('gallery_content')) : ?>
					<?php while (have_rows('gallery_content')) : the_row(); ?>
						<?php if (get_row_layout() == 'image_box') : ?>
				       
							<article class="images">
								<a data-fancybox="images" href="<?php the_sub_field('big_image'); ?>">
									<?php $bigimage = get_sub_field('big_image');
									if( !empty( $bigimage ) ): ?>
										<img src="<?php echo esc_url($bigimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bigimage['alt']); ?>"  class="img-responsive"  />
									<?php endif; ?>
								</a>
							</article>

						<?php elseif (get_row_layout() == 'video_box') : ?>
							<article class="videos">
								<a data-fancybox="video-gallery" href="<?php the_sub_field('video_link'); ?>">
									<?php $thumbnailimage= get_sub_field('thumbnail_image');
									if( !empty( $thumbnailimage ) ): ?>
										<img src="<?php echo esc_url($thumbnailimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($thumbnailimage['alt']); ?>"  class="img-responsive"  />
									<?php endif; ?>
								</a>
							</article>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</section>
		</div>
	</div>
</section>

<?php get_footer(); ?>