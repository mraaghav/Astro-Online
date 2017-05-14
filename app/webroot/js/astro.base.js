$(document).ready(function() {
	
	// Global events 
	$(".btn-submit").click(function() {
		$(this).parents("form").submit();
	});
});