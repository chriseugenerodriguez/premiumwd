 <?php $size = get_post_meta(get_the_ID(), 'portfolio_custom_select', true);?>
    <?php if ($size == 'item-w1 item-h2') {?>
            <?php
            $tall = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-tall');?>
            <img src="<?php echo $tall[0]; ?>" alt="" />
            <?php
        }
        if ($size == 'item-w2 item-h2') {?>
            <?php
            $large = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-large');?>
            <img src="<?php echo $large[0]; ?>" alt="" />
            <?php
        }
        if ($size == 'item-w1 item-h1') {?>
            <?php
            $small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-small');?>
            <img src="<?php echo $small[0]; ?>" alt="" />
            <?php
        }
        if ($size == 'item-w2 item-h1') {?>
            <?php
            $wide = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-wide');?>
            <img src="<?php echo $wide[0]; ?>" alt="" />
    <?php } else { ?>
<?php } ?>