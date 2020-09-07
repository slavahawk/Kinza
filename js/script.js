"use strict";

// ФУНКЦИЯ ОПРЕДЕЛЕНИЯ ПОДДЕРЖКИ WEBP
function testWebP(callback) {
  var webP = new Image();

  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };

  webP.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  }
});
;
var headerMenu = document.querySelector('header'),
    scrollPrev = 0;
var page = document.URL;

if (page == 'http://kinza/' || page == 'https://kinza-kras.ru/' || page == 'http://kinza-frontend.test/') {
  scrollStyleHeader();
} else {
  headerMenu.classList.add('fast');
  headerMenu.classList.add('out');
}

function scrollStyleHeader() {
  window.onscroll = function () {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = winScroll / height * 100;

    if (scrolled > 1 && scrolled > scrollPrev) {
      headerMenu.classList.add('out');
    } else if (scrolled == 0) {
      headerMenu.classList.remove('out');
    } else {
      headerMenu.classList.add('out');
    }
  };
}

;
var animItems = document.querySelectorAll('._anim-items');

if (animItems.length > 0) {
  var animOnscroll = function animOnscroll() {
    for (var index = 0; index < animItems.length; index++) {
      var animItem = animItems[index];
      var animItemHeight = animItem.offsetHeight;
      var animItemOffset = offset(animItem).top;
      var animStart = 4;
      var animItemPoint = window.innerHeight - animItemHeight / animStart;

      if (animItemHeight > window.innerHeight) {
        animItemPoint = window.innerHeight - window.innerHeight / animStart;
      }

      if (pageYOffset > animItemOffset - animItemPoint && pageYOffset < animItemOffset + animItemHeight) {
        animItem.classList.add('_active');
      } else {
        if (!animItem.classList.contains('_anim-no-hide')) {
          animItem.classList.remove('_active');
        }
      }
    }
  };

  var offset = function offset(el) {
    var rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return {
      top: rect.top + scrollTop,
      left: rect.left + scrollLeft
    };
  };

  window.addEventListener('scroll', animOnscroll);
  setTimeout(function () {
    animOnscroll();
  }, 500);
}

;
$(document).ready(function () {
  $('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
      url: '/cart/add',
      data: {
        id: id
      },
      type: 'GET',
      success: function success(res) {
        $('#cart-count').html(res);
      }
    });
  });
});
;
$(document).ready(function () {
  $('.header__burger').click(function (event) {
    $('.header__burger, .header__content-menu').toggleClass('active');
    $('body').toggleClass('lock');
  });
});
;
var arrowFilter = document.querySelector('.arrow-filter'),
    btnFilter = document.querySelector('#buttonFilterMini'),
    filterSelect = document.querySelector('.filter__select');

if (btnFilter) {
  btnFilter.onclick = function () {
    arrowFilter.classList.toggle('active');
    filterSelect.classList.toggle('open');
  };
}

;
var pos = {
  lat: 56.012458,
  lng: 92.873602
};
var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: pos,
    zoom: 16,
    icon: iconBase + 'parking_lot_maps.png',
    styles: [{
      elementType: 'geometry',
      stylers: [{
        color: '#212121'
      }]
    }, {
      elementType: 'labels.icon',
      stylers: [{
        visibility: 'off'
      }]
    }, {
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#757575'
      }]
    }, {
      elementType: 'labels.text.stroke',
      stylers: [{
        color: '#212121'
      }]
    }, {
      featureType: 'administrative',
      elementType: 'geometry',
      stylers: [{
        color: '#757575'
      }]
    }, {
      featureType: 'administrative.country',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#9e9e9e'
      }]
    }, {
      featureType: 'administrative.land_parcel',
      stylers: [{
        visibility: 'off'
      }]
    }, {
      featureType: 'administrative.locality',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#bdbdbd'
      }]
    }, {
      featureType: 'poi',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#757575'
      }]
    }, {
      featureType: 'poi.park',
      elementType: 'geometry',
      stylers: [{
        color: '#181818'
      }]
    }, {
      featureType: 'poi.park',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#616161'
      }]
    }, {
      featureType: 'poi.park',
      elementType: 'labels.text.stroke',
      stylers: [{
        color: '#1b1b1b'
      }]
    }, {
      featureType: 'road',
      elementType: 'geometry.fill',
      stylers: [{
        color: '#3b3b3b'
      }]
    }, {
      featureType: 'road',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#8a8a8a'
      }]
    }, {
      featureType: 'road.arterial',
      elementType: 'geometry',
      stylers: [{
        color: '#414141'
      }]
    }, {
      featureType: 'road.highway',
      elementType: 'geometry',
      stylers: [{
        color: '#3c3c3c'
      }]
    }, {
      featureType: 'road.highway.controlled_access',
      elementType: 'geometry',
      stylers: [{
        color: '#4e4e4e'
      }]
    }, {
      featureType: 'road.local',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#616161'
      }]
    }, {
      featureType: 'transit',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#757575'
      }]
    }, {
      featureType: 'water',
      elementType: 'geometry',
      stylers: [{
        color: '#000000'
      }]
    }, {
      featureType: 'water',
      elementType: 'labels.text.fill',
      stylers: [{
        color: '#3d3d3d'
      }]
    }]
  });
  var info = new google.maps.InfoWindow({
    content: '<h7>Ресторан Кинза</h7>'
  });
  var marker = new google.maps.Marker({
    position: {
      lat: 56.012158,
      lng: 92.873602
    },
    map: map,
    title: 'Ресторан Кинза',
    icon: {
      url: '/img/logo.png',
      scaledSize: new google.maps.Size(64, 55)
    }
  });
  marker.addListener('click', function () {
    info.open(map, marker);
  });
}

;
$(document).ready(function () {
  $('.add-to-cart').on('click', function () {
    var cart = $('.basket');
    var imgtodrag = $(this).parent('.catalog__content-item, .menu__content__item__grid').find('img').eq(0);

    if (imgtodrag) {
      var imgclone = imgtodrag.clone().offset({
        top: imgtodrag.offset().top,
        left: imgtodrag.offset().left
      }).css({
        opacity: '0.5',
        position: 'absolute',
        'z-index': '1000',
        width: '0'
      }).appendTo($('html, body')).animate({
        top: cart.offset().top + 10,
        left: cart.offset().left + 10,
        width: 75,
        height: 75
      }, 500, 'easeInOutExpo');
      setTimeout(function () {
        cart.effect('bounce', {
          times: 2
        }, 200);
      }, 1000);
      imgclone.animate({
        width: 0,
        height: 0
      }, function () {
        $(this).detach();
      });
    }
  });
});
;
var tab = document.querySelector('.tabOrder'),
    tabButton = document.querySelectorAll('.tab__title-btn'),
    tabContentItem = document.querySelectorAll('.tab__item');

if (tab) {
  searchFirstElment();
  tab.addEventListener('click', function (e) {
    return show(e);
  });
  setIndex();
}

var show = function show(e) {
  var t = e.target;
  if (!t.classList.contains('tab__title-btn')) return;
  deleteActive();
  var index = t.getAttribute("data-index");
  var content = document.querySelector('.tab__item[data-index="' + index + '"]');
  setActive(t, content);
};

function searchFirstElment() {
  var tabButton = document.querySelector('.tab__title-btn');
  var tabContentItem = document.querySelector('.tab__item');
  tabButton.classList.add('active');
  tabContentItem.classList.add('active');
}

;

function deleteActive() {
  for (var i = 0; i < tabButton.length; i++) {
    tabButton[i].classList.remove('active');
    tabContentItem[i].classList.remove('active');
  }
}

function setActive(t, content) {
  for (var i = 0; i < tabButton.length; i++) {
    t.classList.add("active");
    content.classList.add("active");
  }
}

function setIndex() {
  for (var i = 0; i < tabButton.length; i++) {
    tabButton[i].setAttribute("data-index", i);
    tabContentItem[i].setAttribute("data-index", i);
  }
}

;