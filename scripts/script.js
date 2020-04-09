$(document).ready(function(){


 
 $('#contact-form').validate({
     rules: {
       
       FOOD: {
         maxlength: 20,
         required: true
       },
       
          Q1[]: { 
           //required: true,
           //minlength: 1
            required: function(elem)
            {
                return $("input.select:checked").length > 0;
            }
             
          }
     },
     messages: { 
            name: "Enter your name",

            password: { 
                required: "Provide a password", 
                rangelength: jQuery.format("Enter at least {0} characters") 
            },

            password_confirm: { 
                required: "Repeat your password", 
                minlength: jQuery.format("Enter at least {0} characters"), 
                equalTo: "Enter the same password as above" 
            }, 

            email: { 
                required: "Please enter a valid email address", 
                minlength: "Please enter a valid email address", 
                remote: jQuery.format("{0} is already in use") 
            },   
            
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
   
}); // end document.ready