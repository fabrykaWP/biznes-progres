<?php
/*
* Section display all solution in grid on pge templete home.
*
*/
?>

<section class="section solutions">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="section__title">
					Rozwiązania
				</div>
				<div class="section__subtitle">
					Masz pytania? wątpliwości?
				</div>

				<?php get_template_part( 'parts/part', 'fastContact' ); ?>

			</div>

			<?php
			$args = array (
				'post_type' => 'solution',
				'posts_per_page' => '-1',
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
				$query->the_post(); ?>

				<?php get_template_part( 'parts/part', 'solution' ); ?>

			<?php }
			} else {
			// no posts found
			}
			wp_reset_postdata();
			?>

	</div>
</section>
