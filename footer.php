<?php
/**
 * The template for displaying the footer.
 */

    $themename = get_theme_data(STYLESHEETPATH . '/style.css');
    $themename = $themename['Name'];
    $themename = preg_replace("/\W/", "", strtolower($themename) );
    
    $settings = get_option($themename);
    
?>
        <footer>
            <div id="footer-content">
                <?php
                    wp_nav_menu( 'after=&container=&menu_id=menu-footer-menu&sort_column=menu_order&container_class=menu-footer&theme_location=footer-menu' );
                ?> 
                  <div id="eho"></div><!--END eho-->
                      
                  <div id="footer-logo"> 
                    <a href="http://2cooper.com"><img src="<?php echo $settings['company-footer-logo'] ?>" /></a>
                  </div><!--END footer-logo-->
                  
                  <p>Downtown Living at Its Best</p>   
                  
                  <div id="rose-logo">
                  <a href="http://www.rosenycapts.com" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/rose-logo.png" width="27" height="39"></a>
                  </div><!--END rose-logo-->
                  <div class="clear"></div>
           </div><!--END footer-content-->
        </footer>

     <?php

        if (is_page())
            {
                $page_template = get_post_meta($post->ID, '_wp_page_template', TRUE);
                if ($page_template == 'page-neighborhood.php')
                    {
                     ?>
                     <script type="text/javascript">
                    jQuery(function() {    
                        jQuery(".categories ul").tabs("#map_canvas2 > div", {effect: 'fade', fadeOutSpeed: 400});
                    });
                    </script>
                <?php

                    }
            }
        ?>   
        
      
<?php
          
    wp_footer();
?>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33424053-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>
