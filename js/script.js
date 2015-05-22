$(document).ready(function(){
// scroll
	var count = $('#js-menu a').length;
	var getvalue, temp;
	var position = [], time = [];
	var animScroll = $('body, html');

	for (var i = 0; i < count; i++) {
		getvalue = $('#js-menu a').eq(i).attr('href');
		position[i] = $(getvalue).offset().top;
		time[i] = position[i] / 3;
	};

	$('#js-menu a').on('click', function(e) {
		e.preventDefault();
		temp = $(this).closest('li').index();
		animScroll.animate({'scrollTop' : position[temp]}, time[temp]);
	});

	$('.logo').on('click', function(e) {
		e.preventDefault();
		$('body, html').animate({'scrollTop' : 0}, 1000);
	});
// form
	$(".js-btn-form").on('click', function(e) {
		e.preventDefault();
		$("#js-order, .form-popup").show('500');
	});
	$(".js-btn-ring").on('click', function(e) {
		e.preventDefault();
		$("#js-ring, .form-popup").show('500');
	});
	$(".form-popup, #js-close").on('click', function() {
		$(".form-order, .form-popup").hide('500');
	});


	$('form').on('submit', function(e) {
    	alert('Спасибо! Мы с Вами свяжемся!');
	});



	$(".js-fancybox").fancybox();
	


});