// contact form validation
$(document).ready(function(){
   $().UItoTop({ easingType: 'easeOutQuart' });
   
      
   
   
   
   
	         var validator = $('#rosenapotheke').validate(
		         {
		          rules: {
		            vorname: {
		              minlength: 2,
		              required: false
		            },
		            name: {
		              minlength: 2,
		              required: true
		            },
		            ort: {
		              minlength: 2,
		              required: false
		            },
		            email: {
		              required: true,
		              email: true
		            },
		            telefon: {
		              minlength: 8,
		              required: false,
		              number: true
		            },
		            
		            nachricht: {
		              minlength: 20,
		              required: false
		            }
		          },
		          highlight: function(label) {
		            $(label).closest('.control-group').addClass('error');
		          },
		          success: function(label) {
		            label
		              .text('OK!').addClass('valid')
		              .closest('.control-group').addClass('success');
		          }
		         });


		    	// contact form submission, clear fields, return message
		    	$('#rosenapotheke').submit(function() {
				    $.post('rosenapothekesend.php', {vorname: $('#vorname').val(), name: $('#name').val(), ort: $('#ort').val(), email: $('#email').val(), telefon: $('#telefon').val(),
				     nachricht: $('#nachricht').val(), recaptcha_challenge_field: $('#recaptcha_challenge_field').val(), recaptcha_response_field: $('#recaptcha_response_field').val(), contactFormSubmitted: 'yes'}, 
				     
				     function(data) {
				        $("#formResponse").html(data).fadeIn('slow');
				        $('#recaptcha_response_field').val(''); /* Clear the inputs */
				    }, 'text');
				    return false;
				    validator.resetForm();
				});

$('#rosenreset').click(function () { 
validator.resetForm();
$("#formResponse").hide();
$('.control-group').removeClass('error');
$('.control-group').removeClass('success');
}); 

$('button#abbrechen').click(function () { 
validator.resetForm();
$("#formResponse").hide();
$('.control-group').removeClass('error');
$('.control-group').removeClass('success');

$(':input','#rosenapotheke')
 .not(':button, :submit, :reset, :hidden')
 .val('')
 .removeAttr('checked')
 .removeAttr('selected');
});
 


			}); // end document.ready
			
			
		
