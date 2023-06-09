						            <div class="col-lg-3">

						                <a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

						                    <?php woocommerce_show_product_sale_flash($post, $product); ?>

						                    <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
						                    else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />'; ?>

						                    <h3><?php the_title(); ?></h3>

						                    <span class="price"><?php echo $product->get_price_html(); ?></span>

						                </a>

						                <?php woocommerce_template_loop_add_to_cart($loop->post, $product); ?>
						            </div>