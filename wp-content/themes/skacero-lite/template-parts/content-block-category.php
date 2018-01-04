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

	<!-- begin .entry-header -->
    <div class="entry-header">
         <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    </div>
    <!-- end .entry-header -->            
    <div class="ft-post-right">	   
    	<!-- begin .featured-image -->
		    <?php if ( has_post_thumbnail() ) { ?>
		    <div class="featured-image">
		        <?php if ( has_post_thumbnail() ) : ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'cassions-thumbnail-default' ); ?></a><?php endif; ?>
		    </div>
		    <?php } ?>
		    <!-- end .featured-image -->        
		<div class="entry-content">
            <?php the_excerpt();?>
        </div><!-- .entry-content -->
    </div>
</article><!-- #post-## -->
