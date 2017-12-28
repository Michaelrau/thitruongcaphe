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
<?php if($slug == 'phan-tich-du-bao'){?>
<div class="container">
	<div class="main-content">
		<div id="primary-top">
			
			<div id="left-top-content-area" class="left-top-content-area">
				<?php										
					query_last_posts_by_category_slug(16, 'phan-tich-du-bao');
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
					
					<?php get_template_part( 'template-parts/content', 'block-prices' );?>
					
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
						<h4 class="widget-title">Cà phê</h4>
						<div class="block-category-detail">
							<?php								
								$rows = 4;				
								query_posts_by_category_slug('phan-tich-du-bao-ca-phe');
								if(have_posts()) {
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
					
					<div class="block-category width_73 widget_category_ttnsk">
						<div class="category-block-title"><h4 class="widget-title">Nông sản khác</h4></div>
						<div class="block-category-detail">
							<?php												
								query_posts_by_category_slug('phan-tich-du-bao-nong-san-khac');
								if(have_posts()) {
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
					<div class="block-category width_73 idget_category_tthhk">
						<h4 class="widget-title">Các loại hàng hóa khác</h4>
						<div class="block-category-detail">
							<?php												
								query_posts_by_category_slug('phan-tich-du-bao-cac-loai-hang-hoa-khac');
								if(have_posts()) {
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
					
					<div class="block-category width_73 widget_category_tttcnh">
						<h4 class="widget-title">Tin tài chính ngân hàng</h4>
						<div class="block-category-detail">
							<?php												
								query_posts_by_category_slug('phan-tich-du-bao-tai-chinh-ngan-hang');
								if(have_posts()) {
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
		"phan-tich-du-bao" => "Phân tích dự báo",
	    "phan-tich-du-bao-ca-phe" => "Cà phê",
	    "phan-tich-du-bao-nong-san-khac" => "Nông sản khác",
		"phan-tich-du-bao-hang-hoa-khac" => "Hàng hóa khác",
		"phan-tich-du-bao-tai-chinh-ngan-hang" => "Tài chính ngân hàng"
	);	
?>
<div class="container">
	<div class="main-content">
		<div class="links">
			<div class="link-item"><a href="<?php echo get_home_url() . '/phan-tich-du-bao'?>">Phân tích dự báo</a></div>
			<div class="link-item">&gt;</div>
			<div class="link-item"><a href="<?php echo get_home_url() . '/' . $wp->request?>"><?php echo $array_title[$slug];?></a></div>
			<div class="clear"></div>
		</div>
		<div id="primary-top">
			
			<?php 
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