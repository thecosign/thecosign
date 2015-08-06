<?php
/**
 * The template for displaying all single posts.
 *
 * @package Stacker
 */

get_header(); ?>

	<div class="masonryinside">
		<div class="wrapper">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // end of the loop. ?>
		</div>
        <?php stacker_post_nav(); ?>
	</div>
<?php get_footer(); ?>