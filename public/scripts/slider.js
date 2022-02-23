
$(function() {
    $( "#slider-3" ).slider({
        range:true,
        min: 0,
        max: 1000,
        values: [ 0, 1000 ],
        slide: function( event, ui ) {
           $( "#price" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
     });
     $( "#price" ).val( "$" + $( "#slider-3" ).slider( "values", 0 ) +
        " - $" + $( "#slider-3" ).slider( "values", 1 ) );

    });