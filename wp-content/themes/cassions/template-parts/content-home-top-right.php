<?php
/**
 * Template part for displaying post list Layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cassions
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-list clear' ); ?>>    

	
    <!-- begin .featured-image -->
	        
    <div class="home-left-ft-post-right">
			<!-- begin .entry-header -->
		    <div class="entry-header">
		         <?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>		  
		
		    </div>
		    <!-- end .entry-header -->            
			
          
    </div>
</article><!-- #post-## -->
