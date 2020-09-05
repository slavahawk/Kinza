$('body').on('mousemove', (e) => {
	const x = e.pageX / $(window).width();
	const y = e.pageY / $(window).height();

	$('.list1, .list2, .list3, .list4, .list5, .list6, .list7, .list8 ').css(
		'transform',
		'translate(' + x * 30 + 'px, ' + y * 30 + 'px)'
	);
});
