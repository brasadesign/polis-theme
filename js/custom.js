	jQuery(document).ready(function(){
		jQuery(".tabContents").hide(); // Hide all tab content divs by default
		jQuery(".tabContents:first").show(); // Show the first div of tab content by default
		
		jQuery(".tabContaier ul li a").click(function(){ //Fire the click event
			
			var activeTab = jQuery(this).attr("href"); // Catch the click link
			jQuery(".tabContaier ul li a").removeClass("active"); // Remove pre-highlighted link
			jQuery(this).addClass("active"); // set clicked link to highlight state
			jQuery(".tabContents").hide(); // hide currently visible tab content div
			jQuery(activeTab).fadeIn(); // show the target tab content div by matching clicked link.
			
			return false; //prevent page scrolling on tab click
		});
	});