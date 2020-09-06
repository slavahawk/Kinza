const arrowFilter = document.querySelector('.arrow-filter'),
	btnFilter = document.querySelector('#buttonFilterMini'),
	filterSelect = document.querySelector('.filter__select');

if (btnFilter) {
	btnFilter.onclick = () => {
		arrowFilter.classList.toggle('active');
		filterSelect.classList.toggle('open');
	};
}
