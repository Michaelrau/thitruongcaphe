<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cassions
 */

?><!DOCTYPE html>
<html lang="vi">
<head>
<meta name="google-site-verification" content="jm1hdmJkIVGKahILf0jRmV94xal59Giz924ap9qmM-Q" />
<META HTTP-EQUIV="Content-Language" CONTENT="vi">
<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
<META NAME="Language" CONTENT="vi">
<META NAME="Abstract" CONTENT="Tin tức thị trường cà phê được cập nhập hàng ngày trên https://thitruongcaphe.net">
<META NAME="Author" CONTENT="Nguyễn Quang Bình">
<meta name="copyright" content="Copyright by thitruongcaphe.net 2017">
<meta name="robots" content="index, follow"> 
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="thị trường cà phê, giá cà phê, giá kỳ hàn robusta, giá kỳ hàn London, giá kỳ hạn New York">
<meta name="description" content="Tin tức thị trường cà phê, giá cà phê được cập nhật hàng ngày">
<title>Tin tức thị trường cà phê, giá cà phê được cập nhật hàng ngày</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>

<?php wp_head(); ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5946051158471254",
    enable_page_level_ads: true
  });
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="site-pusher">
		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'cassions' ); ?></a>
		<!-- begin .header-mobile-menu -->
		<nav class="st-menu st-effect-3" id="menu-3">

			<?php //get_search_form() ?>

			<?php wp_nav_menu( array('theme_location' => 'primary','echo' => true,'items_wrap' => '<ul>%3$s</ul>')); ?>

		</nav>
		<!-- end .header-mobile-menu -->
		<header id="masthead" class="site-header" role="banner" data-parallax="scroll" data-image-src="<?php header_image() ; ?>">
			<div class="site-header-wrap">

				<div class="header-topbar">
					<div class="container">

						<button type="button" data-effect="st-effect-3" class="header-top-mobile-menu-button mobile-menu-button"><i class="fa fa-bars"></i></button>

						<div class="top-time">
							<span><?php bloginfo('name'); ?> - <time id="current_date">
								<?php 
//									echo date('m/d/Y h:i:s'); 
									$timezone_format = _x('d/m/Y', 'timezone date format');
									$currDate = date_i18n( $timezone_format );
									echo $currDate;
								?>
							</time>
							</span>
						</div>

						<!-- begin cassions-top-icons-search -->
						<div class="topbar-icons-search">

							<div class="topbar-icons">
								<?php wp_nav_menu( array( 'theme_location' => 'social-menu' , 'container_class' => 'social-links', 'link_before' => '<span class="screen-reader-text">',  'link_after'   => '</span>'  ) ); ?>
							</div>

							<div class="topbar-search">

							</div>

						</div>
						<!-- end top-icons-search -->

					</div>
				</div>


				<div class="site-branding">
					<div class="container">
						<div id="div-site-title" class="div-site-title">
							<?php if ( has_custom_logo() ) : ?>
							<div class="site-logo">
								<?php cassions_the_custom_logo(); ?>
							</div>
							<?php endif; ?>
							<div class="main-site-title">
							<?php
							if ( is_front_page() || is_home() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
							endif;
							?>
	
							<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php
							endif; ?>
							</div>
						</div>						
						<div id="search-form" class="st-search-form"><?php get_search_form() ?></div>
					</div>									
				</div><!-- .site-branding -->
			</div> <!-- .site-header-wrap -->
		</header><!-- #masthead -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->

		<div id="content" class="site-content"> </div>
	</div>
</div>	
