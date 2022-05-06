<?php get_header(); /*Template Name: Media And Blogs*/ ?>

<style>
    body {background: linear-gradient(287.56deg, #33154D 0%, #000132 100%);}
    .mediablogsSection {padding: 150px 0px 50px;position: relative;}
    .blogdetails {padding: 10px 0px;}
    .mediablogData {width: 80%; margin: 0 auto; position: relative; border-bottom: 1px solid #fff; padding-bottom: 70px; }
    .blogtextData {width: 80%; margin: 20px auto; position: relative; }
    .featuredBlogs {display: flex; justify-content: space-between; align-items: center; }
    .secHeading {text-align: center; margin-bottom: 80px; }
    .featuredblogsDesc {position: relative; width: 34%; }
    .featuredblogsDesc h3 {padding: 20px 0px; }
    .featuredblogsImg {position: relative; width: 62%; }
    .shareCta {width: 35px; height: 35px; background-color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; right: 20px; top: 23px; margin: 0 auto; }
    .shareCta img {margin: 0 auto; width: 19px; }
    .blogsArrow {width: 37px; height: 37px; background-color: transparent; border: 1px solid #FFFFFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-top: 20px; }
    .blogsArrow img {margin: 0 auto; width: 16px; }
    .sharesmallCta {width: 35px; height: 35px; background-color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; right: 12px; top: 13px; margin: 0 auto; }
    .sharesmallCta img {margin: 0 auto; width: 19px; }
    .blogsDetails {display: flex; align-items: center; justify-content: space-between; width: 86%; margin-bottom: 60px; padding: 20px; border: 0.5px solid transparent; }
    .blogsImg {position: relative; width: 28%; }
    .blogsdetailsText {width: 70%;}
    .blogsdetailsText h3 {padding: 10px 0px;}
    .blogsDetails:hover {background: #170A3E; border: 0.5px solid #FFFFFF; box-sizing: border-box; box-shadow: 1px 0px 146px rgba(193, 8, 251, 0.46); border-radius: 10px; }
    .blogsDate {opacity: 0.5; }
    .mediablogsSection .mediablogData .sliderArrow {position: absolute;width: 100%;top: 55%;transform: translateY(-50%);left: 0;}
    .mediablogsSection .mediablogData .mediaBlogsSliderBack, .mediablogsSection .mediablogData .mediaBlogsSliderForward {background: transparent; position: absolute; cursor: pointer; }
    .mediablogsSection .mediablogData .mediaBlogsSliderBack:focus, .mediablogsSection .mediablogData .mediaBlogsSliderForward:focus {outline: none; }
    .mediablogsSection .mediablogData .mediaBlogsSliderBack {left: -50px; }
    .mediablogsSection .mediablogData .mediaBlogsSliderForward {right: -50px; }
    .slick-dots {bottom: -50px; }
    .slick-dots li button:before {width: 7px; height: 7px; opacity: 10; color: #fff; }
    .slick-dots li.slick-active button:before {opacity: 10; color: #fff; }
    .container {margin: 0 auto; width: 80%;}
    .form-control {background-color: transparent;}
    .filter-cat {margin: 1em 0;}
    .filter-cat-results .f-cat {opacity: 0; display: none;}
    .filter-cat-results .f-cat.active {opacity: 1; display: block; -webkit-animation: fadeIn 0.65s ease forwards; animation: fadeIn 0.65s ease forwards; }
    @-webkit-keyframes fadeIn {
        0% {opacity: 0;}
        100% {opacity: 1;}
    }
    @keyframes fadeIn {
        0% {opacity: 0;}
        100% {opacity: 1;}
    }
    @media all and (max-width: 1600px) {
        .mediablogsSection {padding: 150px 0px 50px;}
        .secHeading {margin-bottom: 50px;}
        .blogsDetails {margin-bottom: 50px;}
        .featuredblogsDesc h3 {padding: 12px 0px;}
        .blogsArrow {margin-top: 12px;}
    }
    @media all and (max-width: 900px) {
        .container {margin: 0 auto;width: 100%;}
        .mediablogsSection {padding: 120px 0px 30px;}
        .blogsdetailsText {width: 100%;}
        .featuredblogsDesc h3 {padding: 10px 0px;}
        .featuredBlogs {display: block;}
        .blogsDetails {display: block;margin-bottom: 30px;width: 100%;padding: 10px;}
        .featuredblogsDesc {width: 100%;padding-top: 20px;}
        .featuredblogsImg {width: 100%;}
        .blogsImg {width: 100%;margin-bottom:20px;}
        .secHeading {margin-bottom: 30px;}
    }
    @media all and (max-width:680px) {
        .mediablogData {width: 100%;margin: 0 auto;}
        .blogtextData {width: 100%;margin: 0 auto;}
    }
</style>

<section class="mediablogsSection">
    <div class="wrapper">
        <div class="mediablogData">
            <div class="secHeading">
                <h1 class="colorW playfair font60"><?php the_title(); ?></h1>
                <p class="colorW rubik font20"><?php echo get_field('heading_description'); ?></p>
            </div>

            <div class="mediaBlogsSlider">
                <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 5, 'order' => 'DESC', 'meta_key'  => 'show_in_slider', 'meta_value'  => 'yes');
                    $the_query = new WP_Query($args);
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <div class="">
                        <div class="featuredBlogs">
							<div class="featuredblogsImg">
								<a href="<?php the_permalink();?>">
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
									<!--<div class="shareCta">
										<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blogs-share.png" alt=""></a>
									</div>-->
								</a>
							</div>
							<div class="featuredblogsDesc">
								<a href="<?php the_permalink();?>">
									<p class="colorW font18 blogsDate"><?php show_last_modified_date(); ?> · <?php echo reading_time(); ?> read</p>
									<h3 class="colorW font28"><?php the_title(); ?></h3>
									<p class="colorW font18"><?php $content = wp_strip_all_tags(get_the_content()); echo '<p class="colorW font18">' .substr($content, 0, 100) . '...</p>'; ?></p>
									<div class="blogsArrow">
										<a href="<?php the_permalink();?>"><img src="<?php bloginfo('template_directory'); ?>/images/blog-arrow.png" alt=""></a>
									</div>
								</a>
							</div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="sliderArrow">
                <button class="back mediaBlogsSliderBack">
                    <img src="<?php bloginfo('template_directory'); ?>/images/left-arrow-white.png" alt="">
                </button>
                <button class="forward mediaBlogsSliderForward">
                    <img src="<?php bloginfo('template_directory'); ?>/images/right-arrow-white.png" alt="">
                </button>
            </div>
        </div>
</section>
<section class="blogdetails">
    <div class="wrapper">

<!--         <div class="container filtering">
            <div class="filter-cat row">
                <div class="col col-md-3 col-xs-6">
                    <select class="form-control">
                        <option value="cat-all">Show all</option>
                        <option value="cat-one">1</option>
                        <option value="cat-two">2</option>
                        <option value="cat-three">3</option>
                    </select>
                </div>
            </div>
        </div> -->

        <div class="blogtextData filter-cat-results">
            <?php
                $args = array('post_type' => 'post','posts_per_page' => -1,'order' => 'DESC');
                $the_query = new WP_Query( $args );
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
                <div class="f-cat" data-cat="cat-one">
					<div class="blogsDetails">
						<div class="blogsImg">
							<a href="<?php the_permalink();?>">
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
							</a>
						</div>
						<div class="blogsdetailsText">
							<a href="<?php the_permalink();?>">
								<p class="colorW font18 blogsDate"><?php show_last_modified_date(); ?> · <?php echo reading_time(); ?> read</p>
								<h3 class="colorW font28"><?php the_title(); ?></h3>
								<?php $content = wp_strip_all_tags(get_the_content()); echo '<p class="colorW font18">' .substr($content, 0, 100) . '...</p>'; ?>
							</a>
						</div>
					</div>    
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
</section>

<?php get_footer(); ?>

<script>
    $('.mediaBlogsSlider').slick({
        dots: true,
        infinite: false,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $(".mediaBlogsSliderBack"),
        nextArrow: $(".mediaBlogsSliderForward")
    });

    var filterActive;
    function filterCategory(category) {
        if (filterActive != category) {
            // reset results list
            $('.filter-cat-results .f-cat').removeClass('active');
            // elements to be filtered
            $('.filter-cat-results .f-cat')
                .filter('[data-cat="' + category + '"]')
                .addClass('active');
            // reset active filter
            filterActive = category;
        }
    }

    $('.f-cat').addClass('active');
    $('.filtering select').change(function() {
        if ($(this).val() == 'cat-all') {
            $('.filter-cat-results .f-cat').addClass('active');
            filterActive = 'cat-all';
        } else {
            filterCategory($(this).val());
        }
    });
</script>