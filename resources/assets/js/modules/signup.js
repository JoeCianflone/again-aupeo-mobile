App.Modules = App.Modules || {};

App.Modules.Signup = function () {
   "use strict"
   var options = { };

   var validateSignup = function(data) {
      $('.js-signup-form').validate({
         onsubmit: false,
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
      if ($('.js-signup-form').valid()) {
         console.log("VALID");
      }
      return false;
   };

   var sendToDB = function(data) {

   };

   return {
      init: function() { return this; },
      events: function() {
         Events.bind("click", ".js-signup-button").to(validateSignup, this);

         return this;
      }
   };

}();


