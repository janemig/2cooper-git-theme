
  jQuery(document).ready( function(){
          jQuery(".pm-btn").click(function (e) {
            jQuery(this).closest('.ind-pane').find('.infobox').slideToggle("slow");
        });

  })