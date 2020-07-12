$('.tabs__block').not(':first').hide();
$('.order__content__tabs .order__content__tabs__items-item')
	.click(function () {
		$('.order__content__tabs .order__content__tabs__items-item')
			.removeClass('active')
			.eq($(this).index())
			.addClass('active');
		$('.tabs__block').hide().eq($(this).index()).fadeIn();
	})
	.eq(0)
	.addClass('active');
