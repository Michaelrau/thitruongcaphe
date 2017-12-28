<?php 
	query_last_posts_by_category_slug(1, 'tin-tuc-video');
	if(have_posts()) {
		the_post();
?>		
<div class="home-block-category width_common widget_category_vhnt">
	<h4 class="widget-title">Video</h4>
	<div id="video_wrap" class="wrap">	
		<?php the_excerpt();?>		
	</div>
</div>					
<?php 	
	} else {
?>
<div class="home-block-category width_common widget_category_vhnt">
	<h4 class="widget-title">Video</h4>
	<div id="video_wrap" class="wrap">	
		<iframe width="320" height="210" src="https://www.youtube.com/embed/hUAUd6ehc9A" frameborder="0" allowfullscreen></iframe>		
	</div>
</div>					
<?php 		
	}
	wp_reset_query();	
?>

