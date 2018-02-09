/**
 * Created by guillaumeamortila on 17/11/2017.
 */

$(document).ready( function(){


    // SMOOTH SCROLL

    function scrollNav() {
        $('.ancre').click(function(){
            $('html, body').stop().animate({
                scrollTop: $( $(this).attr('href').replace('/','') ).offset().top - 20
            }, 600);
            return false;
        });
    }
    scrollNav();

    if(window.location.hash){
        if($( window.location.hash ).length) {
            $('html, body').stop().animate({
                scrollTop: $(window.location.hash).offset().top - 20
            }, 600);
        }
    }


    //var header = document.getElementById('header')
    var hscroll = document.getElementById('headerScroll');

    window.addEventListener('scroll', function(){
        console.log(window.pageYOffset)
        if(window.pageYOffset > 99){
            //hscroll.style = 'display:flex;';
        } else {
            //hscroll.style = 'display:none;';
        }
    })

});