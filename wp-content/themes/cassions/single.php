<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Cassions
 */

get_header(); ?>

<div class="container">
	<div class="main-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">	
			<?php			
			if(have_posts()) the_post();
//			while ( have_posts() ) : the_post();				
				get_template_part( 'template-parts/content', 'single' );
	
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
	
//			endwhile; // End of the loop.
			?>	
			<div class="related-content">
				<div class="category-block-title"><h4 class="related-content-title">Bài viết liên quan</h4></div>
				<div class="bvlq-wrap">
					<?php
						$categories = get_the_category( $post->ID );
						$category_ids = array();					
						foreach ($categories as $key => $category) {
							array_push($category_ids, $category->term_id);
						}				
						$query = array(
						    "category__not_in" => $category_ids,
							'posts_per_page' =>  10
						);
						query_posts( $query );
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'list-title' );								
						endwhile; // End of the loop.										
					?>
				</div>		
			</div>
			</main><!-- #main -->
		</div><!-- #primary -->			
	</div>
	<div class="sidebar-left">
		<?php get_template_part( 'template-parts/content', 'block-sidebar' ); ?> 
	</div>
</div>
<?php
get_footer();
