<?php
/**
 * Template Name: Single Column
 *
 * @package WordPress
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="masonryinside">
	<div class="singlecol">
		<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
	</div>
</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>