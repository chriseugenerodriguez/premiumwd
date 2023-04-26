<?php

class Flickr extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'flickr_widget', // Base ID
            __( 'WD Flickr Widget', 'sfwidget' ), // Name
            array( 'description' => __( 'Show your favorite Flickr photos.', 'sfwidget' ), ) // Args
        );

    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */

    public function widget( $args, $instance ) {
        $title                      = apply_filters( 'widget_title', $instance['title'] );
        $flickr_id                  = $instance['flickr_id'];
        $number                     = $instance['number'];
     
        echo $args['before_widget'];
     
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
     
        ?>
        <ul id="flickrcbox" class="flickr_widget"></ul>
        <script type="text/javascript">
					  (function($){$.fn.jflickrfeed=function(settings,callback){settings=$.extend(true,{flickrbase:'http://api.flickr.com/services/feeds/',feedapi:'photos_public.gne',limit:20,qstrings:{lang:'en-us',format:'json',jsoncallback:'?'},cleanDescription:true,useTemplate:true,itemTemplate:'',itemCallback:function(){}},settings);var url=settings.flickrbase+settings.feedapi+'?';var first=true;for(var key in settings.qstrings){if(!first)
			url+='&';url+=key+'='+settings.qstrings[key];first=false;}
			return $(this).each(function(){var $container=$(this);var container=this;$.getJSON(url,function(data){$.each(data.items,function(i,item){if(i<settings.limit){if(settings.cleanDescription){var regex=/<p>(.*?)<\/p>/g;var input=item.description;if(regex.test(input)){item.description=input.match(regex)[2]
			if(item.description!=undefined)
			item.description=item.description.replace('<p>','').replace('</p>','');}}
			item['image_s']=item.media.m.replace('_m','_s');item['image_t']=item.media.m.replace('_m','_t');item['image_m']=item.media.m.replace('_m','_m');item['image']=item.media.m.replace('_m','');item['image_b']=item.media.m.replace('_m','_b');delete item.media;if(settings.useTemplate){var template=settings.itemTemplate;for(var key in item){var rgx=new RegExp('{{'+key+'}}','g');template=template.replace(rgx,item[key]);}
			$container.append(template)}
			settings.itemCallback.call(container,item);}});if($.isFunction(callback)){callback.call(container,data);}});});}})(jQuery);
            jQuery(document).ready(function(){
                
                jQuery('#flickrcbox').jflickrfeed({
                    limit: <?php echo $number; ?>,
                    qstrings: {
                        id: '<?php echo $flickr_id; ?>'
                    },
                    itemTemplate: '<li><a target="_blank" href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
                });

            });
        </script>
        <?php
     
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Flickr Photos', 'sfwidget' );
        $flickr_id = ! empty( $instance['flickr_id'] ) ? $instance['flickr_id'] : '';
        $number = ! empty( $instance['number'] ) ? $instance['number'] : '6';
        ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('flickr_id'); ?>">Flickr User ID:</label>
                <input class="widefat" id="<?php echo $this->get_field_id('flickr_id'); ?>" name="<?php echo $this->get_field_name('flickr_id'); ?>" type="text" value="<?php echo $flickr_id; ?>">
                <small>Dont't know your ID. Head on over to <a target="_blank" href="http://idgettr.com/">idGettr</a> to find it.</small>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('number'); ?>">Number of Photos:</label>
                <input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="number" value="<?php echo $number; ?>" min="1" max="20">
                <small>Set how many photos you want to show.  Flickr seems to limit its feeds to 20. So you can use maximum 20 photos.</small>
            </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();

        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['flickr_id'] = ( ! empty( $new_instance['flickr_id'] ) ) ? strip_tags( $new_instance['flickr_id'] ) : '';
        $instance['number'] = ( ! empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';

        return $instance;
    }

} // class Flickr

add_action( 'widgets_init', create_function( '', 'register_widget("Flickr");' ) );