$.getJSON( "cityvn.json", function( data ) {
	var cityName = [];
	$.each( data, function( key, val ) {
		cityName.push(val.name);
	});
	$('#form-search').autocomplete({
		delay:100,
		source:cityName
	});
});
