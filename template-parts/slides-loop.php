<div class="su-posts su-posts-default-loop">

	<?php if ( $posts->have_posts() ) : ?>

		<?php while ( $posts->have_posts() ) : $posts->the_post(); ?>



	        <div class="slide">
	            <div class="container-flex h-100">
	                <div class="main-image-3-slide">
	                    <div class="container-flex row">
							<div id="su-post-<?php the_ID(); ?>" class="su-post">

								<div class="su-post-excerpt">
									<?php //the_excerpt(); ?>
									<?php the_content(); ?>
								</div>

							</div>
	                    </div>
	                </div>
	            </div>
	        </div>

		<?php endwhile; ?>

	<?php else : ?>
		<h4><?php _e( 'Posts not found', 'shortcodes-ultimate' ); ?></h4>
	<?php endif; ?>

</div>
