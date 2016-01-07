<?php
// =============================== Recent Posts Widget ======================================

class TFuse_Recent_Posts extends WP_Widget {

    function TFuse_Recent_Posts() {
        $widget_ops = array('description' => '' );
        parent::__construct(false, __('TFuse - Recent Posts', 'tfuse'),$widget_ops);
    }

    function widget($args, $instance) {
        extract( $args );
        $title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts','tfuse') : $instance['title'], $instance, $this->id_base);
        $number = esc_attr($instance['number']);
        $b = $instance['b'] = empty( $instance['b'] ) ? '' : $instance['b'];
                $class = ($b) ? 'widget-boxed' : '';
        if ($number>0) {} else $number = 8;
    ?>

<div class="widget widget_recent_entries <?php echo $class?>">
        <h3 class="widget-title"><?php echo tfuse_qtranslate($title); ?></h3>
        <ul class="side-postlist">
            <?php
            $pop_posts =  tfuse_shortcode_posts(array(
                                'sort' => 'recent',
                                'items' => $number,
                                'image_post' => true,
                                'image_width' => 62,
                                'image_height' => 62,
                                'image_class' => 'post-thumbnail'
                            ));
            
            foreach($pop_posts as $post_val): 
            
            $press_source = tfuse_page_options('press_source','',$post_val['post_id']);
            
            $is_outer_link = !empty($press_source) ? true : false;
            
            $target_window = !empty($press_source) ? "_blank" : "_self";
            
            $press_source = !empty($press_source) ? $press_source : $post_val['post_link'];
            ?>
                <li>
                    <a target="<?php echo $target_window?>"  href="<?php echo $press_source; ?>"><?php echo $post_val['post_img']; ?></a>
                    <a target="<?php echo $target_window?>" href="<?php echo $press_source; ?>" class="post-title"><?php echo $post_val['post_title']; ?></a>
                    <?php if(!$is_outer_link):?>
                    	<span class="comments-link"><a href="<?php echo $post_val['post_link']; ?>#comments"><?php echo tfuse_get_comments(false,$post_val['post_id']); ?></a></span>
                	<?php endif;?>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>

    <?php
    }

   function update($new_instance, $old_instance) {
       $new_instance['b'] = isset($new_instance['b']);
       return $new_instance;
   }

   function form($instance) {
        $instance = wp_parse_args( (array) $instance, array(  'title' => '', 'number' => '') );
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $number = esc_attr($instance['number']);
        ?>
                <p><input id="<?php echo $this->get_field_id('b'); ?>" name="<?php echo $this->get_field_name('b'); ?>" type="checkbox" <?php checked(isset($instance['b']) ? $instance['b'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('b'); ?>"><?php _e('Boxed','tfuse'); ?></label></p>

       <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','tfuse'); ?></label>
       <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts','tfuse'); ?>:</label>
            <input type="text" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo $number; ?>" class="widefat" id="<?php echo $this->get_field_id('number'); ?>" />
        </p>

    <?php
    }
}
    function TFuse_Unregister_WP_Widget_Recent_Posts() {
            unregister_widget('WP_Widget_Recent_Posts');
    }
add_action('widgets_init','TFuse_Unregister_WP_Widget_Recent_Posts');

register_widget('TFuse_Recent_Posts');
