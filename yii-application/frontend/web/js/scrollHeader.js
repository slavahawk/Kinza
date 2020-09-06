const headerMenu = document.querySelector('header'),
	scrollPrev = 0;

const page = document.URL;

if (
	page == 'http://kinza/' ||
	page == 'https://kinza-kras.ru/' ||
	page == 'http://kinza-frontend.test/'
) {
	scrollStyleHeader();
} else {
	headerMenu.classList.add('fast');
	headerMenu.classList.add('out');
}

function scrollStyleHeader() {
	window.onscroll = () => {
		let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		let scrolled = (winScroll / height) * 100;

		if (scrolled > 1 && scrolled > scrollPrev) {
			headerMenu.classList.add('out');
		} else if (scrolled == 0) {
			headerMenu.classList.remove('out');
		} else {
			headerMenu.classList.add('out');
		}
	};
}
