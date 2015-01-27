<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<?php if (suevafree_setting('suevafree_custom_favicon')) : ?> <link rel="shortcut icon" href="<?php echo suevafree_setting('suevafree_custom_favicon'); ?>"/> <?php endif; ?>

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<meta property="og:type" content="blog"/>
<meta property="og:site_name" content="<?php echo get_bloginfo('name') . " - " . get_bloginfo('description'); ?>"/>
<meta property="og:locale" content="pt_BR"/>


<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();

    if(is_home()) {
            echo '<meta property="og:url" content="' . get_bloginfo('url') . '"/>';
            echo '<meta property="og:title" content="' . get_bloginfo('name') . '" />';
            echo '<meta property="og:description" content="Blog sobre desenvolvimento Front-End, Python, Django e tudo aquilo que amamos: programar"/>';
            echo '<meta property="og:image" content="http://indacode.com/wp-content/uploads/2015/01/thumb-medium.png">';
        } 
    else {
            echo '<meta property="og:url" content="' . get_permalink() . '"/>';
            echo '<meta property="og:title" content="' . get_the_title() . '" />';
            echo '<meta property="og:description" content="' . get_the_excerpt() . '"/>';
            echo '<meta property="og:image" content="' . wp_get_attachment_url(get_post_thumbnail_id()) . '" />';
    }

endwhile;
endif;
?>

<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>
<body <?php body_class('custombody'); ?>>

<header class="header container" >

	<div class="row">
    	<div class="span12" >
        	<div id="logo">
                    
            	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name') ?>">
                        
                	<?php 
					
                    	if ( suevafree_setting('suevafree_custom_logo')) :
                        	echo "<img src='".suevafree_setting('suevafree_custom_logo')."' alt='logo'>"; 
                        else: 
                            bloginfo('name');
							echo "<span>".get_bloginfo('description')."</span>";
                        endif; 
						
					?>
                            
                </a>
                        
			</div>

            <nav id="mainmenu">
                <?php // wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'false','depth' => 3  )); ?>
            </nav>                
        </div>
	</div>

</header>