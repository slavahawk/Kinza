const arrowFilter = document.querySelector('.arrow-filter'),
	btnFilter = document.querySelector('#buttonFilterMini'),
	filterMin = document.querySelector('.filter__box-mini'),
	btnTitleFilter = document.querySelector('.title__box-mini');

btnFilter.onclick = () => {
	// arrowFilter.classList.add('active');
	filterMin.classList.add('open');
	document.body.classList.add('lock');
};

btnTitleFilter.onclick = () => {
	filterMin.classList.remove('open');
	// arrowFilter.classList.remove('active');
	document.body.classList.remove('lock');
};
