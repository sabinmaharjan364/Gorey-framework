
$(function() {
   
    // javascript code for sticky navigation 
    window.onscroll = function() {stickyFunction()};
    console.log('í am here');
    // Getting the selector id from index.php
    var stickyHeader = document.getElementById("navigation");
    // checking what value we have got in stickyHeader
    console.log(stickyHeader);
    var stickyHeader = stickyHeader.offsetTop;
    console.log(stickyHeader);
    function stickyFunction() {
        if (window.pageYOffset > stickyHeader) {
            // adding sticky class
            navigation.classList.add("sticky");
        } else {
            // removing sticky class
            navigation.classList.remove("sticky");
        }
    }
});



$(function() {
    $.ajax({
        type:'POST',
        url:"http://localhost/bookstore/pages/checkCart",
        data:{
            total_cart_items:"totalitems"
          },
        success:function(response) {
            
            
            if(response==null){
                $('.badge').text(response);

            }else{
                $('.badge').text(response);

            }
           

        }
    });

     // get tallest tab__content element
     let height = -1;

     $('.tab__content').each(function() {
         height = height > $(this).outerHeight() ? height : $(this).outerHeight();
      $(this).css('position', 'absolute');
     });
   
   // set height of tabs + top offset
     $('[data-tabs]').css('min-height', height + 80 + 'px');
    // $('.cart-quantity').keyup(function(){
    //     $.ajax({
    //         type:'POST',
    //         url:"http://localhost/bookstore/pages/updateCart",
    //         data:{
    //             id:
    //             quantity: $('.quantity').val()
    //           },
    //           success:function(response) {
                
    //           }
    //     });
    // });
    
});