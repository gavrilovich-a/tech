

jQuery('document').ready(function($){
   $('#mob-op').on('click', function(){
       $('#menu').toggleClass('mobile-open');

       if ($('#menu').hasClass('mobile-open')){
           $(this).attr('src', 'img/close-light.png' );
       } else {
           $(this).attr('src', 'img/hamburger-light.png' );
       }
   });

    var topline = document.getElementById('topline');
    var desc = document.getElementById('desctop-opener');
    var navigation = document.getElementById('menu');
    var headerLogo = document.getElementById('header-logo');
    var descOp = document.getElementById('desc-op');

    desc.addEventListener('click', function(){
        if (navigation.classList.contains('open')){
            navigation.classList.remove('open');
            descOp.src = "img/close-light.png";
        } else {
            navigation.classList.add('open');
            descOp.src = "img/hamburger-light.png";
        }

        $('#header-logo').toggleClass('disp');
        $('#desctop-opener').toggleClass('ml-auto');
    });

    var first = true;
    var nav = document.getElementById('menu');
    window.onscroll = function(){
        var top = (window.pageYOffset || document.scrollTop)  - (document.clientTop || 0);
        if (top > 50){
            nav.classList.add('background');
            if (first){
                nav.classList.add('open');
                first = false;
            }
            topline.classList.add('background');
            headerLogo.classList.add('open');
            desc.classList.add('open');
            nav.classList.add('opacity');
            nav.classList.remove('visible');
        } else {
            nav.classList.remove('background');
            topline.classList.remove('background');
            headerLogo.classList.remove('open');
            desc.classList.remove('open');
            nav.classList.remove('opacity');
            nav.classList.add('visible');
        }
    }

});

