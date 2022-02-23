function removeCartItem(id)
{
    
    var id=id;
    
    $.ajax({
    type:'post',
    url:"http://localhost/bookstore/pages/removeCartItem",
    data:{
      id:id
    },
    success:function(response) {
      console.log(response);
      if(response==null){
      }else{
        console.log(response);
        $('.badge').text(response); 
        $("#snackbar").html("<i class='fa fa-check' aria-hidden='true'></i>  successfully item deleted");
            $("#snackbar").addClass("show");
            // After 3 seconds, remove the show class from DIV
            setTimeout(function(){ 
              $("#snackbar").removeClass("show");
              window.location.reload();
            }, 3000);
        
          


      }
      

    }
    });
}
