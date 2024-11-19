$(document).ready(function(){

// event ketika keyword ditulis
    $('#keyword').on('keyup', function(){

    
        // $('#container').load('ajax/smarpthone.php?keyword=' + $('#keyword').val());

        // munculkan icon loading
        $('.loader').show();


        // $.get()
        $.get('ajax/smarpthone.php?keyword=' + $('#keyword').val(), function(data){


            $('#container').html(data);
            $('.loader').hide();
        });


    });


});
