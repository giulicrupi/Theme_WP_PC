<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crupi
 */
?>
		<footer>
			<section class="footer-widgets">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="logo">
								<img src="<?php echo get_template_directory_uri(); ?>/svg/logo.svg" alt="" class="img-fluid">

							</div>
							<p class="pague"><small>Pague com:</small></p>
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/cartoes.png" alt="" class="img-fluid cartoes">
						</div>
						<div class="col-lg-4 text-center">
							<div class="conteudo-footer">
								<p class="title-footer">Site</p>
								<p class="link-footer"><a href="#">Home</a></p>
								<p class="link-footer"><a href="#">Sobre nós</a></p>
								<p class="link-footer"><a href="#">Loja</a></p>
								<p class="link-footer"><a href="#">Contato</a></p>
								<p class="link-footer"><a href="#">Minha conta</a></p>
								<p class="link-footer"><a href="#">Carrinho</a></p>
							</div>
						</div>
						<div class="col-lg-3 text-center">
							<div class="conteudo-footer">
								<p class="title-footer">Loja</p>
								<p class="link-footer"><a href="#">Tecnologia</a></p>
								<p class="link-footer"><a href="#">Hospitalares</a></p>
								<p class="link-footer"><a href="#">Promoções</a></p>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="conteudo-footer">
								<p><small>Selos:</small></p>
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/compra-segura.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="copyright">
				<div class="container">
					<div class="row">
						<div class="copyright-text col-12 col-md-6"><p><small>20<?php echo date('y'); ?> Pc Produtos Hospitalares - Todos os direitos reservados. </small></p></div>
						<div class="footer-menu col-12 col-md-6 text-left text-md-right">
							<?php 
								wp_nav_menu(
									array(
										'theme_location'	=> 'crupi_footer_menu'
									)
								);
							 ?>
						</div>
					</div>
				</div>
			</section>
		</footer>
	</div>
<?php wp_footer(); ?>


<script>
          $(".lancamento").slick({
      centerMode: false,
      slidesToShow:2,
      slidesToScroll: 2,
      arrows:true,
      dots:true ,  
      
    responsive: [
      {
        breakpoint: 500,
        settings: {
        slidesToShow: 1,
        
        
        }
      }
    ]});       	
</script>
</body>
</html>