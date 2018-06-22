jQuery('document').ready(function($){
        var img = "";
        $('.myproject-item-icons img').mouseenter(function(){
            img = $(this).attr('src');
            $(this).attr('src', $(this).attr('data-src'));
        });

        $('.myproject-item-icons img').mouseleave(function(){
            $(this).attr('src', img);
        });

        $('.modal-body-close-dg').on('click', function(){
       $('.modal-dg').fadeOut('300');
    });

    $('.create-new').on('click', function(){
       $('#new-project').css({'display': 'flex'}).fadeIn('300');
    });

    $('.modal-button').on('click', function(){
       if ($(this).hasClass('active')){
           return;
       }

       $('.modal-dg').fadeOut('300');
    });

    $('.myproject-item-icon[data-tooltip = "שלח במייל"]').on('click', function(){
        $('#send-mail').css({'display': 'flex'}).fadeIn('300');
    });

    $('.myproject-item-icon[data-tooltip = "מחק פרוייקט"]').on('click', function(){
        $('#delete').css({'display': 'flex'}).fadeIn('300');
    });

    $('.change-pass').on('click', function(){
       $('#change-pass').css({'display': 'flex'}).fadeIn(300);
    });

     $('.logout').on('click', function(){
       $('#logout').css({'display': 'flex'}).fadeIn(300);
    });

     $('.delete').on('click', function(){
       $('#delete').css({'display': 'flex'}).fadeIn(300);
    });

});

