"use strict";

function _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

window.onload = function () {
  document.body.classList.add('loaded_hiding');
  window.setTimeout(function () {
    document.body.classList.add('loaded');
    document.body.classList.remove('loaded_hiding');
  }, 500);
  animate();
};

lozad('.lozad', {
  load: function load(el) {
    el.src = el.dataset.src;

    el.onload = function () {
      if (window.location.pathname !== "/") {
        el.classList.add('fade');
      }
    };
  }
}).observe(); // ФУНКЦИЯ ОПРЕДЕЛЕНИЯ ПОДДЕРЖКИ WEBP

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
var headerMenu = document.querySelector("header"),
    mainSection = document.querySelector(".mainSection"),
    scrollPrev = 0;

if (mainSection) {
  scrollStyleHeader();
} else {
  headerMenu.classList.add("fast");
  headerMenu.classList.add("out");
}

function scrollStyleHeader() {
  window.onscroll = function () {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = winScroll / height * 100;

    if (scrolled > 1 && scrolled > scrollPrev) {
      headerMenu.classList.add("out");
    } else if (scrolled == 0) {
      headerMenu.classList.remove("out");
    } else {
      headerMenu.classList.add("out");
    }
  };
}

;
var footerMain = document.querySelector("footer"),
    about = document.querySelector(".aboutUs"),
    contact = document.querySelector(".contact"),
    footerLinks = footerMain.querySelectorAll("a"),
    socialBorder = document.querySelector(".footer__content-right-social");

var _iterator = _createForOfIteratorHelper(footerLinks),
    _step;

try {
  for (_iterator.s(); !(_step = _iterator.n()).done;) {
    var link = _step.value;

    if (!about) {
      footerMain.style.background = "#121212";
      footerMain.style.color = "#fff";
      link.style.color = "white";
      socialBorder.style.borderColor = "#fff";
    }

    if (contact) {
      footerMain.style.display = "none";
    }
  }
} catch (err) {
  _iterator.e(err);
} finally {
  _iterator.f();
}

;

var animate = function animate() {
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
    }, 100);
  }
};

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
  $('.btn__pay').on('click', function () {
    var cart = $('.basket');
    var imgtodrag = $(this).parent('.catalog__content-item, .menu__content__item__grid').find('img').eq(0);

    if (imgtodrag) {
      var imgclone = imgtodrag.clone().offset({
        top: imgtodrag.offset().top,
        left: imgtodrag.offset().left
      }).addClass("start").appendTo($('html, body')).animate({
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

var maskPhone = function maskPhone() {
  var inputsPhone = document.querySelectorAll("input[name=\"Order[phone]\"]");
  inputsPhone.forEach(function (input) {
    var keyCode;

    var mask = function mask(event) {
      event.keyCode && (keyCode = event.keyCode);
      var pos = input.selectionStart;

      if (pos < 3) {
        event.preventDefault();
      }

      var matrix = "+7 (___) ___ ____",
          i = 0,
          def = matrix.replace(/\D/g, ""),
          val = input.value.replace(/\D/g, ""),
          newValue = matrix.replace(/[_\d]/g, function (a) {
        if (i < val.length) {
          return val.charAt(i++) || def.charAt(i);
        } else {
          return a;
        }
      });
      i = newValue.indexOf("_");

      if (i != -1) {
        i < 5 && (i = 3);
        newValue = newValue.slice(0, i);
      }

      var reg = matrix.substr(0, input.value.length).replace(/_+/g, function (a) {
        return "\\d{1," + a.length + "}";
      }).replace(/[+()]/g, "\\$&");
      reg = new RegExp("^" + reg + "$");

      if (!reg.test(input.value) || input.value.length < 5 || keyCode > 47 && keyCode < 58) {
        input.value = newValue;
      }

      if (event.type == "blur" && input.value.length < 5) {
        input.value = "";
      }
    };

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false);
  });
};

maskPhone();

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
var mainBtnAlco = document.querySelectorAll(".main__btn__alco"),
    alco = document.querySelector(".alcohol"),
    mainItemAlco = document.querySelectorAll(".alcohol__content__item");

if (alco) {
  // searcMainhFirstElmentAlco();
  alco.addEventListener("click", function (e) {
    return showMainAlco(e);
  });
  setMainIndexAlco();
}

var showMainAlco = function showMainAlco(e) {
  var t = e.target;
  if (!t.classList.contains("main__btn__alco")) return;
  deleteMainActiveAlco();
  var index = t.getAttribute("data-index");
  var content = document.querySelector('.alcohol__content__item[data-index="' + index + '"]');
  setMainActiveAlco(t, content);
}; // function searcMainhFirstElmentAlco() {
//     let mainBtnAlcoFirst = document.querySelector(".main__btn__alco");
//     let mainItemAlcoFirst = document.querySelector(".alcohol__content__item");
//     mainBtnAlcoFirst.classList.add("active");
//     mainItemAlcoFirst.classList.add("active");
// }


function deleteMainActiveAlco() {
  for (var i = 0; i < mainBtnAlco.length; i++) {
    mainBtnAlco[i].classList.remove("active");
    mainItemAlco[i].classList.remove("active");
  }
}

function setMainActiveAlco(t, content) {
  for (var i = 0; i < mainBtnAlco.length; i++) {
    t.classList.add("active");
    content.classList.add("active");
  }
}

function setMainIndexAlco() {
  for (var i = 0; i < mainBtnAlco.length; i++) {
    mainBtnAlco[i].setAttribute("data-index", i);
    mainItemAlco[i].setAttribute("data-index", i);
  }
} // --------------------------------------------------------------------


var tabAlco = document.querySelector(".alcohol__content__item"),
    tabAlcoButton = document.querySelectorAll(".tab__alco__btn"),
    tabContentAlcoItem = document.querySelectorAll(".alcohol__content__item-main");

if (tabAlco) {
  searchFirstElmentAlco();
  tabAlco.addEventListener("click", function (e) {
    return showAlco(e);
  });
  setIndexAlco();
}

var showAlco = function showAlco(e) {
  var t = e.target;
  if (!t.classList.contains("tab__alco__btn")) return;
  deleteActiveAlco();
  var index = t.getAttribute("data-index");
  var content = document.querySelector('.alcohol__content__item-main[data-index="' + index + '"]');
  setActiveAlco(t, content);
};

function searchFirstElmentAlco() {
  var tabAlcoButton = document.querySelector(".tab__alco__btn");
  var tabContentAlcoItem = document.querySelector(".alcohol__content__item-main");
  tabAlcoButton.classList.add("active");
  tabContentAlcoItem.classList.add("active");
}

function deleteActiveAlco() {
  for (var i = 0; i < tabAlcoButton.length; i++) {
    tabAlcoButton[i].classList.remove("active");
    tabContentAlcoItem[i].classList.remove("active");
  }
}

function setActiveAlco(t, content) {
  for (var i = 0; i < tabAlcoButton.length; i++) {
    t.classList.add("active");
    content.classList.add("active");
  }
}

function setIndexAlco() {
  for (var i = 0; i < tabAlcoButton.length; i++) {
    tabAlcoButton[i].setAttribute("data-index", i);
    tabContentAlcoItem[i].setAttribute("data-index", i);
  }
}

;