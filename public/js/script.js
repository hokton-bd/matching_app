$(window).scroll(function() {
    
    if($(window).scrollTop() != 0) {
        $('.header_bottom').addClass('change-header');
    } else {
        $('.header_bottom').removeClass('change-header');
    }
});



// Basic Code keep it 
$(document).ready(function () {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");

        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

// Use Your Class or ID For Selection 

function onScroll(event){
    var scrollPos = $(document).scrollTop();

    $('#navbar_menu ul li a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        const adjust = 80;
        if (refElement.position().top - adjust <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#navbar_menu ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}

$('.faq-item').on('click', function() {
    let i = $(this).find('.fa-plus');
    i.toggleClass('faq-active');
    let a = $(this).find('.faq-a');
    a.slideToggle();

});

$('.header-login').on('click', function() {

    $('.login-modal').fadeIn();

});

$('.modal-closer').on('click', function() {
    $('.modal-block').fadeOut();
});

$('.modal-bg').on('click', function() {
    $('.modal-block').fadeOut();
});


$('.register-btn').each(function() {

    $(this).on('click', function() {
        
        let target = $(this).data('target');
        console.log(target);
        $(target).show();
        
    });

});