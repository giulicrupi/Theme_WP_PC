<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <header>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crupi
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header class="fixed-top">
			<section class="top-bar">
				<div class="container-fluid">
					<div class="row ">
						<div class="col-lg-3 col-0 alinhar" id="desk">
							<div class="sociais">
								<div class="rede">
									<div class="topico">
										<a href="#">
											<i class="fa-brands fa-facebook-f"></i>
										</a>										
									</div>		
								</div>
								<div class="rede">
									<div class="topico">
										<a href="#">
											<i class="fa-brands fa-instagram"></i>
										</a>										
									</div>		
								</div>	
								<div class="rede">
									<div class="topico">
										<a href="#">
											<i class="fa-brands fa-whatsapp"></i>
										</a>										
									</div>		
								</div>
								<div class="rede">
									<div class="topico">
										<a href="#">
											<i class="fa-brands fa-facebook-messenger"></i>
										</a>										
									</div>
								</div>																								
							</div>			
						</div>
						<div class="col-lg-5 col-7 alinhar">
							<?php get_search_form(); ?>
							
						</div>
						<div class="col-lg-4 col-5 text-right">
							<div class="account">
								<div class="navbar-expand">
									<ul class="navbar-nav float-right">
										<?php if(is_user_logged_in()): ?>
										<li>
											<a class="nav-link" href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') )); ?>"> Minha conta</a>
										</li>
										<li>
											<a class="nav-link" href="<?php echo esc_url( wp_logout_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ) ); ?>">sair</a>
										</li>
										<?php else: ?>
										<li>
											<a class="nav-link" href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id') )); ?>"><i class="fa-solid fa-user"></i> Login / Cadastre-se</a>
										</li>												
										<?php endif; ?>											
									</ul>
								</div>								
							</div>

						</div>						
					</div>
				</div>
			</section>
			<section class="menu">

				<nav class="navbar navbar-expand-md navbar-light " role="navigation">
				  <div class="container">
				    <a class="navbar-brand" href="<?php echo site_url(); ?>">
				    	<img src="<?php echo get_template_directory_uri(); ?>/svg/logo.svg" alt="" class="img-fluid">
				    </a>	

					    <div class="carrinho" id="mob">
					    	<a href="<?php echo wc_get_cart_url(); ?>"><span class="carrinho-icone"><i class="fa-solid fa-cart-shopping"></i></span>
					    	<span class="quantidade"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>
					    </div>					    			  	
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
				        <span class="navbar-toggler-icon"></span>
				    </button>

				        <?php
				        wp_nav_menu( array(
				            'theme_location'    => 'crupi_main_menu',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse',
				            'container_id'      => 'bs-example-navbar-collapse-1',
				            'menu_class'        => 'nav navbar-nav',
				            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				            'walker'            => new WP_Bootstrap_Navwalker(),
				        ) );
				        ?>
					    <div class="carrinho" id="desk">
					    	<a href="<?php echo wc_get_cart_url(); ?>"><span class="carrinho-icone"><i class="fa-solid fa-cart-shopping"></i></span>
					    	<span class="quantidade"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>
					    </div>				        
				    </div>

				</nav>						
			
			</section>

		</header>


		<div class="whatsapp-fixo">
			<a href="#">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/whatsapp.png" alt="" class="img-fluid">
			</a>
		</div>
