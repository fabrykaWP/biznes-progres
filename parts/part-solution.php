<?php
/*
* Part to display one solution squer in section-solutions.php
*/
?>

<style>
	#solution-<?php the_id(); ?>:after { 
		background-image: url(<?php the_post_thumbnail_url(); ?>);
		background-size: cover;
		-webkit-filter: saturate(0%) brightness(<?php the_field('jasność'); ?>%) contrast(<?php the_field('kontrast'); ?>%);
    	filter: saturate(0%) brightness(<?php the_field('jasność'); ?>%) contrast(<?php the_field('kontrast'); ?>%);
  		z-index: 2;
  		content: '';
   		height: 100%;
    	position: absolute;
    	width: 100%;
	}
	#solution-<?php the_id(); ?>:hover:after {
		background-image: none;
	}
</style>

<div class="solution col-md-3">
	<div id="solution-<?php the_id(); ?>" class="solution__bg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		<div class="solution__title">
			
			<?php the_title(); ?>

		</div>
		<div class="solution__title solution__title--hover">
			
			<?php the_title(); ?>

		</div>
	</div>
</div>