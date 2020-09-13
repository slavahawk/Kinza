$(document).ready(function () {
    $('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/add-in-cart',
            data: { id: id },
            type: 'GET',
            success: function (res) {
                var obj = jQuery.parseJSON(res);
                $('#cart-count').html(obj.qty);
                $('#cart-count-num').html(obj.num);
            },
        });
    });

    $('.add-product').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        if ($('div#cart-check-num-' + id + '.minus-product').hasClass('amount__disabled')) {
            $('div#cart-check-num-' + id + '.minus-product').removeClass('amount__disabled');
        }
        $.ajax({
            url: '/cart/add-in-cart',
            data: { id: id },
            type: 'GET',
            success: function (res) {
                var obj = jQuery.parseJSON(res);
                $('#cart-count').html(obj.qty);
                $('#cart-count-qty').html(obj.qty);
                $('#cart-count-sum').html(obj.sum);
                $('#cart-count-num-' + id).html(obj.num);
            }
        });
    });

    $('.minus-product').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/minus-in-cart',
            data: { id: id },
            type: 'GET',
            success: function (res) {
                var obj = jQuery.parseJSON(res);
                if (obj.num >= 1) {
                    $('#cart-count').html(obj.qty);
                    $('#cart-count-qty').html(obj.qty);
                    $('#cart-count-sum').html(obj.sum);
                    $('#cart-count-num-' + id).html(obj.num);
                } else {
                    $('div#cart-check-num-' + id + '.minus-product').addClass('amount__disabled');
                }
            }
        });
    });

    $('.delete-product').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url: '/cart/delete',
            data: { id: id },
            type: 'GET',
            success: function (res) {
                var obj = jQuery.parseJSON(res);
                $('#cart-count').html(obj.qty);
                $('#cart-count-qty').html(obj.qty);
                $('#cart-count-sum').html(obj.sum);
                $('#cart-product-' + id).fadeOut( 500, 'swing', function () {
                    $(this).remove();
                });
                if (obj.qty === 0) {
                    $('.cart__content-cart-total').remove();
                    $('.cart__content-cart-btn').remove();
                    $('.cart__content-sum').remove();
                    $("<h3>Корзина пуста</h3>").insertAfter('.cart__content-back');
                }
            }
        });
    });
});


