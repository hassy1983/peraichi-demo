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
	
});