
jQuery(document).ready(function($){

	var menuOpen = false; 

	$("#menuToggle").on('click', function(event){
		menuOpen =! menuOpen; 
		if(menuOpen){
			console.log("OPEN");
			$('.menu').css("left", "0px");
		}else{
			console.log("CLOSE");
			if(window.innerWidth<=860){
				$('.menu').css("left", "100vw");
			}else{
				$('.menu').css("left", "auto");
			}
		}
	});

});