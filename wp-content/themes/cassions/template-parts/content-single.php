<?php
/**
 * Template part for displaying page content in single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cassions
 */

?>
<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

    <?php if ( has_post_thumbnail() ) : ?>
    <div class="entry-thumb">
        <?php the_post_thumbnail( 'full' ); ?>
    </div>
    <?php endif; ?>

	<?php $content = get_the_content(); if ( ! empty ( $content) ) { ?>
	<div class="entry-content single-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cassions' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php } ?>

	<?php the_post_navigation( array(
            'prev_text'                  => '<span>' . esc_html__( 'Bản tin trước', 'cassions' ) .'</span> %title',
            'next_text'                  => '<span>' . esc_html__( 'Bản tin tiếp theo', 'cassions' ) .'</span> %title',
            'in_same_term'               => true,
            'screen_reader_text' 		 => esc_html__( 'Continue Reading', 'cassions' ),
        ) ); ?>

	<footer class="entry-footer">
		<?php cassions_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
