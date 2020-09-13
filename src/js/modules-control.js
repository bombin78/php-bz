(function ($) {
//ЧТЕНИЕ ПАРАМЕТРОВ ЗАПРОСА
//------------------------------------------------------------
$.extend({
    getUrlVars: function () {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    },
    getUrlVar: function (name) {
        return $.getUrlVars()[name];
    }
});
//------------------------------------------------------------

$(document).ready(function(){

    // Запускаем валидацию формы обратного звонка
    var callbackModalFormValidator = $("#callbackModalForm").validate({
        rules: {
            phone: {
                required: true,
            },
        },
        messages: {
            phone: {
                required: 'необходимо ввести номер телефона',
            },
        },
    });

    // Приводим форму обратного звонка в исходное состояние и открываем модальное окно
    $('#openCallbackModal').click(function () {
        $('#ajax-result').empty();
        $("#callbackModalForm, #callbackModalFooter").removeClass('_hide');
        $('#callbackModal').modal('show');
    })

    // Отправка данных формы обратного звонка
    $('#callbackModalForm').submit(function (e) {
		//отменяем стандартное действие при отправке формы
		e.preventDefault();
        //берем из формы метод передачи данных
        var formMethod = $(this).attr('method');
        //получаем адрес скрипта на сервере, куда нужно отправить форму
        var formAction = $(this).attr('action');
        //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
        //то есть в стандартном формате передачи данных формы + добавляем параметры из адресной строки
        var formData = $(this).serialize();

        if(callbackModalFormValidator.errorList.length === 0) {

            $.ajax({
    			type: formMethod,
    			url: formAction,
                dataType: 'text',
    			data: formData,
    			success: function (resp) {

    				if ($('#callbackModal').hasClass('show')) {
                        $("#callbackModalForm, #callbackModalFooter").addClass('_hide');
                        $('#ajax-result').append(resp);
    				}
    			}
    		});
        }
	});

});
//------------------------------------------------------------

// ИНИЦИАЛИЗАЦИЯ BLUEIMP GALLERY
//------------------------------------------------------------
$('.blueimp-links').on('click', function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
});
//------------------------------------------------------------

// ИНИЦИАЛИЗАЦИЯ СЛАЙДЕРА
//------------------------------------------------------------
var swiper = new Swiper('.swiper-container',{
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
//------------------------------------------------------------

// $('.article-title, .article-arrow').on('click',function(e){
// 	e.preventDefault();
//
// 	var wrapper=$(this).closest('.article'),
// 		wrapperModifier = '_open',
// 		wrapperAttr = 'style',
// 		description = wrapper.find('.article-text'),
// 		duration = 200;
// 	if(wrapper.hasClass(wrapperModifier)) {
// 		description.slideUp(duration,function(){
// 			wrapper.removeClass(wrapperModifier);
// 			description.removeAttr(wrapperAttr);
// 		});
// 	} else {
// 		description.slideDown(duration,function(){
// 			wrapper.addClass(wrapperModifier);
// 			description.removeAttr(wrapperAttr);
// 		});
// 	}
// });
})(jQuery);
