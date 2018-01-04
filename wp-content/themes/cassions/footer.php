<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cassions
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<?php if ( is_active_sidebar( 'footer' ) ) { ?>
			<div class="footer-widgets">
				<div class="container">
					<div class="footer-inner">
					<?php	dynamic_sidebar( 'footer' ); ?>
					</div>
				</div>
			</div>
			<?php } ?>

			<div class="site-map">
				<div class="container">
				<ul class="menu-bottom .w-1000 clearfix">					
					<li alias="tin-tuc" class="item">
						<a href="<?php echo get_home_url() . '/tin-tuc'?>">Tin tức</a>
						<ul class="submenu">
							<li alias="tin-tuc-ca-phe"><a href="<?php echo get_home_url() . '/tin-tuc/ca-phe'?>">Tin cà phê</a></li>
							<li alias="tin-tuc-nong-san-khac"><a href="<?php echo get_home_url() . '/tin-tuc/nong-san-khac'?>">Tin nông sản khác</a></li>
							<li alias="tin-tuc-cac-loai-hang-hoa-khac"><a href="<?php echo get_home_url() . '/tin-tuc/cac-loai-hang-hoa-khac'?>">Tin các loại hàng hóa khác</a></li>
							<li alias="tin-tuc-tai-chinh-ngan-hang"><a href="<?php echo get_home_url() . '/tin-tuc/tai-chinh-ngan-hang'?>">Tài chính ngân hàng</a></li>				
							<li alias="tin-tuc-hinh-anh"><a href="<?php echo get_home_url() . '/tin-tuc/hinh-anh'?>">Tin hình ảnh</a></li>
							<li alias="tin-tuc-video"><a href="<?php echo get_home_url() . '/tin-tuc/video'?>">Tin video</a></li>			
						</ul>
					</li>
					<li alias="phan-tich-du-bao" class="item">
						<a href="<?php echo get_home_url() . '/phan-tich-du-bao'?>">Phân tích dự báo</a>
						<ul class="submenu">
							<li alias="phan-tich-du-bao-ca-phe"><a href="<?php echo get_home_url() . '/phan-tich-du-bao/ca-phe'?>">Cà phê</a></li>
							<li alias="phan-tich-du-bao-nong-san-khac"><a href="<?php echo get_home_url() . '/phan-tich-du-bao/nong-san-khac'?>">Nông sản khác</a></li>
							<li alias="phan-tich-du-bao-cac-loai-hang-hoa-khac"><a href="<?php echo get_home_url() . '/phan-tich-du-bao/cac-loai-hang-hoa-khac'?>">Các loại hàng hóa khác</a></li>
							<li alias="phan-tich-du-bao-tai-chinh-ngan-hang"><a href="<?php echo get_home_url() . '/phan-tich-du-bao/tai-chinh-ngan-hang'?>">Tin tài chính ngân hàng</a></li>							
						</ul>
					</li>
					<li alias="van-hoa-van-nghe" class="item">
						<a href="<?php echo get_home_url() . '/van-hoa-van-nghe'?>">Văn hóa - Văn nghệ</a>
						<ul class="submenu">
							<li alias="tap-but"><a href="<?php echo get_home_url() . '/van-hoa-van-nghe/tap-but'?>">Tạp bút</a></li>
							<li alias="tho"><a href="<?php echo get_home_url() . '/van-hoa-van-nghe/tho'?>">Thơ</a></li>
							<li alias="truyen-cuoi"><a href="<?php echo get_home_url() . '/van-hoa-van-nghe/truyen-cuoi'?>">Truyện cười</a></li>
							<li alias="cac-bai-thuoc"><a href="<?php echo get_home_url() . '/van-hoa-van-nghe/cac-bai-thuoc'?>">Các bài thuốc</a></li>
							<li alias="blog"><a href="<?php echo get_home_url() . '/blog'?>">Blog</a></li>							
						</ul>
					</li>	
					<li alias="commodities-news" class="item">
						<a href="<?php echo get_home_url() . '/commodities-news'?>">Commodities News</a>
					</li>
					<li alias="archives" class="item">
						<a href="<?php echo get_home_url() . '/archives'?>">Archives</a>
					</li>
									
				</ul>
				</div>
			</div>
			
			<div class="author-info">
				<div class="container">
					<div class="footer-info footer-info-left">
						<p><?php printf( esc_html__( 'Copyright &copy; %1$s %2$s. All Rights Reserved.', 'cassions' ), date( 'Y' ), get_bloginfo( 'name' ) ); ?></p>
						<p>Tác giả : Nguyễn Quang Bình</p>
					</div>
					<div class="footer-info footer-info-center">						
						<p>Hosting service: <a href="https://emsa-technology.com">EMSA TECHNOLOGY</a></p>
						<p>Email: contact@emsa-technology.com</p>						
					</div >					
					<div class="footer-info footer-info-right">
						<p>Liên hệ quảng cáo</p>
						<p>0983.718.338 | 01234.808.818
					</div>
				</div>
			</div><!-- .site-info -->

		</footer><!-- #colophon -->
	</div><!-- .site-pusher -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
