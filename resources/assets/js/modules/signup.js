App.Modules = App.Modules || {};

App.Modules.Signup = function () {
   "use strict"
   var options = { };

   var validateSignup = function(data) {

      $('.js-signup-form').validate({
         onkeyup: false,
         errorClass: "message--inline-error",
         submitHandler: function (form) {
            form.submit();
         },
         rules: {
            name: {
               required: true
            },
            email: {
               required: true,
               email: true
            }
         },
         messages: {
            name: {
               required: "Please give us your full name"
            },
            email: {
               required: "Please give us your email address",
               email: "Your email is not valid"
            }
         }
      });

      return false;
   };

   return {
      init: function() { return this; },
      events: function() {
         Events.bind("load").to(validateSignup, this);

         return this;
      }
   };

}();


