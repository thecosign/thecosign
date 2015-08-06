<?php
/**
 * @package Stacker
 */
?>

<div class="masonryinside">
	<div class="wrapper">
		<h2 class="search-title">
			<?php _e( 'Aw snap, there&rsquo;s nothing here!', 'stacker' ); ?>
		</h2>

		<div class="inside searchresult">
			<p>
				<?php _e( 'Please try searching for something else below.', 'stacker' ); ?>
			</p>
			<?php get_search_form(); ?>
			
		</div>
	</div>
</div>