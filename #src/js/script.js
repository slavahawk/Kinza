@@include('wow.min.js');
@@include('webp.js');
@@include('burger.js');
@@include('filter.js');
@@include('list.js');
@@include('map.js');
@@include('flyToBasket.js');

new WOW().init();
$(function () {
	(function quantityProducts() {
		var $quantityArrowMinus = $('.quantity-arrow-minus');
		var $quantityArrowPlus = $('.quantity-arrow-plus');
		var $quantityNum = $('.quantity-num');

		$quantityArrowMinus.click(quantityMinus);
		$quantityArrowPlus.click(quantityPlus);

		function quantityMinus() {
			if ($quantityNum.val() > 1) {
				$quantityNum.val(+$quantityNum.val() - 1);
			}
		}

		function quantityPlus() {
			$quantityNum.val(+$quantityNum.val() + 1);
		}
	})();
});
