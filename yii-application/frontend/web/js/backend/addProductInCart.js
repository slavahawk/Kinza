$(document).ready(function () {
    $('.add-product').on('click', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
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
            },
        });
    });
});