<?php
/**
 * The template for displaying posts on archive pages.
 * To override this template in a child theme, copy this file 
 * to your child theme's folder.
 *
 * @since Gamezone 1.0
 */
 global $more,$post;
    $more = apply_filters('tfuse_more_tag',0);
    
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'post-thumbnails'));
$img_pos = tfuse_page_options('single_img_position');

$position = tfuse_page_options('img_pos');

$post_date = get_the_date();
$time = strtotime($post_date);
?>
<article class="post">
    <div class="inner">
        <div class="entry-aside">
           <?php
           $is_arabic = tfuse_page_options('is_arabic');
           if($is_arabic):?>
        		<div class="arabic" style="direction: rtl;">
        	<?php endif;?>
            <?php
            $press_author = tfuse_page_options('press_author');
            $press_source = tfuse_page_options('press_source');           			
            if($position == 'before'):?>
                <?php if(!empty($image)):?>
                	<?php  if(!empty($press_source)):?>
                	    <a target="_blank" class="post-thumbnail <?php echo $img_pos;?> clearfix" href="<?php echo $press_source; ?>"><img src="<?php echo $image;?>" alt=""/></a>
                           	<?php else:?>
                		<a class="post-thumbnail <?php echo $img_pos;?> clearfix" href="<?php the_permalink(); ?>"><img src="<?php echo $image;?>" alt=""/></a>
        	        <?php endif;?>
        	        <?php endif;?>
             <?php endif;?>
            <header class="entry-header">
            	<?php if(!empty($press_source)): ?>
            	 <h1 class="entry-title"><a target="_blank" href="<?php echo $press_source; ?>"><?php echo get_the_title();?></a></h1>
            	
            	<?php else:?>
                <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></a></h1>
                <?php endif;?>
                <div class="entry-meta"  >
                    <span class="author">
                    <?php  if(!empty($press_source)):?>
						<?php _e('By ','tfuse');?>
							<span><?php echo $press_author; ?></span>                   
                    <?php else:?>
                    	<?php _e('By ','tfuse');?><?php the_author_posts_link() ?>
                    <?php endif;?>
                    </span>
                    <?php _e(' on ','tfuse');?>
                    <time class="entry-date" datetime="<?php echo  date('Y-m-d',$time).'T'.date('g:i:s',$time) ?>"><?php echo get_the_date(); ?></time>
                </div>
            </header>
            <?php if($position != 'before'):?>
            		
                <?php if(!empty($image)):?>
                 
                	<?php  if(!empty($press_source)):?>
                	<a class="post-thumbnail <?php echo $img_pos;?> clearfix" href="<?php echo $press_source; ?>"><img src="<?php echo $image;?>" alt=""/></a>
                           	<?php else:?>
                	<a class="post-thumbnail <?php echo $img_pos;?> clearfix" href="<?php the_permalink(); ?>"><img src="<?php echo $image;?>" alt=""/></a>
        	        <?php endif;?>
                  <?php endif;?>
               
               
             <?php endif;?>
            <div class="entry-content ">
                <?php if ( tfuse_options('post_content') == 'content' ) the_content(''); else the_excerpt(); ?>
            </div>
            <footer class="entry-meta" >
            <?php  if(!empty($press_source)):?>
                <a target="_blank" class="btn btn-default btn-xs" href="<?php echo $press_source; ?>"><?php _e('Read more','tfuse');?></a>
            
                 <?php else:?>
                <a class="btn btn-default btn-xs" href="<?php the_permalink(); ?>"><?php _e('Read more','tfuse');?></a>
               <span class="comments-link" ><a href="<?php comments_link(); ?>"><i class="tficon-comment"></i> <?php comments_number(); ?></a></span>
 			<?php endif;?>
            </footer>
            <span id="post-<?php the_ID(); ?>" <?php post_class(); ?>></span>
        <?php if($is_arabic):?>
        		</div>
        	<?php endif;?>
        </div>
        
    </div>
</article>