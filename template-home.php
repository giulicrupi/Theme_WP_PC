<?php 

/*
Template Name: Home Page
*/

get_header();
?>

<section class="slider">
	<?php echo do_shortcode('[rev_slider alias="slide principal"]'); ?>
</section>
<section class="sect2">
	<div class="container">
		<div class="title"><p>Lançamentos da Loja</p> <hr></div>
		<div class="produtos">
		    <div class="lancamento">
		    <?php
		    $args = array(
		        'post_type' => 'product',
		        'posts_per_page' => 6,
		        
		    );
		    $loop = new WP_Query($args);
		    while ($loop->have_posts()) : $loop->the_post();
		        global $product; ?>
		        
		            <div class="item">
		            	<div class="conteudo">
			                <div class="image">
			                	 <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
			                	 		<?php woocommerce_show_product_sale_flash($post, $product); ?>
					                    <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
					                    else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" class="img-fluid"/>'; ?>               	 	
			                	 </a>	
			                </div>
			                <div class="desc">
			                	<p class="categoria"><?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '.</span>' ); ?></p>
			                    <p class="titulo"><?php the_title(); ?></p>
			                    <div class="descricao"><?php the_excerpt(); ?> </div>
			                    <span class="price"><?php echo $product->get_price_html(); ?></span>
			                    <?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>

			                </div>						            		
		            	</div>
		            </div>						        	

		        
		    <?php endwhile; ?>
		    <?php wp_reset_query(); ?>
		</div>
		<!--/.products-->							
		</div>
	</div>
</section>
<section class="sect3">
	<div class="container">
		<div class="title"><p>Produtos Populares</p> <hr></div>
		<?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity"]' ); ?>
	</div>
</section>
<section class="sect4">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<a href="#">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/eletronicos.jpg" alt="" class="img-fluid">
				</a>
			</div>
			<div class="col-lg-6">
				<a href="#">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/08/hospitalara.jpg" alt="" class="img-fluid">
				</a>
			</div>			
		</div>
	</div>
</section>
<section class="sect5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 alinhar">
				<div class="conteudo">
					<p class="sub-title">Sobre nós</p>
					<p class="title">Conheça um pouco sobre a nossa história</p>
					<div class="texto">
						<p>Estamos a mais de 10 anos mudando a vida das pessoas, com produtos de qualidade com o preço baixo.</p>
						<p>O Fundador da PC PRodutos Hospitalares, Pietro Crupi, sempre esteve envolvido em vendas de produtos hospitalares....</p>
					</div>
					<div class="botao">
						<a href="#">
							<button>Saiba mais</button>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="img" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2022/08/aprelho.jpg);">
					
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>