$(function () {
    $('.air_design div img').hover(function(){
        $(this).parent().animate({'marginTop':'-5px','height':'115px'},300)
        $(this).animate({'width':'110px','height':'110px'},300);

    },function(){
        $(this).parent().animate({'marginTop':'0','height':'110px'},300)
            $(this).animate({'width':'100px','height':'100px'},300);
        });
    
	

	
	
	$('.air_design div img').click(function(e){
        e.preventDefault();
        $('#wrap').prepend(
            '<div id="modal">' +
                '<div id = "my_logo">' +
                    '<div id = "modal_content">'+
                            '<div id = "slides">'+
                                '<div id="left"><a href="#" class="prev"></a></div>'+
                                '<div id="right"><a href="#" class="next"></a></div>'+
                                '<div class="slides_container">'+
                                    '<div class="slide"><img src="public/images/design/design1_full.png"/></div>'+
                                    '<div class="slide"><img src="public/images/design/design2_full.png"/></div>'+
                                    '<div class="slide"><img src="public/images/design/Clother_Site1.png"/></div>'+
                                    '<div class="slide"><img src="public/images/design/Kriua_ver2.png"/></div>'+
                                    '<div class="slide"><img src="public/images/design/Rihanna_main.png"/></div>'+
                                    '<div class="slide"><img src="public/images/design/Shop_Monitor.png"/></div>'+
                                    '<div class="slide"><img src="public/images/design/design2_full.png"/></div>'+
                                    '<div class="slide"><img src="public/images/design/design1_full.png"/></div>'+
                                    '<div class="slide"><img src="public/images/design/design2_full.png"/></div>'+
                                    '<div class="slide"><img src="public/images/design/design1_full.png"/></div>'+
                                '</div>'+
                            '</div>'+
                        '<div id="closed"><a href="#"><div id="close"></div></a></div>' +
                    ' </div>' +
                '</div>' +
            '</div>');

        $(" #close").click(function(){
            $('#modal').remove();
        });
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
            generatePagination: false,
            hoverPause: true,
           /* play: 3000,
            pause: 1500,
            ,*/
            slideSpeed: 1650,
            // Get the starting slide
            start: startSlide,
            animationComplete: function (current) {
                // Set the slide number as a hash
                //window.location.hash = '#' + current;
            }
        });
        $('#slides #left,#slides #right').hover(function(){
            $(this).css({'background':'#000000'})
        },function(){
            $(this).css({'background':'#666666'})
        });


        $('#close').hover(function(){
            $(this).css({
                'background':'url("../../public/images/close_hover.png") no-repeat',
                'width':'60px',
                'height':'60px',
                'top':'0',
                'left':'0'
            },2000)
        },function(){
            $(this).css({
                'background':'url("../../public/images/close.png") no-repeat',
                'width':'50px',
                'height':'50px',
                'top':'10px',
                'left':'10px'
            },2000)
        });

        /*$(function() {
            var offset = $("#slides a").offset();
            var topPadding = 400;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#slides a").stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding},2200);
                }
                else {$("#slides a").stop().animate({marginTop: 10},2200);}});
        });*/

    });
});






