<?php
/*
Template Name: No Content
*/

get_header(); ?>
<?php  get_sidebar() ?>

    <div class="maincontent">
    
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
                    ?><div class="images"><?php
                    foreach ($attachments as $attachment) 
                        {
                            $image_data = wp_get_attachment_image_src($attachment->ID, 'full');
                            $image_src = $image_data[0];
                            $image_src = str_replace(get_bloginfo('wpurl'), '', $image_src);
                            ?>
                                <img src="<?php bloginfo('template_directory'); ?>/scripts/timthumb.php?src=<?php echo $image_src;?>&amp;w=1024&amp;h=560&amp;zc=1" rel="<?php echo $attachment->post_title ?>" width="1024" height="560"> 
                            <?php 
                        }
                    ?></div><?php
                }
            
            if (!empty($post->post_content))
                {
                    $_dialog_position             = get_post_meta($post->ID, '_dialog_position', TRUE);
                    if (empty($_dialog_position))
                        $_dialog_position = 'tr';     
                    ?>
                        <div class="ind-pane">
                            <a href="javascript:void(0)"><div class="<?php echo $_dialog_position ?> pm-btn"></div></a><!--END plus-minus-btn-->
                            <div class="infobox <?php echo $_dialog_position ?>">
                                <?php echo $post->post_content ?>
                            </div><!--END amen-infobox-->
                        </div>
                    <?php
                }
        ?>

          
     </div><!--END maincontent--> 


<?php get_footer(); ?>
