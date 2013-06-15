$(document).ready(function() {
	
	$('.main-nav a').live('click', function() {
		var thehref = $(this).attr('href');
		if ( thehref == '#work' ) {
			$.scrollTo( 0, 800 );
		} else {
			$.scrollTo( thehref, 800, {offset:-45} );
		}
		return false;
	});
	
	$('body').scrollspy({'offset':50});
	
	Shadowbox.init({
	    // skip the automatic setup again, we do this later manually
	    skipSetup: true
	});
	
	window.onload = function() {
	
	    // set up all anchor elements with a "thumbnail" class to work with Shadowbox
	    Shadowbox.setup("a.thumbnail");
	
	};
	
	var yourStartLatLng = new google.maps.LatLng(59.3426606750, 18.0736160278);
	$('#map_canvas').gmap({'center': yourStartLatLng});
	$('#map_canvas').gmap('option', 'zoom', 13);
	$('#map_canvas').gmap('addMarker', { /*id:'m_1',*/ 'position': '59.3426606750, 18.0736160278', 'bounds': false } ).click(function() {
                $('#map_canvas').gmap('openInfoWindow', { 'content': 'Your Office Location' }, this);
        });
	
});