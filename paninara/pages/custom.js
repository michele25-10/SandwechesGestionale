$(document).ready(function (){

    $('.increment-btn').click(function(e){
        e.preventDefault(); 
        
        var qty = $('.input-qty').val(); 
        alert(qty);

        var value = parseInt(qty, 10); 
        value = isNan(value) ? 0 : value; 
        
        if(value < 10){
            value ++; 
            $('input-qty').val(value)
        }
    
    }); 

});