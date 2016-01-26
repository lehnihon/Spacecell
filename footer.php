	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row main">
					<div class="col-md-6 produtos clearfix">
						<strong>Produtos Space Cell</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/eletronicos" ); ?>">Eletrônicos</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/celulares" ); ?>">Celulares</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/celulares-baratos" ); ?>">Celulares baratos</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/lenox" ); ?>">Lenox</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/mallory" ); ?>">Mallory</a></li>
						</ul>									
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/black-berry" ); ?>">Black Berry</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/sony" ); ?>">Sony</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/lg" ); ?>">LG</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/motorola" ); ?>">Motorola</a></li>
						</ul>									
					
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/nokia" ); ?>">Nokia</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/samsung" ); ?>">Samsung</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/zte" ); ?>">ZTE</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."categoria/apple" ); ?>">Apple</a></li>
						</ul>															
					</div>
					<div class="col-md-3">
						<strong>Sobre a Space Cell</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."institucional" ); ?>">Institucional</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."politica-de-privacidade" ); ?>">Política de Privacidade</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."troca-e-devolucao" ); ?>">Troca e Devolução</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">Fale Conosco</a></li>
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

