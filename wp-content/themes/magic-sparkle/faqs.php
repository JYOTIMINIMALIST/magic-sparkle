<?php get_header(); /*Template Name: FAQs*/ ?>

<section class="faqsSection">
	<div class="wrapper">
		<div class="faqsContent">
			<div class="secHeading">
				<h1 class="fontW500 font60 playfair"><?php echo get_field('section_heading'); ?></h1>
			</div>
			<div class="faqsData">
				<div class="accordion_container">
					<?php if( have_rows('faqs_content') ): ?>
						<?php $counter=1; while( have_rows('faqs_content') ): the_row(); ?>
							<div class="faqsQA">
								<div class="accordion_head">
						    		<p class="font24 fontW400 colorGy"><?php echo get_sub_field('faq_question'); ?></p> <span class="plusminus font40">+</span>
						    	</div>
						    	<div class="accordion_body" <?php if($counter==1) { echo 'style="display:block"'; } ?> style="display: none;">
						        	<?php echo get_sub_field('faq_answer'); ?>
						    	</div>
							</div>
						<?php $counter=$counter+1; endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="loadCTAText">
					<a href="" id="loadMore" class="ctaTwo font18 fontW400 sparkleCustom"><?php echo get_field('loading_cta_text'); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>