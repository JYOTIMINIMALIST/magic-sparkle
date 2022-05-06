<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magic_Sparkle
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="eqRKPI3HTJYMEIVqwcwC_eSCO3wP1wMEadwoS9NdpCE" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- custom css-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/main.min.css">

    <script type="text/javascript">
    	var site_url = "<?php echo get_site_url(); ?>";
    </script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if(is_front_page()){?>
<header class="header" id="header">
<?php } else { ?>
<header class="header innerHeader" id="header">
<?php } ?>

	<div class="wrapper">
		<div class="logoMenuHolder">
			<?php the_custom_logo();?>
            <!-- <a href="<?php echo get_site_url(); ?>" class="logo">
                <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="">
            </a> -->
        </div>
        <div class="menuHolder">
            <div class="desktopMenuFull">
            	<?php if( have_rows('front_menu','option') ): ?>
					<?php $counter=1; while( have_rows('front_menu','option') ): the_row(); ?>
						<a href="<?php echo get_sub_field('menu_link','option'); ?>" class="font18 <?php if($counter==3) { echo 'contactUsCta sparkley'; } ?>"><?php echo get_sub_field('menu_text','option'); ?></a>
					<?php $counter=$counter+1; endwhile; ?>
				<?php endif; ?>
	            <!-- <a href="<?php echo get_site_url(); ?>/trade-customers/" class="font18">TRADE CUSTOMERS</a>
	            <a href="<?php echo get_site_url(); ?>/where-to-buy" class="font18 contactUsCta">BUY NOW</a> -->
            </div>
            <div class="hamburgerHolder">
                <div class="menu btn2" data-menu="2">
                    <div class="icon"></div>
                </div>
            </div>
        </div>
        <div id="menu" class="">
        	<div class="wrapper">
        		<div class="toplogo">
        			<a href="<?php echo get_site_url(); ?>" class="logo">
        				<?php $whitelogo = get_field('white_logo','option');
							if( !empty( $whitelogo ) ): ?>
							<img src="<?php echo esc_url($whitelogo['url']); ?>" loading="lazy" alt="<?php echo esc_attr($whitelogo['alt']); ?>" />
						<?php endif; ?>
		            </a>
        		</div>
        	</div>
            <div class="main-nav">
            	<div class="wrapper">
            		<div class="baseMenu">
            			<?php
            				wp_nav_menu([
	              				'menu' => 'main-menu',
	          					'theme_location' => 'main-menu',
	              				'menu_id' => false,
	              				'menu_class' => 'tabs',
            				]);
            			?>
	                    <!-- <ul class="tabs">
	                        <li class="">
	                        	<a href="<?php echo get_site_url(); ?>/about-us" class="font60 colorW playfair">About Us</a>
	                        </li>
	                        <li class="">
	                        	<a href="<?php echo get_site_url(); ?>/where-to-buy/" class="font60 colorW playfair">How to Buy</a>
	                        </li>
	                        <li class="">
	                        	<a href="" class="font60 colorW playfair">Media & blogs</a>
	                        </li>
	                        <li class="">
	                        	<a href="" class="font60 colorW playfair">How to apply</a>
	                        </li>
	                        <li class="">
	                        	<a href="<?php echo get_site_url(); ?>/gallery" class="font60 colorW playfair">Gallery</a>
	                        </li>
	                        <li class="">
	                        	<a href="<?php echo get_site_url(); ?>/faqs" class="font60 colorW playfair">FAQs</a>
	                        </li>
	                    </ul> -->
	                </div>
	                <div class="productMenu">
	                	<?php if( have_rows('our_products_heading','option') ): ?>
							<?php while( have_rows('our_products_heading','option') ): the_row(); ?>
								<h3><a href="<?php echo get_sub_field('heading_link','option'); ?>" class="font60 colorW playfair"><?php echo get_sub_field('heading_text','option'); ?></a></h3>
							<?php endwhile; ?>
						<?php endif; ?>
	                	<?php
            				wp_nav_menu([
	              				'menu' => 'our-product',
	          					'theme_location' => 'our-product-menu',
	              				'menu_id' => false,
	              				'menu_class' => 'productsubMenu',
            				]);
            			?>
	                	<!-- <ul class="productsubMenu">
	                		<li>
	                			<a href="" class="font24 colorW">MAGIC SPARKLES</a>
	                		</li>
	                		<li>
	                			<a href="" class="font24 colorW">MAGIC TWINKLES</a>
	                		</li>
	                		<li>
	                			<a href="" class="font24 colorW">MAGIC MIXES</a>
	                		</li>
	                	</ul> -->
	                	<?php if( have_rows('trade_customers_heading','option') ): ?>
							<?php while( have_rows('trade_customers_heading','option') ): the_row(); ?>
								<h3><a href="<?php echo get_sub_field('heading_link','option'); ?>" class="font60 colorW playfair"><?php echo get_sub_field('heading_text','option'); ?></a></h3>
							<?php endwhile; ?>
						<?php endif; ?>
	                	<?php
            				wp_nav_menu([
	              				'menu' => 'trade-customers',
	          					'theme_location' => 'trade-customers-menu',
	              				'menu_id' => false,
	              				'menu_class' => 'productsubMenu',
            				]);
            			?>
	                	<!-- <ul class="productsubMenu">
	                		<li>
	                			<a href="<?php echo get_site_url(); ?>/retail/" class="font24 colorW">RETAIL</a>
	                		</li>
	                		<li>
	                			<a href="<?php echo get_site_url(); ?>/wholesale/" class="font24 colorW">WHOLESALE</a>
	                		</li>
	                	</ul> -->
	                </div>
            	</div>
            </div>
            <div class="nav-footer">
            	<div class="wrapper">
            		<div class="headersocialSites">
	            		<ul>
	            			<?php if( have_rows('social_media_data','option') ): ?>
								<?php while( have_rows('social_media_data','option') ): the_row(); ?>
									<li>
										<a href="<?php echo get_sub_field('social_media_link','option'); ?>" target="_blank">
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
	            	<div class="headerContactdetails">
	            		<ul>
	            			<li style="background: url(<?php bloginfo('template_directory');?>/images/phone-white.png)top left no-repeat;background-size: contain;"><a href="tel:<?php echo get_field('contact_number','option'); ?>" class="font24 colorW"><?php echo get_field('contact_number','option'); ?></a></li>
	            			<li style="background: url(<?php bloginfo('template_directory');?>/images/mail-white.png)top left no-repeat;background-size: contain;"><a href="mailto:<?php echo get_field('mail_id','option'); ?>" class="font24 colorW"><?php echo get_field('mail_id','option'); ?></a></li>
	            		</ul>
	            	</div>
            	</div>
            </div>
        </div>
	</div>
</header>