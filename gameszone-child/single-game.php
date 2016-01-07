<?php get_header(); global $post; ?>
<?php $sidebar_position = tfuse_sidebar_position(); ?>
<?php  tfuse_shortcode_content('before'); ?>
<div class="main-top">
    <div class="main-top-inner games_header">
        <?php $header_img = tfuse_page_options('game_header');?>
       <div class="slider-full">
       
     <ul id="fullslider">
     <li class="slide-item" <?php echo (!empty($header_img)) ? 'style="background-image: url('.$header_img.')"' : ''?>>
                <div class="slide-content"  ">
                    
                    <div class="ani-item fadeInUp animated">
           				 <div class="play-links">
                    
	                    <?php
	                    $osType = getOS();
	                    $isAndroid = strcmp($osType, 'Android') == 0 ? true : false;
	                    $isIOS = strcmp($osType , 'iOS') == 0 ? true : false;
	                    
	                    $url = tfuse_page_options('android_link');
	                    if(!$isIOS && !(ctype_space($url) || empty($url))){?>
							 <a class="android-link" href="<?php echo $url;?>">
							 	<img src="<?php echo tfuse_options('google_play_img');?>" >
						 	</a>
		 					 
		 				<?php }
		 				$url = tfuse_page_options('facebook_link');
		 				
		 				if(!(ctype_space($url) || empty($url))){
		 					?>
						 	<a class="facebook-link" href="<?php echo $url;?>">
							 	<img src="<?php echo tfuse_options('facebook_page_img');?>" >
						 	</a>
						 	
		 				<?php }
		 				$url = tfuse_page_options('ios_link');
		 				
		 				if(!$isAndroid && !(ctype_space($url) || empty($url))){
		 					?>
		 					
							<a class="ios-link" href="<?php echo $url;?>">
							 	<img src="<?php echo tfuse_options('ios_appstore_img');?>" >
						 	</a>
						 	
						 <?php }?>
						 
					 </div>
					 </div>
					 </div>
					 </li>
					 </ul>
					 </div>     
            <!--  -->
            
            
            
					 
					 <!--  -->
        </div>
    </div>
</div><!-- .main-top -->
<!-- main row 1 -->
<div class="main-row main-row-bg main-row-slim game-filter">
    <div class="container">

        <ul class="nav top-tabs nav-justified" data-post-id="<?php echo $post->ID;?>">
           <li class="active"><a href="" id="game_reviews"><i class="tficon-check-cf"></i> <?php _e('About','tfuse');?></a></li>
            <li ><a href="" id="game_news"><i class="tficon-news"></i> <?php _e('News','tfuse');?></a></li>
            <li><a href="" id="game_images"><i class="tficon-camera"></i> <?php _e('Images','tfuse');?></a></li>
         <!-- 
            <li><a href="" id="game_videos"><i class="tficon-movie"></i> <?php _e('Videos','tfuse');?></a></li>
            <li><a href="" id="game_guides"><i class="tficon-joystick"></i> <?php _e('Guides','tfuse');?></a></li>
         -->
        </ul>

    </div>
</div>
<!-- main row 1 -->
<div class="main-row content-row">
    <div class="container">
        <?php if ($sidebar_position == 'left') : ?>
           <div class="middle-main sidebar-left">
        <?php endif;?>
        <?php if ($sidebar_position == 'right') : ?>
            <div class="middle-main content-cols2">
        <?php endif;?>
        <?php if ($sidebar_position == 'full') : ?>
            <div class="middle-main content-full">
        <?php endif; ?> 
                    <div id="primary" class="content-area">
                        <div class="inner">
                            <?php $posts = tfuse_get_game_posts($post->ID,'reviews');?>
                            
                            <section class="postlist postlist-blog ajax_section_load">
                            <!--     <h1><?php _e('About','tfuse');?></h1> --> 
                                <?php if(!empty($posts)):?>
                                    <?php $k = 0; foreach ($posts as $id):?>
                                    <?php
                                        if($k ==  get_option('posts_per_page')) break;
                                    
                                        $image = wp_get_attachment_url( get_post_thumbnail_id($id, 'post-thumbnails'));
                                        $img_pos = tfuse_page_options('single_img_position','',$id);
                                        
                                        $current_post = get_post( $id );
                                        $user_data = get_user_by('id',$current_post->post_author);
                                    ?>
                                        <article class="post">
                                            <div class="inner">
                                                <div class="entry-aside">
                                                    <header class="entry-header">
                                                        
                                                    </header>
                                                    <?php if(!empty($image)):?>
                                                        <a class="post-thumbnail <?php echo $img_pos;?> clearfix" href="<?php echo get_permalink($id);?>"><img src="<?php echo $image;?>" alt="<?php echo get_the_title($id);?>"/></a>
                                                    <?php endif;?>
                                                    <div class="entry-content">
                                                        <?php echo $current_post->post_content;  ?>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </article>
                                    <?php $k++; endforeach;?>
                                <?php else:?>
                                    <h5><?php _e('Sorry, no description for this game.', 'tfuse'); ?></h5>
                                <?php endif;?>
                            </section>
                            <?php if(get_option('posts_per_page') < count($posts)):?>
                                <div class="load_button">
                                    <button type="submit" class="btn btn-main" id="load_game_posts" data-post-id="<?php echo $post->ID;?>" data-from="game_news" value=""><?php _e('Load More', 'tfuse'); ?></button>
                                    <button type="submit" class="btn btn-main" id="loading_game_posts"><?php _e('Loading...', 'tfuse'); ?></button>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                    <?php if (($sidebar_position == 'right') || ($sidebar_position == 'left')) : ?>
                        <div id="secondary" class="sidebar widget-area">
                            <div class="inner">
                                <?php get_sidebar();?>
                            </div>
                        </div>
                    <?php endif; ?>
            </div> 
    </div>
</div>
<?php tfuse_shortcode_content('after'); ?>
<?php get_footer();?>