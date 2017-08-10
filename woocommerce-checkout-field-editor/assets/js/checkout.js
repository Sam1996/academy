jQuery(document).ready(function($) {

	// Frontend Chosen selects
	if ( $().chosen ) {
		$( 'select.checkout_chosen_select.old_chosen, .form-row .select.old_chosen' ).chosen();
	}

	if ( $().select2 ) {
		$( 'select.checkout_chosen_select:not(.old_chosen), .form-row .select:not(.old_chosen)' ).filter( ':not(.enhanced)' ).each( function() {
			$( this ).select2( {
				minimumResultsForSearch: 10,
				allowClear:  true,
				placeholder: $( this ).data( 'placeholder' )
			} ).addClass( 'enhanced' );
		});
	}

	$( '.checkout-date-picker' ).datepicker({
		dateFormat: wc_checkout_fields.date_format,
		numberOfMonths: 1,
		showButtonPanel: true,
		changeMonth: true,
      	changeYear: true,
		yearRange: "-100:+1"
	});

});