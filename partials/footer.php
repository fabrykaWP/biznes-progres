<footer class="footer">
	<div class="footer__company">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer__logo">
						<img src="<?php echo IMG_PATH . '/logo-footer.png' ?>" alt="" class="img-responsive">
					</div>
				</div>
				<div class="col-md-9">
					<div class="footer__title">Masz pytania? wątpliwości?</div>

						<?php get_template_part( 'parts/part', 'fastContact' ); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div>
						Copyright 2016 By BiznesProgres. All rights reserved.
					</div>
				</div>
				<div class="col-md-6 txt-right">
					Created by <a href="http://www.fabrykawp.pl">fabrykaWP.pl</a>
				</div>
			</div>
		</div>
	</div>
</footer><!-- /.footer -->