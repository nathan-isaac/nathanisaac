(function() {
    $(window).scroll(function() {
        if(isScrolledIntoView('#skills')) {
            $('.progress').addClass('animate');
        }
    });

    $('#nav-toggle').on('click', function(e) {
        e.preventDefault();

        toggleMobileNav();
    });

    $('.nav-item').on('click', function(e) {
        $(this).closest('.nav').removeClass('nav-mobile');
        toggleMobileNav();
    });

    $('.flash-close').on('click', function() {
        $(this).closest('.flash').addClass('animated bounceOutRight');
    });

    if($('.flash')) {
        setTimeout(function() {
            $('.flash').addClass('animated bounceOutRight');
        }, 5000);
    }

    function toggleMobileNav() {
        var icon = $('#nav-toggle .fa');

        if(icon.hasClass('fa-bars')) {
            icon.addClass('fa-times');
            icon.closest('.nav').addClass('nav-mobile');
            icon.removeClass('fa-bars');
        } else {
            icon.addClass('fa-bars');
            icon.closest('.nav').removeClass('nav-mobile');
            icon.removeClass('fa-times');
        }
    }

    function isScrolledIntoView(elem)
    {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }
})();