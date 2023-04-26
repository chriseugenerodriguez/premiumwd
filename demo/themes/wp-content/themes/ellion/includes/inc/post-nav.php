<?php if ( is_single() ): ?>
	<div class="nav-links">
		<?php next_post_link('%link', __('<span class="next-trig">Next Article</span>', 'ellion').'<div class="nav-next">%title</div>'); ?>
		<?php previous_post_link('%link', __('<span class="prev-trig">Previous Article</span>', 'ellion').'<div class="nav-previous">%title</div>'); ?>
   </div>
<?php endif; ?>
                            