$('#your-email').keyup(function(){
  var email=$('#your-email').val();
  var id=1;
  $.ajax({
    type:'post',
    url:"http://localhost/bookstore/pages/checkUserExist",
    data:{
      email:email
    },
    success:function(response) {
      console.log(response);
      if(response==0){
        $('#error-email').hide();
        $('.submit').prop("disabled",false);

      }else{
          $('#error-email').html(response);
          $('.submit').prop("disabled",true);
// exit();
          // // Get the snackbar DIV
            // $("#snackbar").html("<i class='fa fa-check' aria-hidden='true'></i>  successfully added to cart");
            // $("#snackbar").addClass("show");
            // // After 3 seconds, remove the show class from DIV
            // setTimeout(function(){ 
            //   $("#snackbar").removeClass("show");
            //   window.location.reload();
            // }, 3000);
            // // 


      }
      

    }
    });
});
