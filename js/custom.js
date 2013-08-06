$(document).ready(function() {
	$("#inner").css("display", "none");
	$("#zipper").css("display", "none");
	
    $("#inner").fadeIn(500);
	$("a.transition").click(function(event){
		
		event.preventDefault();
		linkLocation = this.href;
		
		$("#inner").fadeOut(500,redirectPage);
		
	});
		
	function redirectPage() {
		
		window.location = linkLocation;
	}

});
