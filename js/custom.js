$(document).ready(function() {
	$("#pagecontainer").css("display", "none");
	$("#zipper").css("display", "none");
	
    $("#pagecontainer").fadeIn(500);
	$("a.transition").click(function(event){
		
		event.preventDefault();
		linkLocation = this.href;
		
		$("#pagecontainer").fadeOut(500,redirectPage);
		
	});
		
	function redirectPage() {
		
		window.location = linkLocation;
	}

});
