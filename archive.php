<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 */

get_header(); ?>

<!-- TODO: finish customizing this page -->

<div class="container">

	<div class="wrap clearfix">

		<main id="content" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- Article -->
				<article <?php post_class( 'clearfix' ); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

					<?php  
						get_template_part( 'content' );
					?>

				</article>

			<?php endwhile; ?>

				<?php if ( $wp_query->max_num_pages > 1 ) : ?>

					<!--Pagination-->
					<div class="pagination">

						<?php if ( function_exists( 'wp_pagenavi' ) ) : ?>

							<?php wp_pagenavi(); ?>

						<?php else :
						
							the_posts_navigation( array(
								'prev_text' => '<span>&larr;</span> ' . esc_html__( 'Older Posts', 'endlist' ) .'',
								'next_text' => esc_html__( 'Newer Posts', 'endlist' ).' <span>&rarr;</span>'
							) );
						endif; ?>
					</div>

				<?php endif; ?>

			<?php endif; ?>
		
		</main>
	
	</div>
	
</div>
			
<?php get_footer();
