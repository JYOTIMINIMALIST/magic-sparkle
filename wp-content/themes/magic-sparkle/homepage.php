<?php get_header(); /*Template Name: Homepage*/ ?>

<style type="text/css">
	.loaderScreen{z-index: 111;position: fixed;top: 0;left: 0;width: 100%;height: 100vh;opacity: 0;}
	.loaderHolder{display: flex; align-items: center; justify-content: center; height: 100%;background: linear-gradient(287.56deg, #33154D 0%, #000132 100%);}
	.loaderHolder #loaderAnim{width: 20%;position: absolute;top: 0;bottom: 0;left: 0;right: 0;margin: 0 auto;}
	.progress_bar {margin: auto; width: 300px; max-width:80%; height: 5px; box-shadow: 0px 0px 4px #ffffffd1; border-radius: 20px; position: absolute; overflow: hidden;bottom: 10%;}
	.progress_bar:before {content: ''; width: 200%; height: 100%; position: absolute; animation: progress-anime 5s ease-out infinite; background: linear-gradient(to right, #fff 0%,#fff 50%,rgba(255,255,255,0.3) 50%,rgba(255,255,255,0.3) 100%); }
	@keyframes progress-anime {
    	0% {left: -100%;}
    	75% {left: -5%;}
    	85% {left: -5%;}
    	95% {left: 0;}
	}
</style>

<div class="loaderScreen">
    <div class="loaderHolder">
        <div id="loaderAnim"></div>
        <div class="progress_bar"></div>
    </div>
</div>

<div id="fullpage">
	<div class="section BannerSection" id="section0">
		<div class="vimeo-wrapper">
			<iframe src="https://player.vimeo.com/video/637417338?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="deskVideo"></iframe>
			<iframe src="https://player.vimeo.com/video/649488724?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="mobVideo"></iframe>
			<div class="videoOverlay"></div>
		</div>
		<div class="wrapper">
			<div class="bannerHeading">
				<h1 class="font95 playfair fontW300 colorW">Purveyors of Edible Jewels & Edible Glitter</h1>
			</div>
			<div class="bannerIconSec">
				<ul>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/edible-icon-new.png" alt="">
						<p class="fontW400 colorW">100% Edible</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/naturalcolor-icon-new.png" alt="">
						<p class="fontW400 colorW">Natural Colours</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/handmade-icon-new.png" alt="">
						<p class="fontW400 colorW">Hand-made</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/certified-icon-new.png" alt="">
						<p class="fontW400 colorW">Vegan Certified</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="videoPopup">
			<a data-fancybox="" href="https://player.vimeo.com/video/637416567?" class="bannercur"></a>
			<img src="https://magicsparkles.com/wp-content/uploads/2021/11/play-cursor.png" alt="Cursor" class="bannercursor"/>
		</div>
		<div class="downArrow">
			<a href="#our-magical-range">
				<img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.png" alt="" class="floating">
			</a>
		</div>
	</div>
	<div class="section productSection" id="section1">
		<div class="wrapper">
			<?php if( have_rows('our_magical_range') ): ?>
				<?php while( have_rows('our_magical_range') ): the_row(); ?>
					<div class="secHeadinng">
						<h2 class="font60 playfair fontW300"><?php echo get_sub_field('section_heading'); ?></h2>
						<p class="font18 fontW300"><?php echo get_sub_field('section_heading_description'); ?></p>
					</div>
					<div class="productContent">
						<?php if( have_rows('our_magical_range_content') ): ?>
							<?php while( have_rows('our_magical_range_content') ): the_row(); ?>
								<div class="productInfo">
									<div class="productImg">
										<a href="<?php echo get_sub_field('cta_link'); ?>">
											<?php $productimage = get_sub_field('product_image');
												if( !empty( $productimage ) ): ?>
												<img src="<?php echo esc_url($productimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($productimage['alt']); ?>" />
											<?php endif; ?>
										</a>
									</div>
									<div class="productDetail">
										<h3 class="font24 fontW600"><?php echo get_sub_field('product_numbers'); ?></h3>
										<p class="font18 fontW300"><?php echo get_sub_field('product_heading'); ?></p>
										<a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaTwo font18 fontW400 sparkley"><?php echo get_sub_field('cta_text'); ?></a>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="section howtobuySection" id="section2">
		<div class="wrapper">
			<?php if( have_rows('how_to_buy') ): ?>
				<?php while( have_rows('how_to_buy') ): the_row(); ?>
					<div class="secHeadinng">
						<h2 class="font60 playfair fontW300 colorW"><?php echo get_sub_field('section_heading'); ?></h2>
					</div>
					<div class="howtobuyContent">
						<?php if( have_rows('how_to_buy_content') ): ?>
							<?php while( have_rows('how_to_buy_content') ): the_row(); ?>
								<div class="howtobuyInfo">
									<div class="howtobuyInfoBox">
										<?php $howtobuyicon = get_sub_field('icon');
											if( !empty( $howtobuyicon ) ): ?>
											<img src="<?php echo esc_url($howtobuyicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($howtobuyicon['alt']); ?>" />
										<?php endif; ?>
										<h3 class="font24 fontW500 colorW"><?php echo get_sub_field('box_heading'); ?></h3>
										<a href="<?php echo get_sub_field('box_link'); ?>">
											<div class="howtobuyDetail">
												<p class="font14 colorW fontW300"><?php echo get_sub_field('box_description'); ?></p>
											</div>
											<div class="howtobuyLink">
												<img src="<?php bloginfo('template_directory'); ?>/images/link-arrow.png" alt="">
											</div>
										</a>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="howtobuyContentMob">
						<?php if( have_rows('how_to_buy_content') ): ?>
							<?php while( have_rows('how_to_buy_content') ): the_row(); ?>
								<div class="howtobuyInfoMob">
									<a href="<?php echo get_sub_field('box_link'); ?>">
										<?php $howtobuyicon = get_sub_field('icon');
											if( !empty( $howtobuyicon ) ): ?>
											<img src="<?php echo esc_url($howtobuyicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($howtobuyicon['alt']); ?>" />
										<?php endif; ?>
										<h3 class="font24 fontW500 colorW"><?php echo get_sub_field('box_heading'); ?></h3>
										<div class="howtobuyDetail">
											<p class="font16 colorW fontW300"><?php echo get_sub_field('box_description'); ?></p>
										</div>
										<div class="howtobuyLink">
											<img src="<?php bloginfo('template_directory'); ?>/images/link-arrow.png" alt="">
										</div>
									</a>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="mapBox">
			<img src="<?php bloginfo('template_directory'); ?>/images/map.svg" alt="">
		</div>
	</div>
	<div class="section testimonialSection" id="section3">
		<div class="wrapper">
			<?php if( have_rows('our_ambassadors') ): ?>
				<?php while( have_rows('our_ambassadors') ): the_row(); ?>
					<div class="secHeadinng">
						<h2 class="font60 playfair fontW300"><?php echo get_sub_field('section_heading'); ?></h2>
					</div>
					<div class="testimonialContent">
						<div class="testimonialSlider">
							<?php if( have_rows('our_ambassadors_content') ): ?>
		                      	<?php while( have_rows('our_ambassadors_content') ): the_row();?>
		                        	<?php if( get_row_layout() == 'video_testimonial' ): ?>
		                        		<div class="testimonialInfo">
											<div class="testimonialVideo">
												<div class="testimonialVideoImg" style="background: url(<?php echo get_sub_field('video_thumbnail'); ?>) center center no-repeat;background-size:cover;">
													<div class="videoOverlay"></div>
												</div>
												<div class="videoPlay">
													<a data-fancybox="" href="<?php echo get_sub_field('video_link'); ?>">
														<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-play.png" alt="">
													</a>
												</div>
												<div class="testimonialVideoInfo">
													<div class="videoDetails">
														<div class="videoPerThumb">
															<?php $videoprofile = get_sub_field('video_profile_thumb');
																if( !empty( $videoprofile ) ): ?>
																<img src="<?php echo esc_url($videoprofile['url']); ?>" loading="lazy" alt="<?php echo esc_attr($videoprofile['alt']); ?>" />
															<?php endif; ?>
														</div>
														<div class="videoPerDetails">
															<a href="<?php echo get_sub_field('person_link'); ?>" target="_blank">
																<h3 class="font24 colorW fontW600"><?php echo get_sub_field('person_name'); ?></h3>
																<p class="font18 colorW"><?php echo get_sub_field('person_details'); ?></p>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>

		                        	<?php elseif( get_row_layout() == 'image_testimonial' ): ?>
		                        		<div class="testimonialInfo">
											<div class="testimonialwithImg">
												<div class="testimonialImg">
													<?php $imagetestimonial = get_sub_field('testimonial_image');
														if( !empty( $imagetestimonial ) ): ?>
														<img src="<?php echo esc_url($imagetestimonial['url']); ?>" loading="lazy" alt="<?php echo esc_attr($imagetestimonial['alt']); ?>" />
													<?php endif; ?>
												</div>
												<div class="testimonialImgInfo">
													<img src="<?php bloginfo('template_directory'); ?>/images/quote-icon.png" alt="">
													<h3 class="font20 fontW500"><?php echo get_sub_field('testimonial_content'); ?></h3>
													<div class="testimonialCustomer">
														<p class="font24 fontW500"><a href="<?php echo get_sub_field('profile_person_link'); ?>" target="_blank" class="fontW500"><?php echo get_sub_field('profile_person_name'); ?></a></p>
														<p class="font18 fontW300"><a href="<?php echo get_sub_field('profile_person_link'); ?>" target="_blank"><?php echo get_sub_field('profile_person_details'); ?></a></p>
													</div>
												</div>
											</div>
										</div>
		                          
		                        	<?php elseif( get_row_layout() == 'text_testimonial' ): ?>
		                        		<div class="testimonialInfo">
											<div class="testimonialText">
												<div class="testimonialTextInfo">
													<img src="<?php bloginfo('template_directory'); ?>/images/quote-icon.png" alt="">
													<h3 class="font20 fontW600"><?php echo get_sub_field('testimonial_content'); ?></h3>
													<p class="font24 fontW500"><?php echo get_sub_field('profile_person_name'); ?></p>
													<p class="font18 fontW300"><?php echo get_sub_field('profile_person_details'); ?></p>
												</div>
											</div>
										</div>
		                        	<?php endif;?>
		                      	<?php endwhile; ?>
		                    <?php endif; ?>
						</div>
						<div class="sliderArrow">
                    		<button class="back testimonialSliderBack">
                        		<img src="<?php bloginfo('template_directory'); ?>/images/left-arrow-black.png" alt="">
                    		</button>
                    		<button class="forward testimonialSliderForward">
                        		<img src="<?php bloginfo('template_directory'); ?>/images/right-arrow-black.png" alt="">
                    		</button>
                		</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="section mediablogSection" id="section4">
		<?php if( have_rows('media_blogs_section') ): ?>
			<?php while( have_rows('media_blogs_section') ): the_row(); ?>
				<div class="wrapper">
					<div class="secHeadinng">
						<h2 class="font60 playfair fontW300 colorW"><?php echo get_sub_field('section_heading'); ?></h2>
						<p class="font18 fontW300 colorW"><?php echo get_sub_field('section_description'); ?></p>
					</div>
					<!-- <div style="margin-top: 25px"><h2 class="font95 playfair fontW300 colorW text-center">Coming Soon</h2></div> -->
					<div class="mediablogSec">
						<div class="mediablogSlider">
							<?php
		            			$args = array('post_type' => 'post','posts_per_page' => 5,'order' => 'DESC');
		            			$the_query = new WP_Query( $args );
		            			while ( $the_query->have_posts() ) : $the_query->the_post();
		      				?>
								
								<div class="mediablogContent">
									<a href="<?php the_permalink(''); ?>">
									<div class="mediablogImg">
										<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
									</div>
									<div class="mediablogInfo">
										<h3 class="colorW fontW700 font24"><?php the_title(); ?></h3>
										<?php $content = wp_strip_all_tags(get_the_content()); echo '<p class="font16 colorW">' . substr($content, 0, 100) . '...</p>'; ?>
										<!-- <p class="font16 colorW">The Best 8 Edible Glitter Cocktails The Elixir Edible Dust™ ...</p> -->
										<a href="<?php the_permalink(''); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/link-icon.png" alt=""></a>
									</div></a>
									</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
						<div class="sliderArrow">
		                    <button class="back mediablogSliderBack">
		                        <img src="<?php bloginfo('template_directory'); ?>/images/left-arrow-white.png" alt="">
		                    </button>
		                    <button class="forward mediablogSliderForward">
		                        <img src="<?php bloginfo('template_directory'); ?>/images/right-arrow-white.png" alt="">
		                    </button>
		                </div>
					</div>
					<div class="mediaInfoLink">
						<a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaOne font18 fontW400 sparkley"><?php echo get_sub_field('cta_text'); ?></a>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="section certifiedSection" id="section5">
		<div class="wrapper">
			<?php if( have_rows('certified_section') ): ?>
				<?php while( have_rows('certified_section') ): the_row(); ?>
					<div class="secHeadinng">
						<h2 class="font60 playfair fontW300"><?php echo get_sub_field('section_heading'); ?></h2>
		<!-- 				<p class="font18 fontW300"><?php echo get_sub_field('section_heading_text'); ?></p> -->
					</div>
					<div class="certifiedContent">
						<div class="certifiedInfo">
							<?php if( have_rows('certified_content') ): ?>
								<?php while( have_rows('certified_content') ): the_row(); ?>
									<div class="certifiedLogobox">
										<a href="<?php echo get_sub_field('certified_link'); ?>">
											<?php $certifiedlogo = get_sub_field('certified_logo');
												if( !empty( $certifiedlogo ) ): ?>
												<img src="<?php echo esc_url($certifiedlogo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($certifiedlogo['alt']); ?>" />
											<?php endif; ?>
										</a>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="certifiedInfoLink">
							<a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaTwo font18 fontW400 sparkley"><?php echo get_sub_field('cta_text'); ?></a>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="section candidInstaSection" id="section6">
		<div class="wrapper">
			<div class="secHeadinng">
				<h2 class="font60 playfair fontW300 colorW"><?php echo get_field('instagram_heading'); ?></h2>
			</div>
			<div class="candidInstaContent">
<!-- 				<div id="cats"></div>
				<div class="sliderArrow">
                    <button class="back candidInstaSliderBack">
                        <img src="<?php bloginfo('template_directory'); ?>/images/left-arrow-white.png" alt="">
                    </button>
                    <button class="forward candidInstaSliderForward">
                        <img src="<?php bloginfo('template_directory'); ?>/images/right-arrow-white.png" alt="">
                    </button>
                </div> -->
				<?php echo do_shortcode('[curator feed_public_key="9e883f74-eb37-41e0-bd65-0947672d345f"]'); ?>
			</div>
		</div>
	</div>
	<div class="section gallerySection" id="section7">
		<div class="wrapper">
			<?php if( have_rows('gallery_section') ): ?>
				<?php while( have_rows('gallery_section') ): the_row(); ?>
					<div class="secHeadinng">
						<h2 class="font60 playfair fontW300"><?php echo get_sub_field('section_heading'); ?></h2>
					</div>
					<div class="slidercontainer">
						<div class="rev_slider">
							<?php if( have_rows('gallery_slider_content') ): ?>
								<?php while( have_rows('gallery_slider_content') ): the_row(); ?>
									<div class="rev_slide">
										<div class="test">
											<a href="<?php echo get_sub_field('slider_link'); ?>">
												<?php $galleryslider = get_sub_field('slider_image');
													if( !empty( $galleryslider ) ): ?>
													<img src="<?php echo esc_url($galleryslider['url']); ?>" loading="lazy" alt="<?php echo esc_attr($galleryslider['alt']); ?>" />
												<?php endif; ?>
											</a>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<div class="sliderArrow">
							<button class="back gallerySliderBack">
								<img src="<?php bloginfo('template_directory'); ?>/images/left-arrow-black.png" alt="">
							</button>
							<button class="forward gallerySliderForward">
								<img src="<?php bloginfo('template_directory'); ?>/images/right-arrow-black.png" alt="">
							</button>
						</div>
					</div>
					<div class="galleryInfoLink">
						<a href="<?php echo get_sub_field('cta_link'); ?>" class="ctaTwo font18 fontW400 sparkley"><?php echo get_sub_field('cta_text'); ?></a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>

<script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js" ></script>
<script>
$(document).ready( function() {
  	$.getJSON("https://graph.instagram.com/me/media?fields=caption,id,media_type,media_url,permalink,thumbnail_url,timestamp,username&access_token=IGQVJVUFk0RWVSdmprcUNlbUE1UlFLYUZAVZAFE3YUMyMUdUckg2ek1rSWJwTnFrNFE0ZAG9JMThlRDN2SHFiclpiZAEc5QXdwMW5LZAXg3MmFlQjFoOUlNSGo4Qk9LR3ZAqb3lCMzdfb28xU25XcUNVdGI3UwZDZD", function(data){
	$.each(data.data, function() {
		var imageurl = this["media_url"];
		var instalink = this["permalink"];
		var user = this["username"];
		// check video mp4 url
		if (imageurl.indexOf('.mp4') > -1) {
			var newurl = '<video src="'+ imageurl +'" loop muted autoplay></video>';
		} else {
			var newurl = '<img src="'+ imageurl +'">';
		}
		$("#cats").append("<div class='candidInstaInfo'><div class='mediaBox'>"+ newurl +"</div><div class='overlayContent'><a href='" + instalink + "' target='_blank'><img src='<?php bloginfo('template_directory'); ?>/images/instagram-white.png'><h3 class='font16 fontW600 colorW'>@" + user + "</h3></a></div></div>");
	});
	$('#cats').slick({
		dots: false,
		infinite: false,
		arrows:true,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: $(".candidInstaSliderBack"),
		nextArrow: $(".candidInstaSliderForward"),
		responsive: [
			{
				breakpoint: 900,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	});
});
</script>