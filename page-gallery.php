<?php
/*
Template Name: Photo Gallery
*/

	get_header();
	get_sidebar() ?>
    <div class="maincontent">

		<script type="text/javascript">
		jQuery(document).ready( function(){
		    jQuery('.slidepics').cycle({
		            fx: 'fade',
		            speed: 1500,
		            timeout: 3500,
		            delay: -2000    
		    })
		})
		</script>
		
		
        <div id="thumbsbox">
          <ul class="tabs">
            
            <?php
 				$argv = array(
                            'post_parent' => $post->ID,
                            'post_type' => 'attachment',
                            'post_mime_type' => 'image',
                            'orderby' => 'menu_order',
                            'order'     =>  'ASC'
                            );
                $attachments = get_children($argv);

                if (count($attachments) > 0)
                    {
                        ?><li id="looppics"><a href="#">Loop</a></li><?php
                    }
                    
                    
                //get child pages
                $args = array(
                                'child_of'  =>  $post->ID,
                                'sort_column'   =>  'menu_order'
                                );
                $child_pages  = get_pages($args);
                if (count($child_pages) > 0)
                    {
                            
                        foreach ($child_pages as $child_page)
                            {
                                $class = "";
                                if (strpos($child_page->post_title, "<br />") !== FALSE)
                                    $class = "two-lines";
                                ?><li><a class="<?php echo $class ?>" href="#"><?php echo $child_page->post_title ?></a></li><?php   
                            }

                    }
            ?> 
          </ul> 
         
       </div><!--END thumbsbox-->
       
        
      <div class="gallery">
    
        <?php
        
            if (count($attachments) > 0)
                {
                    ?>
                        <div class="slidepics">
                    <?php
                    
                    foreach ($attachments as $attachment) 
                        {
                            $image_data = wp_get_attachment_image_src($attachment->ID, 'full');
                            $image_src = $image_data[0];
                            $image_src = str_replace(get_bloginfo('wpurl'), '', $image_src);
                            ?>
                                <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $image_src;?>&amp;w=1024&amp;h=560&amp;zc=1" rel="<?php echo $attachment->post_title ?>" width="1024" height="560"> 
                            <?php 
                        }
                    ?>
                      </div>
                    <?php
                }
                
            if (count($child_pages) > 0)
                    {
                        foreach ($child_pages as $child_page)
                            {
                                $argv = array(
                                            'post_parent' => $child_page->ID,
                                            'post_type' => 'attachment',
                                            'post_mime_type' => 'image',
                                            'orderby' => 'menu_order',
                                            'order'     =>  'ASC'
                                            );
                                $attachments = get_children($argv);

                                ?>
                                    <div class="slidepics">
                                <?php
                                
                                foreach ($attachments as $attachment) 
                                    {
                                        $image_data = wp_get_attachment_image_src($attachment->ID, 'full');
                                        $image_src = $image_data[0];
                                        $image_src = str_replace(get_bloginfo('wpurl'), '', $image_src);
                                        ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $image_src;?>&amp;w=1024&amp;h=560&amp;zc=1" rel="<?php echo $attachment->post_title ?>" width="1024" height="560"> 
                                        <?php 
                                    }
                                ?>
                                  </div>
                                <?php    
                            }
                    }
        
        
        ?>
   
       </div><!--END gallery-->

          
     </div><!--END maincontent--> 
<script type="text/javascript">
jQuery(function() {    
    jQuery("#thumbsbox ul").tabs(".gallery > div", {effect: 'fade', fadeOutSpeed: 400});
});
</script>

<?php get_footer(); ?>
