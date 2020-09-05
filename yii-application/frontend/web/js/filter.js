$(function () {
	'use strict';
	$('#buttonFilterMini, .title__box-mini').click(function () {
		$('.filter__box-mini').toggleClass('open');
		$('body').toggleClass('lock');
	});
});
