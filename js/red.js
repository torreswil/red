
jQuery(document).ready(function(){
	cargarmunicipios();
	$('#sdep').change(cargarmunicipios);
});

function cargarmunicipios () {
	var cd = $('#sdep').val();
	var path = $('#path').val();
	$.get(path + 'concesionarios/municipio', {'id' : cd}, function(resp) {
		$('#smun').empty().html(resp);
	});
}