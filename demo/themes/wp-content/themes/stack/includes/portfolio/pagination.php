        <!-- #portfolio -->
        <div id="pagination">
            <?php if (get_next_posts_link()) { ?>
				<div class="load_more_button_holder">
    				<span class="portfolio-button" rel="<?php echo $wp_query->max_num_pages; ?>">
						<?php 
							$tag = get_next_posts_link(__('Show more')); 
							// if(!strpos($tag, '/gallery')) {
							// 	$tag = str_replace('/page', '/gallery/page', $tag);
							// }
							echo $tag;
						?>
					</span>
				</div>
			<?php } ?>
        </div>
