$(function () {
	/*$('.air_design .circle div img').hover(function(){
        $(this).animate({'width':'110px','left':'5px','top':'-15px'},300).parent().animate({'height':'104px','width':'104px','left':'-5px','top':'-5px'},300)
    },function(){
        $(this).animate({'width':'110px','left':'0','top':'-20px'},300).parent().animate({'left':'0','top':'0','height':'94px','width':'94px'},300);
    });*/


		/*roundedImg = function() {	
	
	$('.air_design .circle div img').each(function(){
		var list = $(this).attr('src');
		$(this).css({'display':'none'});
		$(this).parent().css({'background':'url("'+list+'") no-repeat center'
		,'height':'94px','width':'94px'
		});
	});
	}	
window.onload=roundedImg;	
	
$('.air_design .circle div').hover(function(){
        $(this).animate({'width':'104px',
		'height':'104px','top':'-5px','left':'-5px'},300);
    }/*,function(){
        $(this).animate({'height':'84px','width':'84px','top':'5px', 'left':'5px'},500);
		setTimeout(
		$(this).animate({'left':'0','top':'0','height':'94px','width':'94px'},300),300	
		);
    }
	
	
	);*/

	
	
	
	
	/*$('.air_design .circle div img').hover(function(){
        $(this).animate({'width':'110px','height':'110px','left':'0','top':'0'},300)
    },function(){
        $(this).animate({'width':'90px','height':'90px','left':'10px','top':'10px'},500)
		setTimeout(
		$(this).animate({'width':'100px','height':'100px','left':'5px','top':'5px'},300),500	
		);
    }
	
	
	);
	
	
	
	$('.air_design .circle div img').hover(function(){
        $(this).animate({'width':'110px','left':'-1px','top':'-5px'},300)
	.parent().animate({'height':'104px','width':'104px','border':'11px solid #000000','left':'-5px','top':'-5px'},300)
    },function(){
        $(this).animate({'width':'110px','left':'-13px','top':'-15px'},500)
		.parent().animate({'left':'5px','top':'5px','height':'84px','width':'84px','background':'#000000'},500);
		setTimeout(
		$(this).parent().animate({'left':'0','top':'0','height':'94px','width':'94px','background':'#000000'},300)
		.children().animate({'width':'110px','left':'-8px','top':'-10px'},300),300	
		);
    }
	
	
	);*/

$('.air_site .circle div').hover(function(){
        $(this).animate({'width':'104px','height':'104px','left':'0','top':'0'},300)
		$(this).children().animate({'left':'-2px','top':'-2px'},300)
    },function(){
        $(this).animate({'width':'84px','height':'84px','left':'10px','top':'10px'},500)
		$(this).children().animate({'left':'-12px','top':'-12px'},500)
		setTimeout(
		$(this).animate({'left':'5px','top':'5px','height':'94px','width':'94px'},300)	
		.children().animate({'left':'-7px','top':'-7px'},300),500
		);
    });

	$('.air_site .circle div').click(function(e){
       /* e.preventDefault();*/

		 var result = $(this).children().attr("id");
		$.get('design/view',{ id: result},function(gotHtml){
        $('#wrap').prepend(gotHtml);
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
            //preloadImage: '../../public/images/loading.gif',
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
                'background':'url("../../public/images/close.png") no-repeat center black',
                'width':'45px',
                'height':'45px',
                'top':'7px',
                'left':'7px'
            },2000)
        },function(){
            $(this).css({
                'background':'url("../../public/images/close.png") no-repeat center #666666',
                'width':'40px',
                'height':'40px',
                'top':'10px',
                'left':'10px'
            },2000)
        });

       /* $(function() {
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
	$(document).on('click','#modal_content #slides #left,#modal_content #slides #right', function(){
		setTimeout(
		$("#modal").animate({ scrollTop: 0 }, 1),2500
		);
	});
	 
	$(document).on('click','#modal_content #slides .slides_container .slide img', function(){
		$('#modal_content #slides #right').click();
		alert(1);
	return(false);
	});
	
	


	
});	



