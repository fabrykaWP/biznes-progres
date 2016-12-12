<?php
/*
* Section display section with Case Study and Reference on 
* page templete Home.
*
*/
?>
<section class="clients section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 clients__case-studys">
				<div class="section__title section__title--opposed">
					Case study
				</div>
				<div class="clients__content">
					
					<?php get_template_part( 'parts/part', 'caseStudy' ); ?>

				</div>
			</div>
			<div class="col-md-6 clients__reference">
				<div class="section__title section__title--opposed">
					Referencje
				</div>
			</div>
		</div>
	</div>
</section>