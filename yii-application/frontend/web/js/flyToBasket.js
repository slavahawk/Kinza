$(document).ready(function () {
	$('.btn__pay').on('click', function () {
		var cart = $('.basket');
		var imgtodrag = $(this)
			.parent('.catalog__content-item, .menu__content__item__grid')
			.find('img')
			.eq(0);
		if (imgtodrag) {
			var imgclone = imgtodrag
				.clone()
				.offset({
					top: imgtodrag.offset().top,
					left: imgtodrag.offset().left,
				})

				.addClass("start")
				.appendTo($('html, body'))
				.animate(
					{
						top: cart.offset().top + 10,
						left: cart.offset().left + 10,
						width: 75,
						height: 75,
					},
					500,
					'easeInOutExpo'
				);

			setTimeout(function () {
				cart.effect(
					'bounce',

					{
						times: 2,
					},
					200
				);
			}, 1000);

			imgclone.animate(
				{
					width: 0,
					height: 0,
				},
				function () {
					$(this).detach();
				}
			);
		}
	});
});
