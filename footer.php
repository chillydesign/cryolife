			</div> <!-- main -->
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="footer-top">
					<div class="wrapper">
						<div class="row">
							<div class=" col-sm-6 map">
								<!-- <h4>Nous trouver</h4>
								<div class="footer-note">Rue Louis-de-Montfalcon 2 Bis, 1227 Carouge</div> -->
								<?php echo do_shortcode('[chilly_map location="Rue Louis-de-Montfalcon 2 Bis, 1227 Carouge, Switzerland"]'); ?>
								<div class="address">CRYO LIFE, Rue Louis-de-Montfalcon 2 Bis, 1227 Genève</div>
							</div>
							<div class=" col-sm-6 contact">
								<!-- <h4>Contactez-nous</h4>
								<div class="footer-note">Envoyez-nous un message via notre formulaire</div> -->
								<?php echo do_shortcode('[contact-form-7 id="101" title="Contact form 1"]'); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="footer-bottom">
					<div class="wrapper">
						<div class="row">
							<div class="col-xs-4">
								<span class="suivez-nous"> Suivez-nous</span>
								<span style="display:inline-block">
									<a target="_blank" href="https://facebook.com/cryolife.ch" class="facebooklink">Facebook</a>
									<a target="_blank" href="https://twitter.com/cryolife_ch" class="twitterlink">Twitter</a>
									<a target="_blank" href="https://www.instagram.com/cryolifegeneve" class="instagramlink">Instagram</a>
								</span>
							</div>
							<div class="col-xs-8">
								<p class="copyright">Website by <a href="http://www.webfactor.ch" id="bsf"><span style="font-weight:bold">Web</span>Factor</a></p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->


			<?php $show_popup = get_field('show_popup', 'option'); ?>

			<?php if ($show_popup) : ?>
				<div class="popup_message" id="home_page_message">
					<?php //echo do_shortcode('[contact-form-7 id="411" title="Inscription liste"]'); 
					?>
					<?php echo get_field('popup', 'option'); ?>
					<a href="#" class="cancel_message">X</a>
				</div>
			<?php endif; ?>





			<!-- <script src="//code.jquery.com/jquery-latest.js"></script> -->
			<?php $tdu = get_template_directory_uri(); ?>
			<script src="<?php echo $tdu; ?>/js/jquery.matchHeight.js" type="text/javascript"></script>
			<script src="<?php echo $tdu; ?>/js/jquery.bxslider.min.js"></script>
			<script src="//cdn.rawgit.com/noelboss/featherlight/1.3.5/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
			<script src="//cdn.rawgit.com/noelboss/featherlight/1.4.0/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>

			<script>
				(function(i, s, o, g, r, a, m) {
					i['GoogleAnalyticsObject'] = r;
					i[r] = i[r] || function() {
						(i[r].q = i[r].q || []).push(arguments)
					}, i[r].l = 1 * new Date();
					a = s.createElement(o),
						m = s.getElementsByTagName(o)[0];
					a.async = 1;
					a.src = g;
					m.parentNode.insertBefore(a, m)
				})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

				ga('create', 'UA-82356833-1', 'auto');
				ga('send', 'pageview');
			</script>

			<?php wp_footer(); ?>

			</body>

			</html>