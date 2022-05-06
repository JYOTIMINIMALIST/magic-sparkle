<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Magic_Sparkle
 */

get_header();
?>

<style type="text/css">
	.loaderScreen{z-index: 111;position: fixed;top: 0;left: 0;width: 100%;height: 100vh;}
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


.confetti-button {display: inline-block; padding: 1em 2em; -webkit-appearance: none; appearance: none; background-color: #ff0081; color: #fff; border-radius: 4px; border: none; cursor: pointer; position: relative; transition: transform ease-in 0.1s, box-shadow ease-in 0.25s; box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5); }
.confetti-button:focus { outline: 0; }
.confetti-button:before, .confetti-button:after {position: absolute; content: ''; display: block; width: 140%; height: 100%; left: -20%; z-index: -1000; transition: all ease-in-out 0.5s; background-repeat: no-repeat; }
.confetti-button:before {display: none; top: -110%; background-image: radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, transparent 20%, #33154D 20%, transparent 30%), radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, transparent 10%, #33154D 15%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%); background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%; }
.confetti-button:after {display: none; bottom: -110%; background-image: radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, transparent 10%, #33154D 15%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%), radial-gradient(circle, #33154D 20%, transparent 20%); background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%; }
.confetti-button:active {transform: scale(0.9); background-color: #e60074; box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2); }
.confetti-button.animate:before {display: block; animation: topBubbles ease-in-out 0.5s forwards; }
.confetti-button.animate:after {display: block; animation: bottomBubbles ease-in-out 0.5s forwards; }
 @keyframes
topBubbles {  0% {background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;}
50% {background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;}
100% {background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;}
}
@keyframes
bottomBubbles {  0% {background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;}
 50% {background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;}
 100% {background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;background-size: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;}
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
			<video src="https://videos.files.wordpress.com/jSH7Wv4j/banner-video.mp4" class="deskVideo" loop muted autoplay></video>
			<video src="https://videos.files.wordpress.com/pm8aSHuT/banner-video-mobsmall.mp4" class="mobVideo" loop muted autoplay></video>
			<!-- <iframe src="https://player.vimeo.com/video/637417338?h=92174d4bb6?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
			<div class="videoOverlay"></div>	
   			
   			<!-- <iframe title="vimeo-player" src="https://player.vimeo.com/video/637417338?h=92174d4bb6" width="640" height="360" frameborder="0" allowfullscreen></iframe> -->
		</div>
		<div class="wrapper">
			<div class="bannerHeading">
				<h1 class="font95 playfair fontW300 colorW">Purveyors of Edible Jewels & Edible Glitter</h1>
			</div>
			<div class="bannerIconSec">
				<ul>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/edible-icon.png" alt="">
						<p class="rubik fontW400 colorW">100% Edible</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/naturalcolor-icon.png" alt="">
						<p class="rubik fontW400 colorW">Natural Colors</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/handmade-icon.png" alt="">
						<p class="rubik fontW400 colorW">Hand-made</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_directory'); ?>/images/certified-icon.png" alt="">
						<p class="rubik fontW400 colorW">Certified</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="videoPopup">
			<!-- <a href=""></a> -->
			<a data-fancybox="" href="https://videos.files.wordpress.com/KDKwqkal/magic-sparkles-main.mp4" class="bannercur"></a>
			<img src="https://magictwinkles.com/wp-content/uploads/2021/11/play-cursor.png" alt="Cursor" class="bannercursor"/>
		</div>
		<div class="downArrow">
			<img src="<?php bloginfo('template_directory'); ?>/images/down-arrow.png" alt="" class="floating">
		</div>
	</div>
	<div class="section productSection" id="section1">
		<div class="wrapper">
			<div class="secHeadinng">
				<h2 class="font60 playfair fontW300">Our Magical Range</h2>
				<p class="font18 fontW300">Create a jewel-like shine! Simply sprinkle our fully edible glitter on all your sweet creations for a glamorous effect.</p>
			</div>
			<div class="productContent">
				<div class="productInfo">
					<div class="productImg">
						<a href="<?php echo get_site_url(); ?>/our-products/"><img src="<?php bloginfo('template_directory'); ?>/images/magic-sparkles.png" alt=""></a>
					</div>
					<div class="productDetail">
						<h3 class="font24 fontW600">30+</h3>
						<p class="font18 fontW300">Range of Mixes</p>
						<a href="<?php echo get_site_url(); ?>/our-products/" class="ctaTwo font18 fontW400 sparkley">EXPLORE</a>
					</div>
				</div>
				<div class="productInfo">
					<div class="productImg">
						<a href="<?php echo get_site_url(); ?>/our-products/"><img src="<?php bloginfo('template_directory'); ?>/images/magic-twinkles.png" alt=""></a>
					</div>
					<div class="productDetail">
						<h3 class="font24 fontW600">10+</h3>
						<p class="font18 fontW300">Range of Mixes</p>
						<a href="<?php echo get_site_url(); ?>/our-products/" class="ctaTwo font18 fontW400 sparkley">EXPLORE</a>
					</div>
				</div>
				<div class="productInfo">
					<div class="productImg">
						<a href="<?php echo get_site_url(); ?>/our-products/"><img src="<?php bloginfo('template_directory'); ?>/images/magic-mix.png" alt=""></a>
					</div>
					<div class="productDetail">
						<h3 class="font24 fontW600">6+</h3>
						<p class="font18 fontW300">Range of Mixes</p>
						<a href="<?php echo get_site_url(); ?>/our-products/" class="ctaTwo font18 fontW400 sparkley">EXPLORE</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section howtobuySection" id="section2">
		<div class="wrapper">
			<div class="secHeadinng">
				<h2 class="font60 playfair fontW300 colorW">How To Buy</h2>
			</div>
			<div class="howtobuyContent">
				<div class="howtobuyInfo">
					<div class="howtobuyInfoBox">
						<img src="<?php bloginfo('template_directory'); ?>/images/how-to-buy-icon1.svg" alt="">
						<h3 class="font24 fontW500 colorW">Buy <br>Online</h3>
						<a href="<?php echo get_site_url(); ?>/where-to-buy/">
							<div class="howtobuyDetail">
								<p class="font14 colorW fontW300">Our magical products are available directly from online and physical retailers around the world. Click here to search for retailers in your country and simply click on the link provided to be taken to Magic Sparkles products on their website.</p>
							</div>
							<div class="howtobuyLink">
								<img src="<?php bloginfo('template_directory'); ?>/images/link-arrow.png" alt="">
							</div>
						</a>
					</div>
				</div>
				<div class="howtobuyInfo">
					<div class="howtobuyInfoBox">
						<img src="<?php bloginfo('template_directory'); ?>/images/how-to-buy-icon2.svg" alt="">
						<h3 class="font24 fontW500 colorW">Buy <br>Wholesale</h3>
						<a href="<?php echo get_site_url(); ?>/where-to-buy/">
							<div class="howtobuyDetail">
								<p class="font14 colorW fontW300">If you would like to purchase larger quantities of Magic Sparkles and Magic Twinkles, you may qualify for wholesale pricing. Contact us directly with your requirements and our sales team will liaise with you.</p>
							</div>
							<div class="howtobuyLink">
								<img src="<?php bloginfo('template_directory'); ?>/images/link-arrow.png" alt="">
							</div>
						</a>
					</div>
				</div>
				<div class="howtobuyInfo">
					<div class="howtobuyInfoBox">
						<img src="<?php bloginfo('template_directory'); ?>/images/how-to-buy-icon3.svg" alt="">
						<h3 class="font24 fontW500 colorW">Become <br>A Retailer</h3>
						<a href="<?php echo get_site_url(); ?>/where-to-buy/">
							<div class="howtobuyDetail">
								<p class="font14 colorW fontW300">Want to sell Magic Sparkles in your store? We have made re-selling our magic range of products simple & fast! Contact us directly to get trade pricing on our retail products.</p>
							</div>
							<div class="howtobuyLink">
								<img src="<?php bloginfo('template_directory'); ?>/images/link-arrow.png" alt="">
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="howtobuyContentMob">
				<div class="howtobuyInfoMob">
					<img src="<?php bloginfo('template_directory'); ?>/images/how-to-buy-icon1.svg" alt="">
					<h3 class="font24 fontW500 colorW">Buy <br>Online</h3>
					<div class="howtobuyDetail">
						<p class="font16 colorW fontW300">Our magical products are available directly from online and physical retailers around the world. Click here to search for retailers in your country and simply click on the link provided to be taken to Magic Sparkles products on their website.</p>
					</div>
				</div>
				<div class="howtobuyInfoMob">
					<img src="<?php bloginfo('template_directory'); ?>/images/how-to-buy-icon2.svg" alt="">
					<h3 class="font24 fontW500 colorW">Buy <br>Wholesale</h3>
					<div class="howtobuyDetail">
						<p class="font16 colorW fontW300">If you would like to purchase larger quantities of Magic Sparkles and Magic Twinkles, you may qualify for wholesale pricing. Contact us directly with your requirements and our sales team will liaise with you.</p>
					</div>
				</div>
				<div class="howtobuyInfoMob">
					<img src="<?php bloginfo('template_directory'); ?>/images/how-to-buy-icon3.svg" alt="">
					<h3 class="font24 fontW500 colorW">Become <br>A Retailer</h3>
					<div class="howtobuyDetail">
						<p class="font16 colorW fontW300">Want to sell Magic Sparkles in your store? We have made re-selling our magic range of products simple & fast! Contact us directly to get trade pricing on our retail products.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="mapBox">
			<img src="<?php bloginfo('template_directory'); ?>/images/map.svg" alt="">
		</div>
	</div>
	<div class="section testimonialSection" id="section3">
		<div class="wrapper">
			<div class="secHeadinng">
				<h2 class="font60 playfair fontW300">Our Ambassadors</h2>
			</div>
			<div class="testimonialContent">
				<div class="testimonialSlider">
					<div class="testimonialInfo">
						<div class="testimonialwithImg">
							<div class="testimonialImg">
								<img src="<?php bloginfo('template_directory'); ?>/images/fiona-cairns.jpg" alt="">
							</div>
							<div class="testimonialImgInfo">
								<img src="<?php bloginfo('template_directory'); ?>/images/quote-icon.png" alt="">
								<h3 class="font20 fontW500">Magic Sparkles has been our sparkle of choice for many years here at Fiona Cairns and adding a sprinkle or two simply brings our cakes alive. We love it!</h3>
								<div class="testimonialCustomer">
									<p class="font24 fontW500"><a href="" target="_blank" class="fontW500">Fiona Cairns</a></p>
									<p class="font18 fontW300"><a href="" target="_blank">Customers</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonialInfo">
						<div class="testimonialVideo">
							<div class="testimonialVideoImg" style="background: url(<?php bloginfo('template_directory'); ?>/images/karen-davies-video.png) center center no-repeat;background-size:cover;">
								<!-- <img src="<?php bloginfo('template_directory'); ?>/images/karen-davies.png" alt=""> -->
								<div class="videoOverlay"></div>
							</div>
							<div class="videoPlay">
								<a data-fancybox="" href="https://videos.files.wordpress.com/NZcNTViq/karen_davies_testimonial.mp4">
									<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-play.png" alt="">
								</a>
							</div>
							<div class="testimonialVideoInfo">
								<div class="videoDetails">
									<div class="videoPerThumb">
										<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-video-person.png" alt="">
									</div>
									<div class="videoPerDetails">
										<a href="" target="_blank">
											<h3 class="font24 colorW fontW600">Karen Davies</h3>
											<p class="font18 colorW">Founder - Karen Davies Sugarcraft</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonialInfo">
						<div class="testimonialwithImg">
							<div class="testimonialImg">
								<img src="<?php bloginfo('template_directory'); ?>/images/carol.jpg" alt="">
							</div>
							<div class="testimonialImgInfo">
								<img src="<?php bloginfo('template_directory'); ?>/images/quote-icon.png" alt="">
								<h3 class="font20 fontW500">I absolutely adore Magic Sparkles and Magic Twinkles! I’ve been in the Cake industry for over 15 years and have been using Magic Sparkles ever since they became available. They add a very unique sparkle to my cakes and never fail to attract a lot of attention.</h3>
								<div class="testimonialCustomer">
									<p class="font24 fontW500"><a href="https://www.instagram.com/cakesbycarol/" target="_blank" class="fontW500">Carol Smith</a></p>
									<p class="font18 fontW300"><a href="https://www.instagram.com/cakesbycarol/" target="_blank">Cakes by Carol</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonialInfo">
						<div class="testimonialwithImg">
							<div class="testimonialImg">
								<img src="<?php bloginfo('template_directory'); ?>/images/mini-cupcakery.jpg" alt="">
							</div>
							<div class="testimonialImgInfo">
								<img src="<?php bloginfo('template_directory'); ?>/images/quote-icon.png" alt="">
								<h3 class="font20 fontW500">This product is magic - they do truly sparkle. When I'm decorating cakes or cupcakes, adding Magic Sparkles completely elevates the look. They've become the finishing touch for every cake I make.</h3>
								<div class="testimonialCustomer">
									<p class="font24 fontW500"><a href="https://www.instagram.com/theminicupcakery/?utm_medium=copy_link" target="_blank" class="fontW500">Lynda & Kathryn</a></p>
									<p class="font18 fontW300"><a href="https://www.instagram.com/theminicupcakery/?utm_medium=copy_link" target="_blank">The Mini Cupcakery</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonialInfo">
						<div class="testimonialwithImg">
							<div class="testimonialImg">
								<img src="<?php bloginfo('template_directory'); ?>/images/buttercup-cakes.jpg" alt="">
							</div>
							<div class="testimonialImgInfo">
								<img src="<?php bloginfo('template_directory'); ?>/images/quote-icon.png" alt="">
								<h3 class="font20 fontW500">I've been using Magic Sparkles for quite a while now and absolutely love them. I mainly use them on wedding cakes and my clients love the effect. They are easy to use and they really twinkle and catch the light, without being "blingy", so are perfect for the pretty, elegant cakes my clients are looking for.</h3>
								<div class="testimonialCustomer">
									<p class="font24 fontW500"><a href="https://www.instagram.com/love_buttercup_cakes/" target="_blank" class="fontW500">Buttercup Cakes</a></p>
									<p class="font18 fontW300"><a href="https://www.instagram.com/love_buttercup_cakes/" target="_blank">Customers</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonialInfo">
						<div class="testimonialText">
							<div class="testimonialTextInfo">
								<img src="<?php bloginfo('template_directory'); ?>/images/quote-icon.png" alt="">
								<h3 class="font20 fontW600">Amazing! Love the color! It adds the perfect amount of sparkle.</h3>
								<p class="font24"><a href="" target="_blank" class="fontW500">Alexis Rose</a></p>
								<p class="font18"><a href="" target="_blank" class="fontW300">Australia</a></p>
							</div>
						</div>
					</div>
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
		</div>
	</div>
	<div class="section mediablogSection" id="section4">
		<div class="wrapper">
			<div class="secHeadinng">
				<h2 class="font60 playfair fontW300 colorW">Media & Blogs</h2>
				<!-- <p class="font18 fontW300 colorW">Trust us, you need to read these insights about fully edible food decoration.</p> -->
			</div>
			<div style="margin-top: 25px"><h2 class="font95 playfair fontW300 colorW text-center">Coming Soon</h2></div>
			<!-- <div class="mediablogSec">
				<div class="mediablogSlider">
					<div class="mediablogContent">
						<div class="mediablogImg">
							<img src="<?php bloginfo('template_directory'); ?>/images/blog1.png" alt="">
						</div>
						<div class="mediablogInfo">
							<h3 class="colorW fontW700 font24">The Best 8 Edible Glitter Cocktails</h3>
							<p class="font16 colorW">The Best 8 Edible Glitter Cocktails The Elixir Edible Dust™ ...</p>
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/link-icon.png" alt=""></a>
						</div>
					</div>
					<div class="mediablogContent">
						<div class="mediablogImg">
							<img src="<?php bloginfo('template_directory'); ?>/images/blog2.png" alt="">
						</div>
						<div class="mediablogInfo">
							<h3 class="colorW fontW700 font24">Glittering Chocolate Cake</h3>
							<p class="font16 colorW">I’ve always been a bit of a non-conformist. My freshman ye..</p>
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/link-icon.png" alt=""></a>
						</div>
					</div>
					<div class="mediablogContent">
						<div class="mediablogImg">
							<img src="<?php bloginfo('template_directory'); ?>/images/blog3.png" alt="">
						</div>
						<div class="mediablogInfo">
							<h3 class="colorW fontW700 font24">Lemon Lavender Cupcakes</h3>
							<p class="font16 colorW">These Lemon Lavender Cupcakes are so light in flavor and ...</p>
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/link-icon.png" alt=""></a>
						</div>
					</div>
					<div class="mediablogContent">
						<div class="mediablogImg">
							<img src="<?php bloginfo('template_directory'); ?>/images/blog2.png" alt="">
						</div>
						<div class="mediablogInfo">
							<h3 class="colorW fontW700 font24">Glittering Chocolate Cake</h3>
							<p class="font16 colorW">I’ve always been a bit of a non-conformist. My freshman ye..</p>
							<a href=""><img src="<?php bloginfo('template_directory'); ?>/images/link-icon.png" alt=""></a>
						</div>
					</div>
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
				<a href="" class="ctaOne font18 fontW400 sparkley">VIEW ALL</a>
			</div> -->
		</div>
	</div>
	<div class="section certifiedSection" id="section5">
		<div class="wrapper">
			<div class="secHeadinng">
				<h2 class="font60 playfair fontW300">Certified For Market-Leading Standards in Food Safety</h2>
				<p class="font18 fontW300">We take food safety very seriously @ Magic Sparkles</p>
			</div>
			<div class="certifiedContent">
				<div class="certifiedInfo">
					<div class="certifiedLogobox">
						<a href="http://localhost/magic-sparkle/certifications/#salsa">
							<img src="<?php bloginfo('template_directory'); ?>/images/salsa-approved.png" alt="">
						</a>
					</div>
					<div class="certifiedLogobox">
						<a href="http://localhost/magic-sparkle/certifications/#vegan">
							<img src="<?php bloginfo('template_directory'); ?>/images/vegan.png" alt="">
						</a>
					</div>
					<div class="certifiedLogobox">
						<a href="http://localhost/magic-sparkle/certifications/#kosher">
							<img src="<?php bloginfo('template_directory'); ?>/images/manchester.png" alt="">
						</a>
					</div>
					<div class="certifiedLogobox">
						<a href="http://localhost/magic-sparkle/certifications/#halal">
							<img src="<?php bloginfo('template_directory'); ?>/images/halal.png" alt="">
						</a>
					</div>
				</div>
				<div class="certifiedInfoLink">
					<a href="<?php echo get_site_url(); ?>/certifications/" class="ctaTwo font18 fontW400 sparkley">MORE DETAILS</a>
				</div>
			</div>
		</div>
	</div>
	<div class="section candidInstaSection" id="section6">
		<div class="wrapper">
			<div class="secHeadinng">
				<h2 class="font60 playfair fontW300 colorW">Catch us Candid on IG!</h2>
			</div>
			<div class="candidInstaContent">
				<div id="cats"></div>
				<div class="sliderArrow">
                    <button class="back candidInstaSliderBack">
                        <img src="<?php bloginfo('template_directory'); ?>/images/left-arrow-white.png" alt="">
                    </button>
                    <button class="forward candidInstaSliderForward">
                        <img src="<?php bloginfo('template_directory'); ?>/images/right-arrow-white.png" alt="">
                    </button>
                </div>
				<!-- <div class="candidInstaSlider">
					<div class="candidInstaInfo">
						<img src="<?php bloginfo('template_directory'); ?>/images/instagram1.png" alt="">
						<div class="overlayContent">
							<img src="<?php bloginfo('template_directory'); ?>/images/instagram-white.png" alt="">
							<h3 class="font16 fontW600 colorW">@John_Doe_1109</h3>
						</div>
					</div>
					<div class="candidInstaInfo">
						<img src="<?php bloginfo('template_directory'); ?>/images/instagram2.png" alt="">
						<div class="overlayContent">
							<img src="<?php bloginfo('template_directory'); ?>/images/instagram-white.png" alt="">
							<h3 class="font16 fontW600 colorW">@John_Doe_1109</h3>
						</div>
					</div>
					<div class="candidInstaInfo">
						<img src="<?php bloginfo('template_directory'); ?>/images/instagram3.png" alt="">
						<div class="overlayContent">
							<img src="<?php bloginfo('template_directory'); ?>/images/instagram-white.png" alt="">
							<h3 class="font16 fontW600 colorW">@John_Doe_1109</h3>
						</div>
					</div>
					<div class="candidInstaInfo">
						<img src="<?php bloginfo('template_directory'); ?>/images/instagram2.png" alt="">
						<div class="overlayContent">
							<img src="<?php bloginfo('template_directory'); ?>/images/instagram-white.png" alt="">
							<h3 class="font16 fontW600 colorW">@John_Doe_1109</h3>
						</div>
					</div>
					<div class="candidInstaInfo">
						<img src="<?php bloginfo('template_directory'); ?>/images/instagram1.png" alt="">
						<div class="overlayContent">
							<img src="<?php bloginfo('template_directory'); ?>/images/instagram-white.png" alt="">
							<h3 class="font16 fontW600 colorW">@John_Doe_1109</h3>
						</div>
					</div>
					<div class="candidInstaInfo">
						<img src="<?php bloginfo('template_directory'); ?>/images/instagram2.png" alt="">
						<div class="overlayContent">
							<img src="<?php bloginfo('template_directory'); ?>/images/instagram-white.png" alt="">
							<h3 class="font16 fontW600 colorW">@John_Doe_1109</h3>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
	<div class="section gallerySection" id="section7">
		<div class="wrapper">
			<div class="secHeadinng">
				<h2 class="font60 playfair fontW300">The Sparkling Gallery</h2>
			</div>
			<div class="slidercontainer">
  				<div class="rev_slider">
    				<div class="rev_slide">
				      	<div class="test">
				      		<a href="<?php echo get_site_url(); ?>/gallery/">
				      			<img src="<?php bloginfo('template_directory'); ?>/images/home-gallery1.jpg" alt="">
				      		</a>
				      	</div>
				    </div>
    				<div class="rev_slide">
      					<div class="test">
      						<a href="<?php echo get_site_url(); ?>/gallery/">
      							<img src="<?php bloginfo('template_directory'); ?>/images/gallery-image.png" alt="">
      						</a>
      					</div>
    				</div>
				    <div class="rev_slide">
				      	<div class="test">
				      		<a href="<?php echo get_site_url(); ?>/gallery/">
				      			<img src="<?php bloginfo('template_directory'); ?>/images/home-gallery2.jpg" alt="">
				      		</a>
				      	</div>
				    </div>
				    <div class="rev_slide">
				      	<div class="test">
				      		<a href="<?php echo get_site_url(); ?>/gallery/">
				      			<img src="<?php bloginfo('template_directory'); ?>/images/home-gallery3.jpg" alt="">
				      		</a>
				      	</div>
				    </div>
				    <div class="rev_slide">
				      	<div class="test">
				      		<a href="<?php echo get_site_url(); ?>/gallery/">
				      			<img src="<?php bloginfo('template_directory'); ?>/images/home-gallery4.jpg" alt="">
				      		</a>
				      	</div>
				    </div>
				    <div class="rev_slide">
				      	<div class="test">
				      		<a href="<?php echo get_site_url(); ?>/gallery/">
				      			<img src="<?php bloginfo('template_directory'); ?>/images/home-gallery5.jpg" alt="">
				      		</a>
				      	</div>
				    </div>
				    <div class="rev_slide">
				      	<div class="test">
				      		<a href="<?php echo get_site_url(); ?>/gallery/">
				      			<img src="<?php bloginfo('template_directory'); ?>/images/home-gallery6.jpg" alt="">
				      		</a>
				      	</div>
				    </div>
				    <div class="rev_slide">
				      	<div class="test">
				      		<a href="<?php echo get_site_url(); ?>/gallery/">
				      			<img src="<?php bloginfo('template_directory'); ?>/images/home-gallery7.jpg" alt="">
				      		</a>
				      	</div>
				    </div>
				    <div class="rev_slide">
				      	<div class="test">
				      		<a href="<?php echo get_site_url(); ?>/gallery/">
				      			<img src="<?php bloginfo('template_directory'); ?>/images/home-gallery8.jpg" alt="">
				      		</a>
				      	</div>
				    </div>
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
				<a href="<?php echo get_site_url(); ?>/gallery/" class="ctaTwo font18 fontW400 sparkley">View All</a>
			</div>
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

<!-- <script>
var animateButton = function(e) {

  e.preventDefault;
  //reset animation
  e.target.classList.remove('animate');

  e.target.classList.add('animate');
  setTimeout(function(){
    e.target.classList.remove('animate');
  },200);
};

var classname = document.getElementsByClassName("confetti-button");

for (var i = 0; i < classname.length; i++) {
  classname[i].addEventListener('click', animateButton, false);
}
</script> -->