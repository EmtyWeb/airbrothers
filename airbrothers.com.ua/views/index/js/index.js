$(function () {
    // Set starting slide to 1
    var startSlide = 1;
    // Get slide number if it exists
    if (window.location.hash) {
        startSlide = window.location.hash.replace('#', '');
    }
    // Initialize Slides
    $('#slides').slides({
        preload: true,
		preloadImage: '../../public/images/loading.gif',
        generatePagination: true,
        play: 7000,
        pause: 5500,
        slideSpeed: 1200,			
        hoverPause: true,
        // Get the starting slide
        start: startSlide,
        animationComplete: function (current) {
            // Set the slide number as a hash
            // window.location.hash = '#' + current;

            setTimeout(function () {
                $('.title'+ current).css({'display':'block','opacity':'0' });
                $('.title'+ current).animate({'opacity':'1'},700);
            }, 700); // время в мс

            $('#page_header article:not(.title'+ current+')').animate({'opacity':'0.1'},700);
            $('#info article:not(.title'+ current+')').animate({'opacity':'0.1'},700);

            setTimeout(function () {
                $('#page_header article:not(.title'+ current+')').css({'display':'none'});
                $('#info article:not(.title'+ current+')').css({'display':'none'});
            }, 700); // время в мс






            $('#slides .next' || '#slides .prev').click(function(){

                    $('.title'+ current).css({'display':'block'});


                    $('#page_header article:not(.title'+ current+')').css({'display':'none'});
                    $('#info article:not(.title'+ current+')').css({'display':'none'});

            });

        }
    });

    /*вкладки*/
	

	


});

