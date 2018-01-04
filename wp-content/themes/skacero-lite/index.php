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
 * @package Skacero Pro
 */

get_header();

//Column Classes
//$homebar6= 'col-lg-6 col-md-6 col-sm-12 col-xs-12';
$homebar8 = 'col-lg-8 col-md-8 col-sm-6 col-xs-12';
$col = 'col';
$index = 0;
//$col2 = 'col-2';
 ?>
 
<?php if (get_theme_mod('home_page_slider_and_post_columns') !='off') :?>
  <div class="front-page-top-section">
      <div class="widget_slider_area">
         <?php // Display the Home Page Slider Widget
         if( is_active_sidebar( 'skacero-pro-front-slider-area' ) ) {
            if ( !dynamic_sidebar( 'skacero-pro-front-slider-area' ) ):
            endif;
         }
         ?>
      </div>

      <div class="widget_beside_slider">
         <?php // Display the Home Page Column Widget
         if( is_active_sidebar( 'skacero-pro-front-column-area' ) ) {
            if ( !dynamic_sidebar( 'skacero-pro-front-column-area' ) ):
            endif;
         }
         ?>
      </div>
   </div>
<?php endif; ?>


<div id="primary" class="primary-content">

	<main id="main" class="<?php if ( get_theme_mod('home_page_sidebar') == 'on' ) { echo $homebar8 ; } else { echo 'col-md-12' ; } ?>" role="main">		
		<?php if ( have_posts() ) : ?> 
			<div id="primary-top" class="container">
				<div class="row">
					<div class="col-12 col-xl-9 col-lg-9 col-md-9 col-sm-9 main-post">
						<?php 
							the_post();
							get_template_part( 'template-parts/content-main-post', get_post_format() ); 
							$index++;
						?>
					</div>
					<div class="col-12 col-xl-3 col-lg-3 col-md-3 col-sm-3 sub-posts">
						<?php while ( have_posts() && $index < 6 ):  ?>							
							<?php 
								the_post(); 
								get_template_part( 'template-parts/content-sub-post', get_post_format() ); 
								$index++; 
							?>
						<?php endwhile; ?>
    				</div>					
				</div> 	
			</div>

			<div id="block-bgtk" class="container">
				<?php get_template_part( 'template-parts/content', 'block-prices' );?>
			</div>	
			
			<div id="primary-bottom" class="bottom-content-area">
							
				<div class="main-categories">
						
					
														
				</div>																						
			</div><!-- #primary -->

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>		
		<?php endif; ?>		
	
	</main><!-- #main -->
	
	<?php if ( get_theme_mod('home_page_sidebar') == 'on' ) { ?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sidebar-box home-sidebar-box">
			<?php get_sidebar(); ?>
		</div>
	<?php } ?>

</div><!-- #primary -->


<?php get_footer(); ?>
