let tab = document.querySelector('.tabOrder'),
	tabButton = document.querySelectorAll('.tab__title-btn'),
	tabContentItem = document.querySelectorAll('.tab__item');



if (tab) {
	searchFirstElment();
	tab.addEventListener('click', (e) => show(e));
	setIndex();
}

const show = (e) => {
	let t = e.target;
	if (!t.classList.contains('tab__title-btn')) return;
	deleteActive();

	let index = t.getAttribute("data-index");
	let content = document.querySelector(
		'.tab__item[data-index="' + index + '"]'
	);

	setActive(t, content);
};


function searchFirstElment() {
	let tabButton = document.querySelector('.tab__title-btn');
	let tabContentItem = document.querySelector('.tab__item');
	tabButton.classList.add('active');
	tabContentItem.classList.add('active');
};

function deleteActive() {
	for (let i = 0; i < tabButton.length; i++) {
		tabButton[i].classList.remove('active');
		tabContentItem[i].classList.remove('active');
	}
}

function setActive(t, content) {
	for (let i = 0; i < tabButton.length; i++) {
		t.classList.add("active");
		content.classList.add("active");
	}
}

function setIndex() {
	for (let i = 0; i < tabButton.length; i++) {
		tabButton[i].setAttribute("data-index", i);
		tabContentItem[i].setAttribute("data-index", i);
	}
}