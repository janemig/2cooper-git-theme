<?php

    add_action('admin_menu', 'theme_add_custom_box');
    add_action('save_post', 'theme_save_postdata', 99);

    /* Adds a custom section to the "advanced" Post and Page edit screens */
    function theme_add_custom_box() 
        {
            global $post;

            add_meta_box( 'box-pc-page-featured-content','Featured Content Settings', 'theme_page_featured_content', 'page', 'normal' ,'high' );
            add_meta_box( 'box-pc-page-child','Child Featured Content Settings', 'theme_page_child', 'page', 'normal' ,'high' );
        }

        
    function theme_page_featured_content()
        {
            global $post;
            
            $page_template = get_post_meta($post->ID, '_wp_page_template', TRUE);
            
            if ($page_template != 'page-featured-content.php')
                {
                    ?>
                        <style>
                            #box-pc-page-featured-content {display: none}
                        </style>
                    <?php   
                }
            
            
            // The actual fields for data entry
            $_backgrounds             = get_post_meta($post->ID, '_backgrounds', TRUE); 
            $_hover_color             = get_post_meta($post->ID, '_hover_color', TRUE);


            ?>
            
            <div id="cft">
                     <dl class="dl_text" id="dl__artist_name0_0">
                        <dd>
                            <p class="label">Backgrounds Color:</p>
                            <input type="text" class="cf_text" size="140" value="<?php echo $_backgrounds ?>" name="_backgrounds" />
                        </dd>
                    </dl>
                    
                    <dl class="dl_text" id="dl__artist_name0_0">
                        <dd>
                            <p class="label">Hover Color:</p>
                            <input type="text" class="cf_text" size="140" value="<?php echo $_hover_color ?>" name="_hover_color" />
                        </dd>
                    </dl>
                
                <div class="clear"></div>
              </div>  
            <?php
            
        }
    
    
    function theme_page_child()
        {
            global $post;
            
            $page_template = get_post_meta($post->ID, '_wp_page_template', TRUE);
            
            if ($page_template != 'page-no-content.php')
                {
                    ?>
                        <style>
                            #box-pc-page-child {display: none}
                        </style>
                    <?php   
                }
            
            
            // The actual fields for data entry
            $_dialog_position             = get_post_meta($post->ID, '_dialog_position', TRUE); 
                                                                                              
            ?>
            
            <div id="cft">
                     <dl class="dl_text" id="dl__artist_name0_0">
                        <dd>
                            <p class="label">Dialog Position:</p>
                            <select name="_dialog_position">
                                <option value="tr" <?php if ($_dialog_position == 'tr') {echo 'selected="selected"';} ?>>Top Right</option>
                                <option value="bl" <?php if ($_dialog_position == 'bl') {echo 'selected="selected"';} ?>>Bottom Left</option>
                                <option value="br" <?php if ($_dialog_position == 'br') {echo 'selected="selected"';} ?>>Bottom Right</option>
                            </select>
                        </dd>
                    </dl>

                
                <div class="clear"></div>
              </div>  
            <?php
            
        }
        
    /* When the post is saved, saves our custom data */
    function theme_save_postdata( $post_id ) 
        {
            global $userdata;
              
            global $post_type; 
            if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
                return $post_id;

            if (wp_is_post_revision($post_id))
                return $post_id;

            if (count($_POST) == 0)
                return $post_id;
            
            if ($post_type == 'page')
                {
                                                                                     
                    $_backgrounds             = stripslashes($_POST['_backgrounds']); 
                    $_hover_color             = stripslashes($_POST['_hover_color']);
                    $_dialog_position             = stripslashes($_POST['_dialog_position']);
                 
                    update_post_meta($post_id, '_backgrounds', $_backgrounds);
                    update_post_meta($post_id, '_hover_color', $_hover_color);
                    update_post_meta($post_id, '_dialog_position', $_dialog_position);
                }
        }

?>
