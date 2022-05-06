<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Magic_Sparkle
 */

get_header();
?>

<style>
    body {background: linear-gradient(287.56deg, #33154D 0%, #000132 100%);}
    .blogDetails {padding: 150px 0px;width: 90%;margin: 0 auto;}
    .blogDetails img {border-radius: 4px;}
    .blogarticleHeading p {opacity: 0.5;}
    .articleContent p {opacity: 0.5;}
    .blogdetailsData {display: flex; align-items: flex-start; justify-content: space-between;}
    .blogArticle {width: 60%;}
    .blogarticleHeading {margin: 30px 0px;}
    .blogarticleHeading h1{margin-bottom: 10px;}
    .blogContent{margin-top: 45px;}
    .blogContent h2{color: #fff; font-size: 60px; font-weight: 500; margin-top: 40px; margin-bottom: 20px;}
    .blogContent h3{color: #fff; font-size: 40px; font-weight: 500; margin-top: 40px; margin-bottom: 20px;}
    .blogContent h4{color: #fff; font-size: 28px; font-weight: 500; margin-top: 40px; margin-bottom: 20px;}
    .blogContent p{font-size: 18px;margin-bottom: 20px;color: #fff;font-weight: 300;}
	.blogContent ul{padding-left: 15px;}	
	.blogContent li{font-size: 18px;margin-bottom: 20px;color: #fff;font-weight: 300;list-style: disc;}
    .relatedArticles {width: 36%; border-left: 2px solid rgba(255, 255, 255, 0.1); padding-left: 55px; }
    .articlesData {display: flex; align-items: center; justify-content: space-between; margin-bottom: 32px; }
    .articleImg {width: 32%; position: relative; }
    .articleContent {width: 64%; }
    .articleContent h3 {margin-top: 10px; }
    .articlesHeading {margin-bottom: 25px; }
    .shareCta {width: 35px; height: 35px; background-color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; right: 17px; top: 15px; margin: 0 auto; }
    .shareCta img {margin: 0 auto; width: 19px; }
    .sharesmallCta {width: 20px; height: 20px; background-color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; position: absolute; right: 8px; top: 9px; margin: 0 auto; }
    .sharesmallCta img {margin: 0 auto; width: 9px; }
    .blogImg {position: relative; }
    .backcta {margin-bottom: 40px; }
    .backcta a {position: relative; }
    .backcta a:hover {color: #fff; }
    .backcta a:before {content: ''; position: absolute; bottom: -3px; left: 0px; background: #fff; width: 0%; height: 2px; transition: .5s all ease-in-out; }
    .backcta a:hover:before {width: 100%; }
    /**********************************Media Query*************************************/
    @media all and (max-width:1600px) {
        .blogDetails {padding: 150px 0px 100px; }
        .articlesData {margin-bottom: 20px; }
        .blogContent h2{font-size: 40px; margin-top: 30px; margin-bottom: 15px;}
        .blogContent h3{font-size: 32px; margin-top: 30px; margin-bottom: 15px;}
        .blogContent h4{font-size: 22px; margin-top: 30px; margin-bottom: 15px;}
        .blogContent p{font-size: 16px;margin-bottom: 15px;}
    }
    @media all and (max-width:1400px) {
        .blogDetails {width: 100%;}
        .relatedArticles {padding-left: 25px;}
    }
    @media all and (max-width:900px) {
        .blogDetails {padding: 120px 0px 80px;}
        .blogdetailsData {display: block;}
        .blogArticle {width: 100%;}
        .relatedArticles {width: 100%;border-left: none;border-top: 2px solid rgba(255, 255, 255, 0.1);padding-left: 0px;margin-top: 30px;}
        .articlesHeading {margin: 30px 0px;}
        .articleImg {width: 20%;}
        .articleContent {width: 78%;}
    }
    @media all and (max-width: 640px) {
        .articleImg {width: 28%;}
        .articleContent {width: 70%;}
        .blogContent h2{font-size: 32px;}
        .blogContent h3{font-size: 28px;}
        .blogContent h4{font-size: 22px;}
    }
</style>

<section class="blogDetails">
    <div class="wrapper">
        <div class="backcta">
            <a onclick="history.back()" class="colorW font18 fontW400">< BACK</a>
        </div>
        <div class="blogdetailsData">
            <div class="blogArticle">
                <div class="blogarticleHeading">
                    <h1 class="colorW font60"><?php the_title(); ?></h1>
                    <p class="colorW font20 "><?php echo get_field('posted_field'); ?>Posted on Jan 14, 2021 by Ankit Mehra</p>
                </div>
                <div class="blogImg">
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>" alt="">
                    <!--<div class="shareCta">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blogs-share.png" alt=""></a>
                    </div>-->
                </div>
                <div class="blogContent">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="relatedArticles">
                <div class="articlesHeading">
                    <h5 class="colorW font28">Related Articles</h5>
                </div>
                <div>
                    <?php
                        $related_post = get_field('related_post');
                        if ($related_post) : ?>
                        <?php foreach ($related_post as $post) : setup_postdata($post); ?>
                            <div>
								<div class="articlesData">
									<div class="articleImg">
										<a href="<?php the_permalink();?>">
											<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="">
										</a>
									</div>
									<div class="articleContent">
										<a href="<?php the_permalink();?>">
											<p class="font16 colorW"><?php show_last_modified_date(); ?> · <?php echo reading_time(); ?> read</p>
											<h3 class="font20 colorW"><?php the_title(); ?></h3>
										</a>
									</div>
								</div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>