<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<?php if (get_the_post_thumbnail()): ?>
			<div class="featured-image">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php endif; ?>

			<div class="text">
				
				<?php the_content() ?>
				<?php
?>
			</div>
		</main><!-- #main -->
		
	</div><!-- #primary -->

<?php
get_footer();
