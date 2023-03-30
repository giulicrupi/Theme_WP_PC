<?php 


function crupi_modificacoes(){
	//**************** CONTAINER AND ROW ******************/

	/** 
	* Modify WooCommerce opening and closing HTML tags
	* We need Bootstrap-like opening/closing HTML tags
	*/
	add_action( 'woocommerce_before_main_content', 'crupi_open_container_row', 5 );
	function crupi_open_container_row(){
		echo '<div class="container shop-content"><div class="row">';
	}

	add_action( 'woocommerce_after_main_content', 'crupi_close_container_row', 5 );
	function crupi_close_container_row(){
		echo '</div></div>';
	}

	if( is_shop() ){

		//**************** SIDEBAR ******************/


		
		remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail' );

		add_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_thumbnail');

		add_action( 'woocommerce_before_shop_loop_item_title', 'crupi_add_close_cont_produtos', 3 );

		function crupi_add_close_cont_produtos(){
			echo '<div class="desc-prod">';
		}	


		add_action( 'woocommerce_after_shop_loop_item', 'crupi_add_close2_cont_produtos', 3 );

		function crupi_add_close2_cont_produtos(){
			echo '</div>';
		}				

		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
		add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart' );



		add_action( 'woocommerce_before_main_content', 'crupi_add_sidebar_tags', 6 );
		function crupi_add_sidebar_tags(){
			echo '<div class="sidebar-shop col-lg-3 col-md-4 order-1 order-md-1">';
		}

		// Put the main WC sidebar back, but using other action hook and on a different position
		add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

		add_action( 'woocommerce_before_main_content', 'crupi_close_sidebar_tags', 8  );
		function crupi_close_sidebar_tags(){
			echo '</div>';
		}	

		add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
		// add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_output_content_wrapper', 2 );


add_action('woocommerce_after_shop_loop_item_title', 'get_current_product_category', 0);

function get_current_product_category(){

        global $post;

       $terms = get_the_terms( $post->ID, 'product_cat' );

        $nterms = get_the_terms( $post->ID, 'product_tag'  );

        foreach ($terms  as $term  ) {                    

            $product_cat_id = $term->term_id;              

            $product_cat_name = $term->name;            

            break;

        }

       echo '<p class="categoria">'. $product_cat_name .'</p>';

}		

	}

	if( is_front_page() ){add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 4 );}

	/** 
	* Remove the main WC sidebar from its original position
	* We'll be including it somewhere else later on
	*/
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );

	//**************** PRIMARY ******************/

	// Modify HTML tags on a shop page. We also want Bootstrap-like markup here (.primary div)
	add_action( 'woocommerce_before_main_content', 'crupi_add_shop_tags', 9 );
	function crupi_add_shop_tags(){
		if( is_shop() ){
			echo '<div class="col-lg-9 col-md-8 order-2 order-md-2">';
		} else{
			echo '<div class="col">';
		}
		
	}

	add_action( 'woocommerce_after_main_content', 'crupi_close_shop_tags', 4 );
	function crupi_close_shop_tags(){
		echo '</div>';
	}


}

add_action( 'wp', 'crupi_modificacoes' );