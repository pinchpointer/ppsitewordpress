<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="en" class="no-js" <?php language_attributes(); ?>> <![endif]-->
<head>
<meta http-equiv="Content-Type"
	content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php
if (tfuse_options ( 'disable_tfuse_seo_tab' )) {
	wp_title ( '|', true, 'right' );
	bloginfo ( 'name' );
	$site_description = get_bloginfo ( 'description', 'display' );
	if ($site_description && (is_home () || is_front_page ()))
		echo " | $site_description";
} else
	wp_title ( '' );
?>
    </title>
    <?php tfuse_meta(); ?>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
				global $is_tf_blog_page;
				if (is_singular () && get_option ( 'thread_comments' ))
					wp_enqueue_script ( 'comment-reply' );
				
				tfuse_head ();
				wp_head ();
				?>
</head>
<body <?php body_class();?>>
	<div id="page" class="hfeed site">
        <?php tfuse_shortcode_content('top');?>
        <header id="masthead" class="site-header" role="banner">
			<div class="site-header-container">
				<div class="header-second">
					<div class="header-search">

						<form class="header-search-form" id="searchForm"
							style="display: none;" action="<?php echo home_url( '/' ) ?>"
							method="get">

							<input type="text" name="s" id="s" value="" class="stext"
								placeholder="<?php _e('Search','tfuse');?>">
							<button type="submit" id="searchSubmit" class="button-search">
								<i class="tficon-search"></i>
							</button>
						</form>
					</div>

					<div class="header-left-space"></div>
<!-- PINCHER -->
					<div class="logo-container" >
						<a class="header-bar-logo" href="/temp"> <img
							src="/temp/wp-content/uploads/2015/12/logo.png">
						</a>
					</div>

					<div class="nav-main" id="nav-main-id">
						<nav role="navigation" class="site-navigation main-navigation">
                                <?php  tfuse_menu('default');  ?>
                            </nav>
					</div>
					
					<div class="header-buttons">
						<div class="header-buttons-container">
							<a title="Facebook" target="_blank"
								href="https://www.facebook.com/pinchpoint.fans/"
								hidefocus="true" class="button-search-hideshow"
								style="outline: medium none;"><i class="tficon-facebook"></i></a>
							<a title="Twitter" target="_blank"
								href="https://twitter.com/pinchpointps" hidefocus="true"
								class="button-search-hideshow" style="outline: medium none;"><i
								class="tficon-twitter"></i></a>
							<button type="button" id="hideshow" value='hide/show'
								class="button-search-hideshow search-button">
								<i class="tficon-search"></i>
							</button>
						</div>
					</div>
					<div class="header-right-space"></div>

				</div>


			</div>

			<script type="text/javascript">
                        jQuery(document).ready(function(){
					        jQuery('#hideshow').on('click', function(event) {        
					             jQuery('#searchForm').slideDown();
					            
					        });
					    });

                        var handler = function(event){
                        	  // if the target is a descendent of container do nothing
                        	  if(jQuery(event.target).is(".header-search, .header-search *")) return;
                        	  
                        	  if(jQuery(event.target).is(".search-button, .search-button *")) return;
                      	    
                        	  // remove event handler from document
                        	  

                        	  jQuery('#searchForm').slideUp();
                        	}

                        	jQuery(document).on("click", handler);
                        </script>
		</header>
<?php  //tfuse_header_content('header');?>
<?php  //tfuse_header_content('bottom');?>
<?php if($is_tf_blog_page) tfuse_category_on_blog_page();?>
    <div id="main" class="site-main" role="main">