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
    $('a.page-scroll').bind('click', function(event) {
        //$.scrollLock( false ); 
        var $anchor = $(this);
        var $section = $anchor.closest('section').attr('id');
        $($anchor.attr('href')).show();
        //if ($anchor.hasClass('adtocart')) {show_all();};
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

$(function() {
    $('a.home').bind('click', function(event) {
        //$.scrollLock( false ); 
        var $anchor = $(this);
        $($anchor.attr('href')).show();
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo', function() {hide_cart();});
        event.preventDefault();
    });
});

function hide_cart(){
    $('#top').hide();
    $('#cart-data').hide();
    $('#cart-end').hide();
}

function show_all(){
    $('#top').show();
    $('#cart-data').show();
    $('#cart-end').show();
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
               $.scrollLock( false ); 
                var $anchor = '#cart-end';
                $('html, body').stop().animate({
                    scrollTop: $($anchor).offset().top
                }, 1500, 'easeInOutExpo', function() {relock();});
                event.preventDefault();
            }        
        }, 'json');
        return false;           
    });
});



