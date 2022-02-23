$( "#register_form" ).submit(function(event) {  
  let email    = $("#your-email").val().trim();
  let password = $("#your-password").val().trim();
  let dob = $("#your-dob").val().trim();
  let name = $("#your-name").val().trim();
  if(email.length == 0 && password.length == 0)
        {
            event.preventDefault();
            $("#error-email").text("Email cannot Be Empty");
            return false;
        }
});