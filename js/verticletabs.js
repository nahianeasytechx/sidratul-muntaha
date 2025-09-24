
    $(".v-tab_content").hide();
    $(".v-tab_content:first").show();

    $(".v-tab_tab-head li").click(function() {
	
      $(".v-tab_content").hide();
      var activeTab = $(this).attr("rel"); 
      $("#"+activeTab).fadeIn();		
      $(".v-tab_tab-head li").removeClass("active");
      $(this).addClass("active");

	  
    });

	