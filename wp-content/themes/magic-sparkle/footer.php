<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magic_Sparkle
 */

?>

<footer class="section fp-auto-height" id="section8">
	<div class="footerTop">
		<div class="wrapper">
			<div class="footerBox">
				<p class="font18 fontW500"><?php echo get_field('copyright_line','option'); ?></p>
				<ul class="socialMedia">
					<?php if( have_rows('social_media_data','option') ): ?>
						<?php while( have_rows('social_media_data','option') ): the_row(); ?>
							<li>
								<a href="<?php echo get_sub_field('social_media_link','option'); ?>">
									<?php $socialicon = get_sub_field('social_media_icon','option');
										if( !empty( $socialicon ) ): ?>
										<img src="<?php echo esc_url($socialicon['url']); ?>" loading="lazy" alt="<?php echo esc_attr($socialicon['alt']); ?>" />
									<?php endif; ?>
								</a>
							</li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
			<div class="footerBox">
				<?php
    				wp_nav_menu([
          				'menu' => 'footer-menu',
      					'theme_location' => 'footer-menu',
          				'menu_id' => false,
          				'menu_class' => 'mainPagelinks',
    				]);
    			?>
				<!-- <ul class="mainPagelinks">
					<li><a href="<?php echo get_site_url(); ?>" class="font18 fontW500">Home</a></li>
					<li><a href="<?php echo get_site_url(); ?>/about-us" class="font18 fontW500">About Us</a></li>
					<li><a href="<?php echo get_site_url(); ?>/where-to-buy" class="font18 fontW500">Where to Buy</a></li>
					<li><a href="" class="font18 fontW500">Media & Blogs</a></li>
					<li><a href="<?php echo get_site_url(); ?>/gallery" class="font18 fontW500">Gallery</a></li>
					<li><a href="<?php echo get_site_url(); ?>/faqs" class="font18 fontW500">FAQs</a></li>
				</ul> -->
			</div>
			<div class="footerBox">
				<?php if( have_rows('trade_customers_heading','option') ): ?>
					<?php while( have_rows('trade_customers_heading','option') ): the_row(); ?>
						<h4 class="">
							<a href="<?php echo get_sub_field('heading_link','option'); ?>" class="font18 fontW500 colorGy"><?php echo get_sub_field('heading_text','option'); ?></a>
						</h4>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php
    				wp_nav_menu([
          				'menu' => 'footer-trade-customer',
      					'theme_location' => 'footer-trade-customers-menu',
          				'menu_id' => false,
          				'menu_class' => 'tradepageLinks',
    				]);
    			?>
				<!-- <ul class="tradepageLinks">
					<li><a href="<?php echo get_site_url(); ?>/retail" class="font18">Retail</a></li>
					<li><a href="<?php echo get_site_url(); ?>/wholesale" class="font18">Wholesale</a></li>
				</ul> -->
			</div>
			<div class="footerBox">
				<?php if( have_rows('our_products_heading','option') ): ?>
					<?php while( have_rows('our_products_heading','option') ): the_row(); ?>
						<h4 class="">
							<a href="<?php echo get_sub_field('heading_link','option'); ?>" class="font18 fontW500 colorGy"><?php echo get_sub_field('heading_text','option'); ?></a>
						</h4>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php
    				wp_nav_menu([
          				'menu' => 'footer-our-product',
      					'theme_location' => 'footer-our-product-menu',
          				'menu_id' => false,
          				'menu_class' => 'productspageLinks',
    				]);
    			?>
				<!-- <ul class="productspageLinks">
					<li><a href="" class="font18">Magic Sparkles</a></li>
					<li><a href="" class="font18">Magic Twinkles</a></li>
					<li><a href="" class="font18">Magic Mixes</a></li>
				</ul> -->
			</div>
			<div class="footerBox">
				<ul class="companycontactInfo">
					<li style="background: url(<?php echo get_field('contact_icon','option'); ?>) top left no-repeat;background-size: auto;"><a href="tel:<?php echo get_field('contact_number','option'); ?>" class="font18"><?php echo get_field('contact_number','option'); ?>‬</a></li>
					<li style="background: url(<?php echo get_field('mail_icon','option'); ?>) top left no-repeat;background-size: auto;"><a href="mailto:<?php echo get_field('mail_id','option'); ?>" class="font18"><?php echo get_field('mail_id','option'); ?></a></li>
					<li style="background: url(<?php echo get_field('location_icon','option'); ?>) top left no-repeat;background-size: auto;"><a href="<?php echo get_field('address_map_link','option'); ?>" target="_blank"><p class="font18"><?php echo get_field('location_address','option'); ?></p></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footerBottom">
		<div class="wrapper">
			<ul class="bottomLinks">
				<?php if( have_rows('footer_bottom_menu','option') ): ?>
					<?php while( have_rows('footer_bottom_menu','option') ): the_row(); ?>
						<li><a href="<?php echo get_sub_field('menu_link','option'); ?>"><?php echo get_sub_field('menu_text','option'); ?></a></li>
					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</footer>
</div>

<script src="<?php bloginfo('template_directory');?>/js/script.min.js"></script>
<!-- <script src="<?php bloginfo('template_directory');?>/js/custom.js"></script> -->

<?php wp_footer(); ?>

</body>
</html>