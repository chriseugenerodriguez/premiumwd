                                <?php if ( is_single() ): ?>
	<ul class="post-nav group nav">
		<li class="next"><?php next_post_link('%link', '<i class="fa fa-angle-right"></i><strong>'.__('Next Article', 'adomo').'</strong> <span>%title</span>'); ?></li>
		<li class="previous"><?php previous_post_link('%link', '<i class="fa fa-angle-left"></i><strong>'.__('Previous Article', 'adomo').'</strong> <span>%title</span>'); ?></li>
	</ul>
<?php endif; ?>
                            