<?php
/**
 * @package Stacker
 */
?>

<div <?php post_class( 'inside item' ); ?>>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post-page', array( 'class' => 'featured-image' ) ); ?></a>
	
	<div class="contentwrap">

	<h2 class="itemtitle"><?php the_title(); ?></h2>

	<div class="meta">
		<?php
		$categories = get_the_category();
		if ( !empty( $categories ) ) {
			foreach ( $categories as $index => $category ) {
				echo '<a href="' . get_category_link( $category ) . '">' . $category->name . '</a>' . ( $index !== count( $categories ) - 1 ? ' / ' : '' );
			}
		}
		?>&nbsp;&nbsp;/&nbsp;&nbsp;<a class="price" href="<?php the_field('product_url'); ?>"><?php the_field('price'); ?></a>
	</div> <!-- End Meta -->

	<div id="content">
		<?php
			the_content();
		?>

		<a class="yellowbutton" href="<?php the_field('affiliate_link'); ?>"><?php the_field('affiliate_text'); ?></a>
		<a class="graybutton" href="https://twitter.com/intent/tweet?url=<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>&amp;text=<?php echo get_the_title(); ?>&amp;via=thecosignco" target="_blank">Tweet</a>

		<div id="bottommeta">
			
		</div>
	</div>

	</div> <!-- End Contentwrap -->