<?php get_header(); /*Template Name: Where To Buy*/ ?>

<section class="wheretobuySection">
	<div class="wrapper">
		<div class="wheretobuyContent">
			<div class="secHeading text-center">
				<h1 class="font60 colorW fontW600 playfair"><?php the_title(); ?></h1>
			</div>
			<div class="wheretobuyData text-center">
				<select id="size_select">
				    <option value="option0">Select Country</option>
			    	<?php if( have_rows('country_data') ): ?>
						<?php $counter=1; while( have_rows('country_data') ): the_row(); ?>
							<option value="option<?php echo $counter; ?>"><?php echo get_sub_field('country_name'); ?></option>
						<?php $counter=$counter+1; endwhile; ?>
					<?php endif; ?>
				    <!-- <option value="option2">India</option> -->
				</select>
				<div class="countryData">
					<!--Size dropdown content-->
					<div id="option0" class="size_chart">
						<div class="countryStoreData">
							<img src="<?php bloginfo('template_directory'); ?>/images/location-gradient.png" alt="">
							<p class="font20 fontW300 colorW">Please select a country to see your buying options</p>
						</div>
					</div>
					<?php if( have_rows('country_data') ): ?>
				        <?php $counter=1; while( have_rows('country_data') ): the_row(); ?>
				            <div id="option<?php echo $counter; ?>" class="size_chart">
				            	<?php if( have_rows('country_content') ): ?>
                      				<?php while( have_rows('country_content') ): the_row();?>
                        				<?php if( get_row_layout() == 'registered_country' ): ?>
                        					<div class="countryStoreData">
												<ul>
													<?php if( have_rows('registered_country_data') ): ?>
								                      	<?php while( have_rows('registered_country_data') ): the_row();?>
								                        	<?php if( get_row_layout() == 'retailer_data' ): ?>
								                        		<li>
																	<div class="storeName">
																		<h3 class="font18 fontW300 colorW"><?php echo get_sub_field('retailer_name'); ?></h3>
																		<p class="font16 fontW300"><?php echo get_sub_field('retailer_text'); ?></p>
																	</div>
																	<div class="storeLink"><a href="<?php echo get_sub_field('cta_link'); ?>" target="_blank" class="visitCTA"><?php echo get_sub_field('cta_text'); ?></a></div>
																</li>

								                        	<?php elseif( get_row_layout() == 'distributor_data' ): ?>
								                        		<li>
																	<div class="storeName">
																		<h3 class="font18 fontW300 colorW"><?php echo get_sub_field('distributor_name'); ?></h3>
																		<p class="font16 fontW300"><?php echo get_sub_field('distributor_text'); ?></p>
																	</div>
																	<div class="storeLink"><a href="#<?php echo get_sub_field('popupid'); ?>" class="contactCTA"><?php echo get_sub_field('cta_text'); ?></a></div>
																</li>

								                        	<?php endif;?>
								                      	<?php endwhile; ?>
								                    <?php endif; ?>
												</ul>
											</div>

				                        <?php elseif( get_row_layout() == 'non_registered_country' ): ?>
				                        	<div class="countryStoreData">
										  		<p class="font20 fontW300 colorW"><?php echo get_sub_field('description'); ?></p>
										  		<div class="notifyForm">
										  			<p class="font18 fontW300 colorW">Email Address*</p>
										  			<form action="/action_page.php">
											  			<div class="formFields">
											  				<div class="forminputField">
											  					<input type="email" id="email" name="email" placeholder="ENTER EMAIL ADDRESS">
											  				</div>
											  				<div class="formsubmitField">
											  					<input type="submit" value="NOTIFY ME">
											  				</div>
											  			</div>
													</form> 
										  		</div>
										  	</div>
                          
				                        <?php endif;?>
				                    <?php endwhile; ?>
			                    <?php endif; ?>
							</div>
						<?php $counter=$counter+1; endwhile; ?>
					<?php endif; ?>
				</div>
					</div>
			<div class="wheretobuyMapSec">
				<img src="<?php bloginfo('template_directory'); ?>/images/map.svg" alt="">
			</div>
		</div>
	</div>
</section>

<?php if( have_rows('country_data') ): ?>
	<?php while( have_rows('country_data') ): the_row(); ?>
		<?php if( have_rows('country_content') ): ?>
          	<?php while( have_rows('country_content') ): the_row();?>
            	<?php if( get_row_layout() == 'registered_country' ): ?>

            		<?php if( have_rows('registered_country_data') ): ?>
          				<?php while( have_rows('registered_country_data') ): the_row();?>
            				<?php if( get_row_layout() == 'distributor_data' ): ?>
            					<div id="<?php echo get_sub_field('popupid'); ?>" class="overlay">
									<div class="popup">
										<div class="popup_box">
											<h2 class="font40 fontWeight500 colorW"><?php echo get_sub_field('distributor_name'); ?></h2>
											<h4 class="font24 fontWeight400 colorW"><?php echo get_sub_field('distributor_address'); ?></h4>
											<a class="close" href="#">&times;</a>
											<div class="content">
												<p class="font18 fontWeight300 colorW"><?php echo get_sub_field('distributor_description'); ?></p>
											</div>
										</div>
										<div class="popup_footer">
											<div class="popup_footer_icon">
												<a href="<?php echo get_sub_field('distributor_link'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/popup-website.png"></a>
											</div>
											<div class="popup_footer_icon">
												<a href="<?php echo get_sub_field('distributor_email_id'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/popup-email.png"></a>
											</div>
											<div class="popup_footer_icon">
												<a href="<?php echo get_sub_field('distributor_phone_no'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/popup-phone.png"></a>
											</div>
										</div>
									</div>
								</div>
            				
            				<?php endif;?>
          				<?php endwhile; ?>
        			<?php endif; ?>

            	<?php endif;?>
          	<?php endwhile; ?>
        <?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>