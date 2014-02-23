$(function(){
    /*меню*/
    $('.nav li a').each(function () {
        var location = window.location.href;
        var link = this.href;
		var main = 'http://airbrothers.com.ua/'
		var design = 'http://airbrothers.com.ua/design#'
		if(location == main || location == design){
		 $('.nav li:first-child').addClass('selected').prepend("<div id='line'></div>")
		}
        if(location == link) {
            $(this).parent().addClass('selected').prepend("<div id='line'></div>")
        }
    });
	$('.inform #in_ask').each(function(){
		var location = window.location.href;
		var question = 'http://airbrothers.com.ua/question'
		if(location == question){
			$(this).css({'backgroundPosition':'0 -60px'});
		}		
	});
		$('.inform #in_order').each(function(){
		var location = window.location.href;
		var order = 'http://airbrothers.com.ua/order'
		if(location == order){
			$(this).css({'backgroundPosition':'0 -60px'});
		}		
	});

		
		// Создаем основу для выпадающего меню
	$("<select />").appendTo("nav");

	// Создаем пункт select по умолчанию – «Перейти к...»
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "Перейти к..."
	}).appendTo("nav select");

	// Копируем ссылки из обычного меню в элементы выпадающего меню
	$("nav a").each(function() {
	 var el = $(this);
	 $("<option />", {
		 "value"   : el.attr("href"),
		 "text"    : el.text()
	 }).appendTo("nav select");
	});

	$("nav select").change(function() {
	  window.location = $(this).find("option:selected").val();
	});
	

	});
