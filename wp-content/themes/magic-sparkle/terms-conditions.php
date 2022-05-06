<?php get_header(); /*Template Name: Terms & Conditions*/ ?>

<section class="faqsSection">
	<div class="wrapper">
		<div class="faqsContent">
			<div class="secHeading">
				<h1 class="fontW500 font60 playfair"><?php the_title(); ?></h1>
			</div>
			<div class="termsCondition">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>