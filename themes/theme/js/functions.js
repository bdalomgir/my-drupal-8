/*pop sidebar nav*/
jQuery('section.main.sidebar .aside nav ul li.expanded ul').hide();
	jQuery('section.main.sidebar .aside nav ul li.expanded').prepend('<span class="toggle"></span>');
		jQuery('section.main.sidebar .aside nav ul li.expanded span.toggle').click(function(e) {
		e.preventDefault();
		jQuery(this).toggleClass('expand');
		jQuery(this).next().next().slideToggle("slow");
});
/*pop sidebar nav*/

/*pop mobile*/
( function( jQuery ) {
	var body    = jQuery('body'),
	    _window = jQuery( window );
	( function() {
		var toggle1 = jQuery('header .top .mobile'), button, menu;
		var toggle2 = jQuery('section.mobile'), button, menu;

		jQuery('header .mobile a').on('click', function() {
			toggle1.toggleClass('on');
			toggle2.toggleClass('on');
		} );
	} )();
} )( jQuery );
/*pop mobile*/

/*pop navigate*/
( function( jQuery ) {
	var body    = jQuery('body'),
	    _window = jQuery( window );
	( function() {
		var toggle1 = jQuery('section.nav'), button, menu;
		var toggle2 = jQuery('section.nav .block-menu ul.menu-parent'), button, menu;

		jQuery('section.nav .heading').on('click', function() {
			toggle1.toggleClass('on');
			toggle2.toggleClass('on');
		} );
	} )();
} )( jQuery );
/*pop navigate*/

/*alert minor*/
( function( jQuery ) {
	var body    = jQuery('body'),
	    _window = jQuery( window );
	( function() {
		var toggle1 = jQuery('section.alert.minor'), button, menu;

		jQuery('section.alert.minor .info .heading .right a').on('click', function() {
			toggle1.toggleClass('on');
		} );
	} )();
} )( jQuery );
/*alert minor*/

/*alert major*/
( function( jQuery ) {
	var body    = jQuery('body'),
	    _window = jQuery( window );
	( function() {
		var toggle1 = jQuery('section.alert.major'), button, menu;

		jQuery('section.alert.major .info .heading .right a').on('click', function() {
			toggle1.toggleClass('on');
		} );
	} )();
} )( jQuery );
/*alert major*/