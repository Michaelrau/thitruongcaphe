<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Cassions
 */

get_header(); ?>

<div class="container">
	<div class="main-content">
		<div class="links">
			<div class="link-item"><a href="<?php echo get_home_url() . '/commodities-news'?>">Commodities News</a></div>			
		</div>
		<div id="content-child" class="content-child">
			
			<?php 
				query_posts_by_category_slug('commodities-news');
				$i = 1;						
				if(have_posts()) {
				    while (have_posts() && $i < 10 ) : the_post(); 
						get_template_part( 'template-parts/content', 'home-bottom' );
						$i++;
					endwhile;
				}						
				wp_reset_query();
				
			?>
						
		</div>			
						
	</div>
	<div class="sidebar-left">
		<?php get_template_part( 'template-parts/content', 'block-sidebar' ); ?> 
	</div>

</div>

<?php
get_footer();