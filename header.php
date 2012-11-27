<?php
/**
 * The Header for our theme.
 *
 */
 
 
    $themename = get_theme_data(STYLESHEETPATH . '/style.css');
    $themename = $themename['Name'];
    $themename = preg_replace("/\W/", "", strtolower($themename) );
    
    $settings = get_option($themename);
 

?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;<?php bloginfo( 'charset' ); ?>" />

<title><?php bloginfo('name'); ?> <?php wp_title("|",true); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!--[if IE]>
<link href="<?php bloginfo('template_url') ?>/css/ie-styles.css" rel="stylesheet" type="text/css">
<![endif]-->

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url') ?>/images/favicon.ico">

<?php
    wp_enqueue_script( 'jquery' );
    wp_head();
?>

<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/html5.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.tools.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.easing.1.3.js"></script>
 
<script type="text/javascript" src="http://use.typekit.com/rjj1ngg.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script src="<?php bloginfo('template_url') ?>/js/theme_functions.js"></script>

<!--js for loading div-->
<script type="text/javascript">
function loading_remove()
        {
            jQuery("#loading").fadeOut(500, function () {
                jQuery(this).remove()
            });   
        }
jQuery(window).load(function(){
    
    
    setTimeout('loading_remove()', 100);
        
    
})
</script>

<?php

if (is_page())
    {
        $page_template = get_post_meta($post->ID, '_wp_page_template', TRUE);
        if ($page_template == 'page-no-content.php')
            {
             ?>
        <script type="text/javascript">
        jQuery(document).ready( function(){
            jQuery('.maincontent .images').cycle({
                    fx: 'fade',
                    speed: 1500,
                    timeout: 5000,
                    delay: -2000
                    
            })
        })
        </script>
        <?php

            }
            
        if ($page_template == 'page-neighborhood.php')
            {
             ?>
          <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.tipTip.js"></script>
          <script type="text/javascript">
jQuery(function(){
jQuery(".pop").tipTip();
});
</script>
<link href="<?php bloginfo('template_url') ?>/css/map-styles.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url') ?>/css/tipTip.css" rel="stylesheet" type="text/css">
        <?php

            }
    }
?>


<?php
if (is_front_page())
    {
     ?>

<?php
    }
?>


<script type="text/javascript">
    jQuery(document).ready(function(){    
        jQuery('ul li:first-child').addClass('first-child');
        jQuery('ul li:last-child').addClass('last-child');
    });

</script>

</head>
          

<body <?php body_class() ?>>
    
    <div id="loading"></div><!--END loading-->
    <div id="wrapper">
        <header>
              <div id="logo">
                 <a href="http://localhost:8888"><img src="<?php echo $settings['company-logo'] ?>" /></a>
              </div>
                  <div id="tag"></div>
                    <p><?php echo nl2br(htmlspecialchars($settings['company-slogan'])) ?></p>
        </header> 
        
        
        
        
        
        
        