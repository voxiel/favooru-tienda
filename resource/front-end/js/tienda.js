/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.cart-scroll').bind('click', function(event) {
        var $anchor = $(this);
        var $section = "#" + $anchor.closest('section').attr('id');
        $($anchor.attr('href')).show();
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo', function(){$($section).hide();$($anchor).css("padding-top","60");});
        event.preventDefault();
    });
});

$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $($anchor.attr('href')).show();
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


$(function() {
    $('a.btn-form-affiliate').bind('click', function(event) {
        var $anchor = $(this);
        /*
        $($anchor.attr('href')).show();
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        */
        //event.preventDefault();    

        //$('#affiliate-form').submit(function(event) {
            //event.preventDefault();

            console.log($('#affiliate-form').serialize());

            $.post($('#affiliate-form').attr('action'), $('#affiliate-form').serialize(), function( data ) {
              console.log('entra carajo');

              if(data.st == 0){
                   $('#form-error').show();
                   $('#form-error').html(data.msg);
              }

              if(data.errors == 0){   
                $('#form-error').hide();
                $($anchor.attr('href')).show();
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
              }        
            }, 'json')
            .done( function(data){
                console.log('done');
                console.log(data)
            })
            .fail( function(data){
                console.log('fail');
                console.log(data)
            });

            return false;           

        //});//del submit 

    });
});

$(function() {
    $('a.home').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo', function() {hide_cart();});
        event.preventDefault();
    });
});

$(function() {
    $('a.adtocart').bind('click', function(event) {
        var $anchor = $(this);
        $($anchor.attr('href')).show();
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo', function() {hide_home();});
        event.preventDefault();
    });
});

function hide_cart(){
    $('#top').hide();
    $('#cart-data').hide();
    $('#cart-end').hide();
}

function hide_home(){
    $('#info').hide();
    $('#how-to').hide();
    $('#catalog').hide();
}

function show_home(){
    $('#info').show();
    $('#how-to').show();
    $('#catalog').show();
}

// $(function() {
//     $('#buy-form').bind('submit', function(event) {
//         $.scrollLock( false ); 
//         var $anchor = '#cart-end';
//         $('html, body').stop().animate({
//             scrollTop: $($anchor).offset().top
//         }, 1500, 'easeInOutExpo', function() {relock();});
//         event.preventDefault();
//     });
// });

$(function() {
    $('#affiliate-form').bind('submit', function(event) {
        var $anchor = '#codigo-afiliado';
        $($anchor).toggle();
        $('html, body').stop().animate({
            scrollTop: $($anchor).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(function() {
    $('#show-table').bind('submit', function(event) {
        var $anchor = '#table';
        $($anchor).toggle();
        event.preventDefault();
        $('#show').prop('disabled', true);
    });
});


function relock(){
    $.scrollLock( true );
}


$(function() {
    $('#buy-form').bind('submit', function(event) {
        $.post($('#buy-form').attr('action'), $('#buy-form').serialize(), function( data ) {
        if(data.st == 0)
            {
             $('#form-error').show();
             $('#form-error').html(data.msg);
            }
            if(data.errors == 0)
            {   
               $('#form-error').hide();
                $('#cart-end').show();
                $('html, body').stop().animate({
                    scrollTop: $('#cart-end').offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            }        
        }, 'json');
        return false;           
    });
});



