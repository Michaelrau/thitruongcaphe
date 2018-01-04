<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Skacero Pro
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function skacero_pro_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'skacero_pro_body_classes' );

//Footer
if (! function_exists('skacero_pro_copyright')){
	function skacero_pro_copyright(){ ?>
		<div class="foot-bottom">		
			<div class="row">
				<div class="col-md-6 float-l">
				<ul class="copyright">
					<li class="">&copy; <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url('/') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
					</li>
				<?php if (get_theme_mod('wordpress_powered_by') !='off') { ?>
					<li><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'skacero-pro' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'skacero-pro' ), 'WordPress' ); ?></a>
					</li>
				<?php }?>
				</ul>
				</div>
				
				<?php skacero_pro_theme_option(); ?>
				
			</div>		
		</div>
	<?php }
}


