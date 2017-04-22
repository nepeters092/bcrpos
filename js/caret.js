$(document).ready(function()
{
	$("#main-body th a").mouseup(function() {
		if($("#id-caret").hasClass("fa-caret-down")) {
			$("#id-caret").addClass("fa-caret-up");
			$("#id-caret").removeClass("fa-caret-down");
		}
	});
	
});