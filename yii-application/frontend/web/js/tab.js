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


// Таб на странице /proeng/ourworks/LuckyHouse/ - Слава
let Tab = document.querySelector('.proTab');
let tabTitleBox = document.querySelector('.proTab__items');
let tabContent = document.querySelectorAll('.proTab__body__block');

if (Tab) {
	for (let i = 0; i < tabContent.length; i++) {
		let allAtr = tabContent[i].dataset.title;
		let newDiv = document.createElement('div');
		newDiv.className = 'proTab__items__item';
		newDiv.innerHTML = allAtr;
		tabTitleBox.append(newDiv);
	}

	let tabTitle = document.querySelectorAll('.proTab__items__item');
	searchFirstTitle();

	Tab.addEventListener('click', (e) => show(e));

	// Функции

	function show(e) {
		let t = e.target;
		if (!t.classList.contains('proTab__items__item')) return;
		deleteActive(t);

		let index = t.getAttribute('data-index');
		let content = document.querySelector('.proTab__body__block[data-index="' + index + '"]');
		setActive(t, content);
	}

	setIndex();

	function deleteActive() {
		for (let i = 0; i < tabTitle.length; i++) {
			tabTitle[i].classList.remove('active');
			tabContent[i].classList.remove('active');
		}
	}

	function setActive(t, content) {
		for (let i = 0; i < tabTitle.length; i++) {
			t.classList.add('active');
			content.classList.add('active');
		}
	}

	function searchFirstTitle() {
		let tabTitle = document.querySelector('.proTab__items__item');
		let tabContent = document.querySelector('.proTab__body__block');
		tabTitle.classList.add('active');
		tabContent.classList.add('active');
	}

	function setIndex() {
		for (let i = 0; i < tabTitle.length; i++) {
			tabTitle[i].setAttribute('data-index', i);
			tabContent[i].setAttribute('data-index', i);
		}
	}
}
