$(document).ready(function() {
	$("#pagecontainer").css("display", "none");
	$("#zipper").css("display", "none");
	
    $("#pagecontainer").fadeIn(100);
	$("a.transition").click(function(event){
		
		event.preventDefault();
		linkLocation = this.href;
		
		$("#pagecontainer").fadeOut(100,redirectPage);
		
	});
		
	function redirectPage() {
		
		window.location = linkLocation;
	}

});
