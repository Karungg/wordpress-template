( function( api ) {

	// Extends our custom "landing-pagency" section.
	api.sectionConstructor['landing-pagency'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
