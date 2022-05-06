<?php get_header(); /*Template Name: Blog Details*/ ?>

<style>
    body {background: linear-gradient(287.56deg, #33154D 0%, #000132 100%);}
    .blogDetails {padding: 150px 0px;width: 90%;margin: 0 auto;}
    .blogDetails img {border-radius: 4px;}
    .blogarticleHeading p {opacity: 0.5;}
    .articleContent p {opacity: 0.5;} .blogdetailsData {display: flex; align-items: flex-start; justify-content: space-between;}
    .blogArticle {width: 60%; }
    .blogarticleHeading {margin: 38px 0px; }
    .blogarticleHeading h1 {margin-bottom: 10px; }
    .blogContent {margin-top: 45px; }
    .blogContent h3 {margin-bottom: 7px; }
    .relatedArticles {width: 36%; border-left: 2px solid rgba(255, 255, 255, 0.1); padding-left: 55px; }
    .articlesData {display: flex; align-items: center; justify-content: space-between; margin-bottom: 32px; }
    .articleImg {width: 32%; position: relative; }
    .articleContent {width: 64%; }
    .articleContent h3 {margin-top: 10px; }
    .articlesHeading {margin-bottom: 25px; }
    .blogContent h2, h3, h4 {color: #fff; font-size: 28px; font-weight: 500; margin-top: 40px; margin-bottom: 20px;}
    .blogContent p {font-size: 18px; margin-bottom: 20px; color: #fff; font-weight: 300; }
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
        .blogContent h2, h3, h4 {font-size: 22px; }
        .blogContent p {font-size: 16px;}
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
    }
</style>

<section class="blogDetails">
    <div class="wrapper">
        <div class="backcta">
            <a href="#" class="colorW font18 fontW400">< BACK</a>
        </div>
        <div class="blogdetailsData">
            <div class="blogArticle">
                <div class="blogarticleHeading">
                    <h1 class="colorW font60">The Best 8 Edible Glitter Cocktails</h1>
                    <p class="colorW font20 ">Posted on Jan 14, 2021 by Ankit Mehra</p>
                </div>
                <div class="blogImg">
                    <img src="<?php bloginfo('template_directory'); ?>/images/blog-detail.png" alt="">
                    <div class="shareCta">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blogs-share.png" alt=""></a>
                    </div>
                </div>
                <div class="blogContent">
                    <h3>Green Tea 101</h3>
                    <p>Tea comes in just behind water as the most consumed beverage in the world. All tea comes from the dried leaves of the Camellia sinensis bush. Although it is available in many different varieties, non-herbal teas fall into four basic categories: black, green, oolong and white. </p>
                    <p>Many of the health benefits come from tea’s powerful antioxidants, called flavonoids. There are more than 6,000 types of flavonoids, and one of the most common categories are catechins. Much of the research on tea has focused on green tea because when compared to black tea, green tea contains 3.5 times more catechins.</p>
                    <p>Green tea is made from mature tea leaves and is less processed than other teas. Since the leaves have not been fermented, but instead are dried and steamed, green tea can keep its high level of catechins. Epigallocatechin gallate (EGCG) is the most common catechin found in green tea and therefore has been the most researched.</p>
                    <p> You can consume green tea as a hot or cold beverage. It is also available in a more concentrated form called an extract. A green tea extract means that the active ingredients found in the green tea, such as the catechins, have been removed from the dried green tea leaves to produce a more concentrated form. Extracts are available in liquid, powder, capsule, or tablet forms. </p>
                    <h3>Health Benefits of Green Tea</h3>
                    <p>Green tea has been used in traditional Chinese and Indian medicine for thousands of years. Therefore, it is not surprising that many researchers have turned their interest to green tea. There are many studies supporting its health benefits for heart health, blood sugar control, memory enhancement, and many other conditions. Here are more details on five specific health benefits.</p>
                    <h3>Some Important Cautions About Green Tea</h3>
                    <p>You can consume the beneficial nutrients of green tea in many different forms such as teas, capsules, liquid extracts, and powders. It is important to remember that not all green tea products are created equally. Some types may contain only dry green tea leaves, while others may contain concentrated forms of one or more catechins. The number of catechins can vary significantly among green tea products. For example, research presented at the American Chemical Society found that some 16-ounce bottled teas contained fewer polyphenols than one cup of brewed tea.</p>
                    <p> Also, it is important to note that green tea can contain a substantial amount of caffeine unless you choose decaffeinated green tea products. Too much caffeine may make some people feel shaky, cause headaches, and interfere with sleep. The caffeine contained in one cup of green tea can vary according to the length of infusing time and the amount of tea infused.</p>
                    <p>The National Center for Complementary and Integrative Health reassures us that green tea is safe when consumed in moderation as a beverage. Green tea extract has been used safely for up to 2 years in various research studies in doses between 250–500 mg. There are some reports of mild liver problems by people taking green tea extracts in higher doses over the long term.</p>
                </div>
            </div>
            <div class="relatedArticles">
                <div class="articlesHeading">
                    <h5 class="colorW font28">Related Articles</h5>
                </div>
                <div>
                    <div>
                        <a href="#">
                            <div class="articlesData">
                                <div class="articleImg">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/articles-img-1.png" alt="">
                                    <div class="sharesmallCta">
                                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blogs-share.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="articleContent">
                                    <p class="font16 colorW">Jan 14, 2021 · 4 min read</p>
                                    <h3 class="font20 colorW">The Best 8 Edible Glitter Cocktails</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="articlesData">
                                <div class="articleImg">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/articles-img-2.png" alt="">
                                    <div class="sharesmallCta">
                                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blogs-share.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="articleContent">
                                    <p class="font16 colorW">Jan 14, 2021 · 4 min read</p>
                                    <h3 class="font20 colorW">The Best 8 Edible Glitter Cocktails</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="articlesData">
                                <div class="articleImg">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/articles-img-3.png" alt="">
                                    <div class="sharesmallCta">
                                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blogs-share.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="articleContent">
                                    <p class=" font16 colorW">Jan 14, 2021 · 4 min read</p>
                                    <h3 class="font20 colorW">The Best 8 Edible Glitter Cocktails</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="articlesData">
                                <div class="articleImg">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/articles-img-4.png" alt="">
                                    <div class="sharesmallCta">
                                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blogs-share.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="articleContent">
                                    <p class="font16 colorW">Jan 14, 2021 · 4 min read</p>
                                    <h3 class="font20 colorW">The Best 8 Edible Glitter Cocktails</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="articlesData">
                                <div class="articleImg">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/articles-img-5.png" alt="">
                                    <div class="sharesmallCta">
                                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blogs-share.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="articleContent">
                                    <p class="font16 colorW">Jan 14, 2021 · 4 min read</p>
                                    <h3 class="font20 colorW">The Best 8 Edible Glitter Cocktails</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>