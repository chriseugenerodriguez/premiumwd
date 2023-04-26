                                <?php if ( is_single() ): ?>
	<ul class="post-nav group nav">
		<?php next_post_link('%link', '<li class="next"><i class="fa fa-angle-right"></i><div><strong>'.__('Next Article', 'Mini').'</strong> <span>%title</span></div></li>'); ?>
		<?php previous_post_link('%link', '<li class="previous"><i class="fa fa-angle-left"></i><div><strong>'.__('Previous Article', 'Mini').'</strong> <span>%title</span></div></li>'); ?>
	</ul>
<?php endif; ?>
                            