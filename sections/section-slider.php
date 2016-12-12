<?php
/*
* Section display Slider in page tempalet Home.
*
* This section need ACF PRO - Section Slider
*/
?>

<section class="slider">

	<?php /* Sliders */ ?>
	<div class="slider__image">

		<?php
		if( have_rows('sliders') ):
		    while ( have_rows('sliders') ) : the_row(); ?>

				<div style="background-image: url(<?php the_sub_field('slider_bg'); ?>);">
					<?php the_sub_field('slider_over-title'); ?>
					<div class="container">						
						<div class="slider__title">

							<?php the_sub_field('slider_title'); ?>

						</div>

						<div class="silder__sub-title">
							
							<?php the_sub_field('slider_subtitle'); ?>

						</div>
					</div>
				</div>

		    <?php endwhile;
		else :
		    // no rows found
		endif;
		?>

	</div><!-- end .slider__image -->

	<?php /* Slider navigation */ ?>
	<div class="slider__bg">
		<div class="container">
			<div class="slider__nav">

				<?php
				if( have_rows('sliders') ):
				    while ( have_rows('sliders') ) : the_row(); ?>

						<div>
							<div class="slider__nav__txt">
								<i class="fa fa-mobile" aria-hidden="true"></i> <span><?php the_sub_field('slider_over-title'); ?></span>
							</div>
						</div>

				    <?php endwhile;
				else :
				    // no rows found
				endif;
				?>

			</div><!-- end .slider__nav -->
		</div><!-- end .container -->
	</div><!-- end .slider__bg -->
</section>