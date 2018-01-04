
<article id="post-<?php the_ID(); ?>">
    <header class="entry-header">					 					 	
        <div class="post-image"><!--Featured Image-->	
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php if(has_post_thumbnail()) : 
                    the_post_thumbnail(); ?> 
            <?php else : ?> 
                <img src="<?php echo get_template_directory_uri() . '/images/main-thumb-default.jpg'?>" alt="" title="" />
            <?php endif; ?>	
            </a>
        </div>
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    </header>
    <div class="post-excerpt">
            <?php the_excerpt(); ?> 																					
    </div>									
</article>	