$(function() {
	// $("#reset").click(function(){
	// 			$("#response").fadeOut();
	// 		});
	// Validate the contact form
  $('#contactform').validate({
  	// Specify what the errors should look like
  	// when they are dynamically added to the form
  	errorElement: "div",
  	// wrapper: "div class=form_error",
  	errorPlacement: function(error, element) {
  		error.insertAfter( element);
  		// error.wrap("<div class='error'></div>");
  		// $("<div></div>").insertBefore(error);
  	},
  	
  	// Add requirements to each of the fields
  	rules: {
  		name: {
        lettersonly: true,
  			required: true,
  			minlength: 2
  		},
		
  		email: {
  			required: true,
  			email: true
  		},
		
		number: {
		required: true,
		numbersonly: true,
  		minlength: 8		
		},
		
  		message: {
			englishonly: true,
  			required: true,
  			minlength: 10
  		}
  	},
  	
  	// Specify what error messages to display
  	// when the user does something horrid
  	messages: {
  		name: {
  			required: "Please enter your name.",
  			minlength: jQuery.format("At least {0} characters required.")
  		},
  		email: {
  			required: "Please enter your email.",
  			email: "Please enter a valid email."
  		},
		number: {
  			required: "Please enter your number.",
  			minlength: jQuery.format("At least {0} characters required.")
  		},
  		message: {
  			required: "Please enter a message.",
  			minlength: jQuery.format("At least {0} characters required.")
  		}
  	},
  	
  	// Use Ajax to send everything to processForm.php
  	submitHandler: function(form) {
  		$("#send").attr("value", "Sending...");
  		$(form).ajaxSubmit({
  			success: function(responseText, statusText, xhr, $form) {
  				//$(form).slideUp("fast");
  				$("#response").html(responseText).hide().slideDown("fast");
				$("#send").attr("value", "Send");
		}
  		});
  		return false;
  	}
  });
});