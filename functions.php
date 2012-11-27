<?php

    //load the admin options
    include_once('options/options-framework.php');
    
    include_once('include/metaboxes.php');
  
    add_theme_support( 'post-thumbnails' );    
      
    add_action( 'widgets_init', 'theme_widgets_init' );  
    //register widgets sidebars
    function theme_widgets_init() {
        // Area 1, located at the top of the sidebar.
           
        register_sidebar( array(
                 'name' => 'General Sidebar',
                'id' => 'general-widget-area',
                'description' => 'General Sidebar',
                'before_widget' => '<div class="widget %2$s" id="%1$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>',
            ) );
            
       
    }

    add_theme_support( 'automatic-feed-links' );

    add_action( 'init', 'register_my_menus' );
    function register_my_menus() {
        
        register_nav_menus(
            array(
                'main-menu' => 'Main Menu',
                'footer-menu' => 'Footer Menu',
            )
        );
    }


    add_action('admin_print_scripts', 'theme_admin_scripts');
    function theme_admin_scripts()
        {
            wp_enqueue_script('jquery');
            
            $myJSFile = get_bloginfo('template_url') . '/js/admin-functions.js';
            wp_register_script('admin-functions.js', $myJSFile);
            wp_enqueue_script( 'admin-functions.js');
        }
        
    add_action('admin_print_styles', 'theme_admin_styles');     
    function theme_admin_styles()
        {
            $myStyleFile = get_bloginfo('template_url'). '/css/cft.css';
            wp_register_style('cft.css', $myStyleFile);
            wp_enqueue_style( 'cft.css');
        }
        
    add_action('wp_print_scripts', 'theme_wp_print_scripts');
    function theme_wp_print_scripts()
        {    
            wp_enqueue_script('jquery');
  
        }

    
    function theme__excerpt_more($more)
        {
            global $post;
            
            return (' [..]'); 
            
        }
    add_filter('excerpt_more', 'theme__excerpt_more');
    
    add_filter('excerpt_length', 'my_excerpt_length');
    function my_excerpt_length($length) {
    return 55; }
    
    function my_custom_excerpt_length($length) 
        {
            global $theme_excerpt_length;
            
            if ($theme_excerpt_length > 0)
                return $theme_excerpt_length;
            
            return 20; 
        }

?>
