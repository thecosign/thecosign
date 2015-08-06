<?php
/**
 * @package Stacker
 */
?>

<?php if ( !is_tag( 'full' ) ) : ?>

<div <?php post_class( 'item' ); ?>>

	<a href="<?php the_permalink(); ?>"><?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail('full');
		}	 
		?></a>

		<div class="contentwrap">

	<h2 class="itemtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

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

	<div class="description">
		<?php the_excerpt(); ?>

		<a class="yellowbutton" href="<?php the_permalink(); ?>"><?php the_field('more_button'); ?></a>
		
	</div> <!-- End Description -->
</div> <!-- End Contentwrap -->
</div><!--End Post -->

<?php else : ?>

<div <?php post_class( 'full' ); ?>>

	<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'post-thumb', array( 'class' => '' ) );
		} else {
			?>
			<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/default.png"
				 alt="<?php the_title(); ?>"/>
		<?php } ?></a>

		<div class="contentwrap">

	<h2 class="itemtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

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

	<div class="description">
		<?php the_excerpt(); ?>

		<a class="yellowbutton" href="<?php get_the_ID(); ?>"><?php the_field('more_button'); ?></a>
	</div> <!-- End Description -->
	</div> <!-- End Contentwrap -->
</div><!--End Post -->

<?php endif; ?>