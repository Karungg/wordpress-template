(function( $ ) {

	'use strict';

	$(function() {

		var data = {};
		data.ldgpgy_plugins_list = 'yes';
		$.ajax({
			url: document.URL,
			cache: false,
			type: "get",
			data: data,
			success: function(response) {

				if( $( response ).find('.ldgpgy-addons-list').length > 0 ) {

					$('.ldgpgy-addons-list').replaceWith( $( response ).find('.ldgpgy-addons-list') );
				}
			}
		});
	});

})( jQuery );
