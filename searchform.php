<?php
/**
 * Template for displaying search forms in Fancy Lab
 *
 * @package Fancy Lab

 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentysixteen' ); ?></span>

	</label>
	<input type="search" class="search-field" placeholder="Pesquisar" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
	<input type="hidden" value="product" name="post_type" id="post_type">
</form>
