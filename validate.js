$( function() { 
	
	//When any form which needs validated is submitted, we need to check all the fields within it.
	$( "form.validate" ).submit( function( e ) { 
		var validForm = true, validField = true;
		
		//Remove any error messages inside this form (so we can show what is actually invalid now)
		$( ".errormessage", this ).remove();
		
		//Each element in the form we need to validate has a className of validate.
		jQuery.each( $( '.validate', this ), function() {
			validField = validate( this );
			if ( ! validField ) {
				validForm = false;
				
				//Grabbing the parent of the input field gives us the fieldset responsible, and allows us to insert our error message.
				$( this ).parent().append( "<div class='errormessage'>Oops! You missed something.</div>" );
				Cufon.replace('.errormessage', {
					hover: true
				});
			}
		} );
		
		//Returning false stops the form from being submitted to the server.
		return validForm;
	} );
} );

$( function() {
	//When fields that have validation are focused, we need to move the message out of the way so the user can type.
	$( "input.validate, textarea.validate" ).focus( function( e ) {
		$( ".errormessage", $( this ).parent() ).fadeOut( 500 );
	
	//When fields are blured, we need to validate the form and redisplay the error if its not valid still.
	} ).blur( function( e ) { 
		if ( ! validate ( this ) ) {
			var error = $( ".errormessage", $( this ).parent() );
			if ( error.length > 0 ) {
				error.fadeIn( 500 );
			} else {
				$( this ).parent().append( "<div class='errormessage'>Oops! You missed something.</div>" );
				Cufon.replace('.errormessage', {
					hover: true
				});
			}
		}
	} );
} );

function validate( field ) {
	var valid = true;
	if ( $( field ).hasClass( 'email' ) ) {
		valid = $( field ).val().match(/^[A-Za-z0-9]+[\w.-]*?[A-Za-z0-9]+@[A-Za-z0-9]+[\w.-]*?\.[A-Za-z0-9]{2,5}$/);
	} else {
		valid = ( $( field ).val() === '' ) ? false : true;
	}
	return valid;
}