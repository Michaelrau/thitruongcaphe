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
<?php $slug = str_replace("/", "-",$wp->request); ?>
<?php if($slug == 'van-hoa-van-nghe'){?>
<div class="container">	
	<div class="main-content">
		<div id="primary-top">			
			<div id="left-top-content-area" class="left-top-content-area">
				<?php										
					query_last_posts_by_category_slug(16, 'van-hoa-van-nghe');
					if(have_posts()) {
						the_post();
						get_template_part( 'template-parts/content', 'home-top-left' );
					}								
				?>
			</div>
			<div id="right-top-content-area" class="right-top-content-area">
				<?php 
					$i = 1;						
					if(have_posts()) {
					    while (have_posts() && $i < 6 ) : the_post(); 
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
					
					<?php get_template_part( 'template-parts/content', 'block-video' ); ?>
													
					<div class="block-category widget_category_ttcp">
						<h4 class="widget-title">Tạp bút</h4>
						<div class="block-category-detail">
							<?php			
								$rows = 4;									
								query_posts_by_category_slug('tap-but');
								if(have_posts()) {
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
					
					<div class="block-category">
						<div class="category-block-title"><h4 class="widget-title">Thơ</h4></div>
						<div class="block-category-detail">
							<?php												
								query_posts_by_category_slug('tho');
								if(have_posts()) {
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
					<div class="block-category">
						<h4 class="widget-title">Truyện cười</h4>
						<div class="block-category-detail">
							<?php												
								query_posts_by_category_slug('truyen-cuoi');
								if(have_posts()) {
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
					
					<div class="block-category">
						<h4 class="widget-title">Các bài thuốc</h4>
						<div class="block-category-detail">
							<?php												
								query_posts_by_category_slug('cac-bai-thuoc');
								if(have_posts()) {
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
				</div>																																										
			</main><!-- #main -->		
			
		</div><!-- #primary -->
						
	</div>
	<div class="sidebar-left">
		<?php get_template_part( 'template-parts/content', 'block-sidebar' ); ?> 
	</div>

</div>
<?php } else { ?>
<?php 
	$array_title = array(
		"van-hoa-van-nghe" => "Văn hóa văn nghệ",
	    "van-hoa-van-nghe-tap-but" => "Tạp bút",
	    "van-hoa-van-nghe-tho" => "Thơ",
		"van-hoa-van-nghe-truyen-cuoi" => "Truyện cười",
		"van-hoa-van-nghe-cac-bai-thuoc" => "Các bài thuốc",
		"van-hoa-van-nghe-blog" => "Blog"
	);	
?>
<div class="container">
	<div class="main-content">
		<div class="links">
			<div class="link-item"><a href="<?php echo get_home_url() . '/van-hoa-van-nghe'?>">Văn hóa văn nghệ</a></div>
			<div class="link-item">&gt;</div>
			<div class="link-item"><a href="<?php echo get_home_url() . '/' . $wp->request?>"><?php echo $array_title[$slug];?></a></div>
			<div class="clear"></div>
		</div>
		<div id="primary-top">
			
			<?php
				$slug = str_replace("van-hoa-van-nghe-", "", $slug); 
				query_posts_by_category_slug($slug);
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

<?php }?>
<?php
get_footer();