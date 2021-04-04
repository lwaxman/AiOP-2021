
jQuery(document).ready(function($){

	var menuOpen = false; 
	var csShowMore = false; 

	$("#menuToggle").on('click', function(event){
		menuOpen =! menuOpen; 
		if(menuOpen){
			console.log("OPEN");
			$('.menu').css("left", "0px");
		}else{
			console.log("CLOSE");
			if(window.innerWidth<=720){ //860
				$('.menu').css("left", "100vw");
			}else{
				$('.menu').css("left", "auto");
			}
		}
	});

	$("#cs_read_more").on('click', function(event){
		csShowMore =! csShowMore; 
		if(window.innerWidth<=720){
			if(csShowMore){
				// console.log("CS OPEN");
				$('.cs_more_text').css("max-height", "1200px");
				$("#cs_read_more p").html("Show less");

			}else{
				// console.log("CS CLOSE");
				$('.cs_more_text').css("max-height", "0px");
				$("#cs_read_more p").html("Read more");
			}
		}
	});
	if(window.innerWidth>720){
		console.log("BIGGER THAN 720");
		$("#cs_read_more").css("display", "none");
		$('.cs_more_text').css("max-height", "1920px");			
	}

});