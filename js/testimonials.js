$(document).ready(function(){
	$('.section-testimonials__slider').slick();
});


/*===============section-my-bread slider=================*/

$(document).ready(function() { // Ждём загрузки страницы
	$(".flexblock-3columns__background-block").click(function(){	// Событие клика на нужный блок
	  	var img = $(this).siblings(".flexblock-3columns__image");	// Получаем изображение, на которое кликнули
			var src = img.attr('src'); // Достаем из этого изображения путь до картинки
			$("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
						 					 "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
											 "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
											 "</div>");
			$(".popup").fadeIn(1000); // Медленно выводим изображение
			$(".popup_bg").click(function(){	// Событие клика на затемненный фон	   
				$(".popup").fadeOut(500);	// Медленно убираем всплывающее окн	
      	setTimeout(function() {	// Выставляем таймер
			  	$(".popup").remove(); // Удаляем разметку всплывающего окна
				}, 200);
		});
	});	
});



$(function(){
	$("a[href^='#']").click(function(){
  	var _href = $(this).attr("href");
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"}, 1000);
    return false;
  });
});

