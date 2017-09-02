/**
 * Main base javascript file. Contains general purpose script.
 *
 * @written by: Diego Silva <contato@diegosilva.me>
 * Created: 15/06/2017
 * Last update: 02/09/2017
 **/

const DEFAULT_BASE_LATITUDE = -22.90993839999999;
const DEFAULT_BASE_LONGITUDE =  -47.06263319999999;

$(document).ready(function() {

	/****** Plugins initialization ******/

	// Location Picker
	$("#birthplaceLatitude").val(DEFAULT_BASE_LATITUDE);
	$("#birthplaceLongitude").val(DEFAULT_BASE_LONGITUDE);
	$(".location-picker").locationpicker({
		location: {
			latitude: DEFAULT_BASE_LATITUDE,
			longitude: DEFAULT_BASE_LONGITUDE
		},
		radius: 10,
		inputBinding: {
			locationNameInput: $('#birthplace')
		},
		enableAutocomplete: true,
		onchanged: function(currentLocation, radius, isMarkerDropped) {
			$("#birthplaceLatitude").val(currentLocation.latitude);
			$("#birthplaceLongitude").val(currentLocation.longitude);
		}
	});

	// Date picker
	$(".date-picker").datepicker({
		language: 'pt'
	});

	// Masks
	$(".mask-date").mask("99/99/9999");

	/***** Global events treatment *****/
	$(".btn-submit").click(function() {
		$(this).parents("form").submit();
	});

});
