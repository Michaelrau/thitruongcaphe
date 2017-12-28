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
	<div class="block-analyze">
	    <!-- begin .featured-image -->
	    <?php if ( has_post_thumbnail() ) { ?>
	    	<div class="small-image">
	        	<?php if ( has_post_thumbnail() ) : ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'cassions-thumbnail-default' ); ?></a><?php endif; ?>
	    	</div>
	    <?php } else {?>
	    	<div class="small-image">
	        	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img width="60" height="60" alt="" src="<?php echo bloginfo('template_url') . '/images/default/commodities-news.jpg'?>" sizes="(max-width:220px) 100vw, 220px" /></a>
	    	</div>
	    <?php }?>
	    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">               
	    	<?php the_title_attribute(); ?>               
	    </a>
    </div>
</article>
