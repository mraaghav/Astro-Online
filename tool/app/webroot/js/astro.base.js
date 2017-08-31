$(document).ready(function() {

	// Plugins initialization

	$(".location-picker").locationpicker({
		location: {
			latitude: -22.90993839999999,
			longitude: -47.06263319999999
		},
		radius: 10,
		inputBinding: {
			locationNameInput: $('#birthplace')
		},
		enableAutocomplete: true,
		onchanged: function(currentLocation, radius, isMarkerDropped) {
			//console.log("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
		}
	});

	$(".date-picker").datepicker({
		language: 'pt'
	});

	// Global events
	$(".btn-submit").click(function() {
		$(this).parents("form").submit();
	});
});
