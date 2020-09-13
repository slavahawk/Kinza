let tabAlco = document.querySelector('.alcohol__content__item'),
	tabAlcoButton = document.querySelectorAll('.tab__alco__btn'),
	tabContentAlcoItem = document.querySelectorAll('.alcohol__content__item-main');



if (tabAlco) {
	searchFirstElmentAlco();
	tabAlco.addEventListener('click', (e) => showAlco(e));
	setIndexAlco();
}

const showAlco = (e) => {
	let t = e.target;
	if (!t.classList.contains('tab__alco__btn')) return;
	deleteActiveAlco();

	let index = t.getAttribute("data-index");
	let content = document.querySelector(
		'.alcohol__content__item-main[data-index="' + index + '"]'
	);

	setActiveAlco(t, content);
};


function searchFirstElmentAlco() {
	let tabAlcoButton = document.querySelector('.tab__alco__btn');
	let tabContentAlcoItem = document.querySelector('.alcohol__content__item-main');
	tabAlcoButton.classList.add('active');
	tabContentAlcoItem.classList.add('active');
};

function deleteActiveAlco() {
	for (let i = 0; i < tabAlcoButton.length; i++) {
		tabAlcoButton[i].classList.remove('active');
		tabContentAlcoItem[i].classList.remove('active');
	}
}

function setActiveAlco(t, content) {
	for (let i = 0; i < tabAlcoButton.length; i++) {
		t.classList.add("active");
		content.classList.add("active");
	}
}

function setIndexAlco() {
	for (let i = 0; i < tabAlcoButton.length; i++) {
		tabAlcoButton[i].setAttribute("data-index", i);
		tabContentAlcoItem[i].setAttribute("data-index", i);
	}
}