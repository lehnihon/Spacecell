	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row main">
					<div class="col-md-6 produtos clearfix">
						<strong>Produtos Space Cell</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Eletrônicos</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."localizacao" ); ?>">Celulares</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."blog" ); ?>">Celulares baratos</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">Lenox</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">Mallory</a></li>
						</ul>									
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Black Berry</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."localizacao" ); ?>">Sony</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."blog" ); ?>">LG</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">Motorola</a></li>
						</ul>									
					
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Nokia</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."localizacao" ); ?>">Samsung</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."blog" ); ?>">ZTE</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">Apple</a></li>
						</ul>															
					</div>
					<div class="col-md-3">
						<strong>Sobre a Space Cell</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."institucional" ); ?>">O Restaurante</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."localizacao" ); ?>">Localização</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."blog" ); ?>">Blog</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">Contato</a></li>
						</ul>	
					</div>
					<div class="col-md-3">
						<strong>Nossas Redes Sociais</strong><br><br>
						<ul class="redes_sociais_bot">
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="instagram"><a target="_blank" href="#"></a></li>
							<li class="twitter"><a target="_blank" href="#"></a></li>
							<li class="facebook"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
				</div><!-- .row -->
				<div class="row outros">
					<div class="col-md-6">
						<strong>Formas de Pagamento</strong><br><br>
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer-pgto1.png"?>" />
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer-pgto2.png"?>" />
					</div>
					<div class="col-md-3">
						<strong>Site Seguro</strong><br><br>
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer-blindado.jpg"?>" />
					</div>
					<div class="col-md-3">
						<strong>Televendas</strong><br><br>
						<p>
							11 XXXX-XXXX	
						</p>
					</div>
				</div>
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; Copyright <?php echo date('Y') ?> - Aroma e Sabor | <a target="_blank" href="http://agenciarino.com.br/">Site desenvolvido pela Agência Rino.</a>
					</div>
					<div class="col-md-2">
						<a target="_blank" href="http://agenciarino.com.br/"><img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer-rino.png"?>" /></a>	
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

