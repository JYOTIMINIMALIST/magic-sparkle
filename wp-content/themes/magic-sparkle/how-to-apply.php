<?php get_header(); /*Template Name: How To Apply*/ ?>

<style>
    body {background: linear-gradient(287.56deg, #33154D 0%, #000132 100%);}
    .howtoapplySection {padding: 150px 0px;}
    .howtoapplyData {width: 80%;margin: 0 auto;}
    .secHeading {text-align: center;margin-bottom: 80px}
    .howtoapplyContent {display: flex;align-items: flex-start;flex-wrap: wrap;}
    .howtoapplyInfo {display: flex;align-items: flex-start;padding-top: 20px; justify-content: space-between;}
	.howtoapplyInfoImg{width: 16%;}
	.howtoapplyInfoImg img{width:45px;height:45px;border-radius:50%;}
    .howtoapplyHeading{width: 80%;}
    .howtoapplyBoxes {width: 31.3%;margin-right: 3%;margin-bottom: 60px;}
    .howtoapplyBoxes:nth-child(3n+3) {margin-right: 0;}
	.howtoapplyInfo .howtoapplyHeading h2{font-size:40px;color:#fff;}
	.howtoapplyInfo .howtoapplyHeading h3{font-size:28px;color:#fff;}
	.howtoapplyInfo .howtoapplyHeading h4{font-size:24px;color:#fff;}
	.howtoapplyInfo .howtoapplyHeading p{margin-bottom: 15px; font-size:18px;color:#fff;}
	.howtoapplyInfo .howtoapplyHeading b, .howtoapplyInfo .howtoapplyHeading strong{color:#fff;}

    @media all and (max-width: 1600px) {
        .howtoapplySection {padding: 150px 0px 100px;}
        .secHeading {margin-bottom: 50px}
        .howtoapplyInfo {padding-top: 18px;}
        .howtoapplyBoxes {margin-bottom: 40px;}
		.howtoapplyInfo .howtoapplyHeading h2{font-size:32px;}
		.howtoapplyInfo .howtoapplyHeading h3{font-size:22px;}
		.howtoapplyInfo .howtoapplyHeading h4{font-size:20px;}
		.howtoapplyInfo .howtoapplyHeading p{font-size:16px;}
    }

    @media all and (max-width: 900px) {
        .howtoapplySection {padding: 120px 0px 80px;}
        .secHeading {margin-bottom: 30px}
        .howtoapplyBoxes {width: 48.5%;margin-right: 3%;margin-bottom: 30px;}
        .howtoapplyBoxes:nth-child(3n+3) {margin-right: 3%;}
        .howtoapplyBoxes:nth-child(2n+2) {margin-right: 0;}
        .howtoapplyInfo {padding-top: 15px;}
    }

    @media all and (max-width: 680px) {
        .howtoapplyBoxes {width: 100%;margin-right: 0%;}
        .howtoapplyBoxes:nth-child(3n+3) {margin-right: 0%;}
        .howtoapplyBoxes:nth-child(2n+2) {margin-right: 0;}
        .howtoapplyData {width: 100%;margin: 0 auto;}
        .howtoapplyInfo p {margin-left: 10px;}
		.howtoapplyInfo .howtoapplyHeading h2{font-size:28px;}
		.howtoapplyInfo .howtoapplyHeading h4{font-size:18px;}
    }
</style>

<section class="howtoapplySection">
    <div class="wrapper">
        <div class="howtoapplyData">
            <div class="secHeading">
                <h1 class="colorW playfair font60"><?php echo get_field('page_heading'); ?></h1>
				<p class="colorW rubik font20">Make the most out of Magic Sparkles and Magic Twinkles</p>
            </div>

            <div class="howtoapplyContent">
                <?php if (have_rows('how_to_apply_content')) : ?>
                    <?php while (have_rows('how_to_apply_content')) : the_row(); ?>
                        <div class="howtoapplyBoxes">
                            <?php
                            $value = get_sub_field("video_link");
                            if ($value) { ?>
                                <a data-fancybox="" href="<?php echo get_sub_field('video_link'); ?>">
                            <?php } else { ?>
                                <a href="<?php echo get_sub_field('blog_link'); ?>">
                            <?php } ?>

                            
                                <div class="howtoapplyImg">
                                    <?php $contentimage = get_sub_field('content_image');
                                    if (!empty($contentimage)) : ?>
                                        <img src="<?php echo esc_url($contentimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($contentimage['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="howtoapplyInfo">
                                    <div class="howtoapplyInfoImg">
                                        <?php $smallimage = get_sub_field('small_image');
                                        if (!empty($smallimage)) : ?>
                                            <img src="<?php echo esc_url($smallimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($smallimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="howtoapplyHeading">
										<?php $content = get_sub_field('content_title'); echo substr($content, 0, 100); ?>
<!--                                         <p class="colorW rubik font20 fontW500"><?php echo get_sub_field('content_title'); ?></p> -->
<!--                                         <p class="colorW rubik font16"><?php echo get_sub_field('date_and_time'); ?></p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>