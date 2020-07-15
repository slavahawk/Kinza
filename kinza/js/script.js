// ФУНКЦИЯ ОПРЕДЕЛЕНИЯ ПОДДЕРЖКИ WEBP
function testWebP(callback) {
  var webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };
  webP.src =
    'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  }
});


;
$(document).ready(function () {
	$('.header__burger').click(function (event) {
		$('.header__burger, .header__content-menu').toggleClass('active');
		$('body').toggleClass('lock');
	});
});
;
$(function () {
	'use strict';
	$('#buttonFilterMini, .title__box-mini').click(function () {
		$('.filter__box-mini').toggleClass('open');
		$('body').toggleClass('lock');
	});
});
;
$('body').on('mousemove', (e) => {
	const x = e.pageX / $(window).width();
	const y = e.pageY / $(window).height();

	$('.list1, .list2, .list3, .list4, .list5, .list6, .list7, .list8 ').css(
		'transform',
		'translate(' + x * 30 + 'px, ' + y * 30 + 'px)'
	);
});
;
var pos = { lat: 56.012458, lng: 92.873602 };
var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		center: pos,
		zoom: 16,
		icon: iconBase + 'parking_lot_maps.png',

		styles: [
			{
				elementType: 'geometry',
				stylers: [
					{
						color: '#212121',
					},
				],
			},
			{
				elementType: 'labels.icon',
				stylers: [
					{
						visibility: 'off',
					},
				],
			},
			{
				elementType: 'labels.text.fill',
				stylers: [
					{
						color: '#757575',
					},
				],
			},
			{
				elementType: 'labels.text.stroke',
				stylers: [
					{
						color: '#212121',
					},
				],
			},
			{
				featureType: 'administrative',
				elementType: 'geometry',
				stylers: [
					{
						color: '#757575',
					},
				],
			},
			{
				featureType: 'administrative.country',
				elementType: 'labels.text.fill',
				stylers: [
					{
						color: '#9e9e9e',
					},
				],
			},
			{
				featureType: 'administrative.land_parcel',
				stylers: [
					{
						visibility: 'off',
					},
				],
			},
			{
				featureType: 'administrative.locality',
				elementType: 'labels.text.fill',
				stylers: [
					{
						color: '#bdbdbd',
					},
				],
			},
			{
				featureType: 'poi',
				elementType: 'labels.text.fill',
				stylers: [
					{
						color: '#757575',
					},
				],
			},
			{
				featureType: 'poi.park',
				elementType: 'geometry',
				stylers: [
					{
						color: '#181818',
					},
				],
			},
			{
				featureType: 'poi.park',
				elementType: 'labels.text.fill',
				stylers: [
					{
						color: '#616161',
					},
				],
			},
			{
				featureType: 'poi.park',
				elementType: 'labels.text.stroke',
				stylers: [
					{
						color: '#1b1b1b',
					},
				],
			},
			{
				featureType: 'road',
				elementType: 'geometry.fill',
				stylers: [
					{
						color: '#2c2c2c',
					},
				],
			},
			{
				featureType: 'road',
				elementType: 'labels.text.fill',
				stylers: [
					{
						color: '#8a8a8a',
					},
				],
			},
			{
				featureType: 'road.arterial',
				elementType: 'geometry',
				stylers: [
					{
						color: '#373737',
					},
				],
			},
			{
				featureType: 'road.highway',
				elementType: 'geometry',
				stylers: [
					{
						color: '#3c3c3c',
					},
				],
			},
			{
				featureType: 'road.highway.controlled_access',
				elementType: 'geometry',
				stylers: [
					{
						color: '#4e4e4e',
					},
				],
			},
			{
				featureType: 'road.local',
				elementType: 'labels.text.fill',
				stylers: [
					{
						color: '#616161',
					},
				],
			},
			{
				featureType: 'transit',
				elementType: 'labels.text.fill',
				stylers: [
					{
						color: '#757575',
					},
				],
			},
			{
				featureType: 'water',
				elementType: 'geometry',
				stylers: [
					{
						color: '#000000',
					},
				],
			},
			{
				featureType: 'water',
				elementType: 'labels.text.fill',
				stylers: [
					{
						color: '#3d3d3d',
					},
				],
			},
		],
	});

	var info = new google.maps.InfoWindow({
		content: '<h7>Ресторан Кинза</h7>',
	});
	var marker = new google.maps.Marker({
		position: { lat: 56.012158, lng: 92.873602 },
		map: map,
		title: 'Ресторан Кинза',
		icon: {
			url: '/img/logo.png',
			scaledSize: new google.maps.Size(64, 55),
		},
	});

	marker.addListener('click', () => {
		info.open(map, marker);
	});
}
;
$(document).ready(function () {
	$('.add-to-cart').on('click', function () {
		var cart = $('.basket');
		var imgtodrag = $(this).parent('.catalog__content-item').find('img').eq(0);

		if (imgtodrag) {
			var imgclone = imgtodrag
				.clone()
				.offset({
					top: imgtodrag.offset().top,
					left: imgtodrag.offset().left,
				})
				.css({
					opacity: '0.5',
					position: 'absolute',
					'z-index': '1000',
					width: '0',
				})
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
;
// Кнопка купить при нажатии

var buttons = document.getElementsByClassName('pay__link'),
	forEach = Array.prototype.forEach;

forEach.call(buttons, function (b) {
	b.addEventListener('click', addElement);
});

function addElement(e) {
	var addDiv = document.createElement('div'),
		mValue = Math.max(this.clientWidth, this.clientHeight),
		rect = this.getBoundingClientRect();
	(sDiv = addDiv.style), (px = 'px');

	sDiv.width = sDiv.height = mValue + px;
	sDiv.left = e.clientX - rect.left - mValue / 2 + px;
	sDiv.top = e.clientY - rect.top - mValue / 2 + px;

	addDiv.classList.add('pulse');
	this.appendChild(addDiv);
}
;
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
;
