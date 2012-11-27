jQuery(document).ready(function()
    {
    
         jQuery('#page_template').change(function(){

           if (jQuery(this).val() == 'page-featured-content.php') {
               jQuery('#box-pc-page-featured-content').show();
               }else{
               jQuery('#box-pc-page-featured-content').hide();
          }
          if (jQuery(this).val() == 'page-no-content.php') {
               jQuery('#box-pc-page-child').show();
               }else{
               jQuery('#box-pc-page-child').hide();
          }
       }) 
		
        
});
