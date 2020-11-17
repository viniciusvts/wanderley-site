<?php do_action( 'cpotheme_after_main' ); ?>

			<?php get_sidebar( 'footer' ); ?>

			<?php do_action( 'cpotheme_before_footer' ); ?>
			<footer id="footer" class="footer secondary-color-bg dark">
				<div class="container">
					<p>&copy; <?php echo date('Y'); ?> - Todos os direitos reservados</p>
				</div>
			</footer>
			<?php //do_action( 'cpotheme_after_footer' ); ?>

			<div class="clear"></div>
			<nav class="navbar fixed-bottom third-color-bg dark pt-0 pb-0">
				<div class="container text-center menu-bottom-fixed">
					<div class="col-4 col-sm-3 col-md-3 text-right">
						<p class="mt-0 mb-0 faa">Atendimento<br><strong>Online</strong></p>
					</div>
					<div class="col-4 col-sm-3 col-md-3">
						<a data-toggle="modal" data-target="#faleConosco" href="#" title="Fale Conosco">
							<p><i class="far fa-envelope"></i><br>Email</p>
						</a>
					</div>
					<div class="col-4 col-sm-3 col-md-3">
						<div class="button-whatsapp">
							<a data-toggle="modal" data-target="#whatsapp" href="#" title="Nosso WhatsApp">
								<p><i class="fab fa-whatsapp"></i><br>Whatsapp</p>
							</a>
						</div>
					</div>
				</div>
			</nav>
			<!-- Modal -->	
			<div class="modal fade" id="whatsapp" tabindex="0" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header pt-2 pb-0">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body pt-0">
							<div role="main" id="atendimento-por-whatsapp-do-site-wanderley-d2c312411a8f72bc478a"></div>
							<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
							<script type="text/javascript"> new RDStationForms('atendimento-por-whatsapp-do-site-wanderley-d2c312411a8f72bc478a', 'UA-157772219-2').createForm();</script>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="faleConosco" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header pt-2 pb-0">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body pt-0">
							<div role="main" id="atendimento-por-email-do-site-wanderley-a828a8ef12dd470cb377"></div>
							<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
							<script type="text/javascript"> new RDStationForms('atendimento-por-email-do-site-wanderley-a828a8ef12dd470cb377', 'UA-157772219-2').createForm();</script>
					</div>
				</div>
			</div>
		</div><!-- wrapper -->
		<?php do_action( 'cpotheme_after_wrapper' ); ?>
	</div><!-- outer -->
	<?php wp_footer(); ?>
</body>
</html>
