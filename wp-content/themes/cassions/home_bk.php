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
		
		<div id="primary-top" class="top-content-area">
			
			<div id="left-top-content-area" class="left-top-content-area">
				<?php			
					// Get six-teen latest posts not in category	
					$bgtt_category = get_category_by_slug( 'bang-gia-truc-tuyen' );
					$cn_category = get_category_by_slug( 'commodities-news' );
					$ptkt_category = get_category_by_slug( 'phan-tich-ky-thuat' );
					$query = array(
					    "category__not_in" => array( $bgtt_category->term_id, $cn_category->term_id, $ptkt_category->term_id  ),
						'posts_per_page' =>  16
					);
					query_posts( $query );			
					// The Query
					if(have_posts()) {
						the_post();
						get_template_part( 'template-parts/content', 'home-top-left' );
					}							
				?>
			</div>
			
			<div id="right-top-content-area" class="right-top-content-area">
				<?php 
					if(have_posts()) {
					    $i = 0;
						while (have_posts() && $i < 5 ) : the_post(); 
							get_template_part( 'template-parts/content', 'home-top-right' );
							$i++;
						endwhile;
					}					
				?>
			</div>
					
		</div>	
		
		<div id="primary-bottom" class="bottom-content-area">
		
			<main id="main" class="site-main" role="main">
						
				<div class="featured-posts">				
					<?php														
						//query_posts_by_category_slug('phia-duoi-trang-chu');
						if(have_posts()) {
							$i = 0;
							while (have_posts() && $i < 10 ) : the_post(); 
								get_template_part( 'template-parts/content', 'home-bottom' );
								$i++;
							endwhile;							
						}
						wp_reset_query();					 			
					?>																	
				</div><!-- .featured-posts -->
																			
				<div class="main-categories">
					
					<div class="home-block-category width_common widget_category_vhnt">
						<h4 class="widget-title">Video</h4>
						<div id="video_wrap" class="wrap">
							<iframe width="320" height="210" src="https://www.youtube.com/embed/hUAUd6ehc9A" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					
					<div id="category-op" class="home-block-category width_common widget_category_op">
						<div class="category-block-title"><h4 class="widget-title">Phân tích kỹ thuật</h4></div>
						<div class="ptkt-wrap">
							<?php
								$rows = 4;
								query_posts_by_category_slug('phan-tich-ky-thuat');
								if(have_posts()) {
									$i = 0;
									while (have_posts() && $i < $rows ) : the_post(); 
										get_template_part( 'template-parts/content', 'block-technical-analyze' );
										$i++;
									endwhile;							
								}
								wp_reset_query();														
							?>
						</div>					
					</div>		
																			
					<div id="category-tt" class="home-block-category width_common widget_category_tt">
						<div class="category-block-title"><h4 class="widget-title">Tin tức</h4></div>
						<div id="tt_wrap" class="wrap">
							<?php
								query_posts_by_category_slug('tin-tuc');
								if( have_posts() ) {
									$i = 0;
									while (have_posts() && $i < $rows ) : the_post(); 
										get_template_part( 'template-parts/content', 'block-news' );
										$i++;
									endwhile;								
								}		
								wp_reset_query();					
							?>
						</div>
					</div>		
							
					<div id="category-ptdb" class="home-block-category width_common widget_category_ptdb">
						<h4 class="widget-title">Phân tích - Dự báo</h4>
						<div id="ptdb_wrap" class="wrap">
							<?php
								query_posts_by_category_slug('phan-tich-du-bao');
								if( have_posts() ) {
									$i = 0;
									while (have_posts() && $i < $rows ) : the_post(); 
										get_template_part( 'template-parts/content', 'block-analyze' );
										$i++;
									endwhile;								
								}				
								wp_reset_query();			
							?>
						</div>
					</div>
					<div class="home-block-category width_common widget_category_vhnt">
						<h4 class="widget-title">Văn hóa - Nghệ thuật</h4>
						<div id="vhnt_wrap" class="wrap">
							<?php
								query_posts_by_category_slug('van-hoa-van-nghe');
								if( have_posts() ) {
									$i = 0;
									while (have_posts() && $i < $rows ) : the_post(); 
										get_template_part( 'template-parts/content', 'block-cultural' );
										$i++;
									endwhile;								
								}				
								wp_reset_query();			
							?>
						</div>
					</div>
					
					<div class="home-block-category width_common widget_category_vhnt">
						<h4 class="widget-title">Commodities News</h4>
						<div id="cn_wrap" class="wrap">
							<?php
								query_posts_by_category_slug('commodities-news');
								if( have_posts() ) {
									$i = 0;
									while (have_posts() && $i < $rows ) : the_post(); 
										get_template_part( 'template-parts/content', 'block-commodities-news' );
										$i++;
									endwhile;								
								}				
								wp_reset_query();			
							?>
						</div>
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
