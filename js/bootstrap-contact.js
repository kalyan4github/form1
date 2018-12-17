/*  Form
 ***************************************************************************/
$(document).ready(function(){
	// validate signup form on keyup and submit

	var validator = $("#contactform").validate({
		errorClass:'has-error',
		validClass:'has-success',
		errorElement:'div',
		highlight: function (element, errorClass, validClass) {
			$(element).closest('.form-control').addClass(errorClass).removeClass(validClass);
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).parents(".has-error").removeClass(errorClass).addClass(validClass);
		},
		rules: {
			contactname: {
				required: true,
				minlength: 2
			},
			passportno: {
				required: true,				
			},
			issuedatepicker: {
				required: true,
				
			},
			validdatepicker: {
				required: true,
				
			},
			typeofpassport: {
				required: true
			},
			nationality: {
				required: true
			},
			dobdatepicker: {
				required: true
			},
			placeofbirth: {
				required: true
			},
			gender: {
				required: true
			},
			maritalstatus: {
				required: true
			},
			nationalindentityno: {
				required: true
			},
			occupation: {
				required: true
			},
			address: {
				required: true,
				minlength: 10
			}
		},
		messages: {
			contactname: {
				required: '<span class="help-block">Please enter your name.</span>',
				minlength: jQuery.format('<span class="help-block">Your name needs to be at least {0} characters.</span>')
			},
			passportno: {
				required: '<span class="help-block">Please enter a valid passportno.</span>',

			},
			issuedatepicker: {
				required: '<span class="help-block">You need to enter issue date.</span>',
				url: jQuery.format('<span class="help-block">You need to enter a valid date.</span>')
			},
			validdatepicker: {
				required: '<span class="help-block">You need to enter until valid date.</span>',
				phoneUS: jQuery.format('<span class="help-block">You need to enter a valid date.</span>')
			},
			typeofpassport: {
				required: '<span class="help-block">You need to enter a type of passport.</span>'
			},
			nationality: {
				required: '<span class="help-block">You need to enter a nationality.</span>'
			},
			dobdatepicker: {
				required: '<span class="help-block">You need to enter a valid birth date.</span>'
			},
			placeofbirth: {
				required: '<span class="help-block">You need to enter a place of birth.</span>'
			},
			gender: {
				required: '<span class="help-block">You need to enter a gender.</span>'
			},
			maritalstatus: {
				required: '<span class="help-block">You need to enter a marital status.</span>'
			},
			nationalindentityno: {
				required: '<span class="help-block">You need to enter a national indentityno.</span>'
			},
			occupation: {
				required: '<span class="help-block">You need to enter a occupation.</span>'
			},
			address: {
				required: '<span class="help-block">You need to enter a Address.</span>',
				minlength: jQuery.format('<span class="help-block">Enter at least {0} characters.</span>')
			}
		}
	});
	
});
