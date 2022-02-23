function addToCart(id)
{
    
    var id=id;
    
    $.ajax({
    type:'post',
    url:"http://localhost/bookstore/pages/addToCart",
    data:{
      id:id
    },
    success:function(response) {
      console.log(response);
      if(response==null){
      }else{
          $('.badge').text(response);
            // Get the snackbar DIV
            $("#snackbar").html("<i class='fa fa-check' aria-hidden='true'></i>  successfully added to cart");
            $("#snackbar").addClass("show");
            // After 3 seconds, remove the show class from DIV
            setTimeout(function(){ 
              $("#snackbar").removeClass("show");
              window.location.reload();
            }, 3000);
            // 


      }
      

    }
    });
}
