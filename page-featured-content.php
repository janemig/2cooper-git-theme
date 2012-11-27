<?php
/*
Template Name: Featured (Child Pages) Content
*/

get_header(); ?>
<?php  get_sidebar() ?>
    <div class="maincontent">
        <?php the_post() ?>
        <div id="navbox" class="area<?php echo $post->ID; ?>">
            <h2><?php the_title() ?></h2>
            <?php
            
                $_backgrounds             = get_post_meta($post->ID, '_backgrounds', TRUE); 
                if (empty($_backgrounds))
                    $_backgrounds = 'BCDFEE';
                $_hover_color             = get_post_meta($post->ID, '_hover_color', TRUE);
                if (empty($_hover_color))
                    $_hover_color = '91AFC5';
                    
                ?>
                    <style>
                        .infobox, #navbox {background-color: #<?php echo $_backgrounds ?>}
                        #navbox ul a:hover, #navbox a.current, #pool a.current, #fit a.current, #lounge a.current {background-color: #<?php echo $_hover_color ?>; }
                    </style>
                <?php
            
                //output the child data
                $args = array(
                                'child_of'  =>  $post->ID,
                                'sort_column'   =>  'menu_order'
                                );
                $child_pages  = get_pages($args);
                
                if (count($child_pages) > 0)
                    {
                        ?><ul class="tabs"><?php   
                        
                        foreach ($child_pages as $child_page)
                            {
                                ?><li id="cp<?php echo $child_page->ID ?>"><a href="#child_page_<?php echo $child_page->ID ?>"><?php echo $child_page->post_title ?></a></li><?php   
                            }
                        
                        ?></ul><?php
                    }
            
            ?>
        </div><!--END amen-navbox-->

        <?php
            if (count($child_pages) > 0)
                {
                    ?>
                    <div class="panes">
                    
                    <?php
                    
                        $counter = 1;
                        foreach ($child_pages as $child_page)
                            {
                                $_dialog_position             = get_post_meta($child_page->ID, '_dialog_position', TRUE);
                                if (empty($_dialog_position))
                                    $_dialog_position = 'tr';
                                
                                ?>
                                    <div class="ind-pane">
                                        <div class="slidepics<?php echo $counter ?>">
                                            <?php
            
                                                    $argv = array(
                                                                    'post_parent' => $child_page->ID,
                                                                    'post_type' => 'attachment',
                                                                    'post_mime_type' => 'image',
                                                                    'orderby' => 'menu_order',
                                                                    'order'     =>  'ASC'
                                                                    );
                                                    $attachments = get_children($argv);

                                                    if (count($attachments) > 0)
                                                        {
                                                            foreach ($attachments as $attachment) 
                                                                {
                                                                    $image_data = wp_get_attachment_image_src($attachment->ID, 'full');
                                                                    $image_src = $image_data[0];
                                                                    $image_src = str_replace(get_bloginfo('wpurl'), '', $image_src);
                                                                    ?>
                                                                        <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $image_src;?>&amp;w=1024&amp;h=560&amp;zc=1" rel="<?php echo $attachment->post_title ?>" width="1024" height="560"> 
                                                                    <?php 
                                                                }
                                                        }
                                                ?>
                                        </div>
                                        <a href="javascript:void(0)"><div class="<?php echo $_dialog_position ?> pm-btn"></div></a><!--END plus-minus-btn-->
                                        <div class="infobox <?php echo $_dialog_position ?>">
                                            <?php echo $child_page->post_content ?>
                                        </div><!--END amen-infobox-->
                                    </div>
                                <?php 
                                
                                $counter++;  
                            }                    
                    ?>
                        
                        </div>
                        <?php
                }
                ?>
     

    </div><!--END maincontent-->    
    
<script type="text/javascript">
jQuery(function() {    
    jQuery("#navbox ul").tabs(".panes > div", {effect: 'fade', fadeOutSpeed: 400});
    
    jQuery(document).ready( function(){
        <?php
        
            $elements = array();
            for ($i = 1; $i <= $counter; $i++)
                {
                    $elements[] = '.slidepics'.$i;
                }
        
        ?>
        
        jQuery('<?php echo implode(",", $elements) ?>').cycle({
                fx: 'fade',
                speed: 1500,
                timeout: 5000,
                delay: -2000    
        })
    })
});
</script>
<?php get_footer(); ?>
