
$(".basket__btn-pay").click(function(event) {

    $.request('Cart::onUpdate', {
        'update': {'product/cart-link-header/cart-link-header': '._ajax_cart_link_header_wrapper'
        }
    });

	$("#order-page").show('slow/400/fast', function() {
	});
	$(".basket").hide();


});

$("._create_order_button").click(function(event) {

    var product_price = $('.basket__input-price').text();

    var product_quantity = $('.info__counter-input').val();

    var crm_id = $('.cart__item').attr('data-crm-id');

    var product_shipping_type = $('input[name="shipping_type_id"]:checked').attr('data-name');

    var product_payment_method = $('input[name="payment_method_id"]:checked').attr('payment-name');

    var product_total_price = $('.basket__total-order').text();

    var user_name = $("#order_name").val();

    var user_lastname = $("#order_lastname").val();

    var user_region = $("#order_region").val();

    var user_phone = $("#order_phone").val();

    var user_index = $("#order_index").val();

    var user_city = $("#order_city").val();

    var user_street = $("#order_street").val();

    var user_home = $("#order_home").val();

    var user_email = $("#order_email").val();

    var total = $('#total_order').text();

    var e = $('._ajax_create_order');

    var order = {
        order: {
            payment_method_id: e.find('input[name="payment_method_id"]:checked').val(),
            shipping_type_id: e.find('input[name="shipping_type_id"]:checked').val()
        },
        user: {
            email: e.find('input[name="email"]').val(),
            name: e.find('input[name="name"]').val(),
            last_name: e.find('input[name="last_name"]').val(),
            company: e.find('input[name="company"]').val(),
            phone: e.find('input[name="phone"]').val(),
            comment: e.find('textarea[name="comment"]').val()
        },
        shipping_address: {
            address1: e.find('input[name="address1"]').val(),
            address2: e.find('input[name="address2"]').val(),
            city: e.find('input[name="city"]').val(),
            state: e.find('input[name="state"]').val(),
            postcode: e.find('input[name="postcode"]').val(),
            street: e.find('input[name="street"]').val(),
            house: e.find('input[name="house"]').val()
        },
        billing_address: {}
    };

    $.ajax({
        url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.lead.add',
        type: 'POST',
        dataType: 'json',
        data: {fields: {UF_CRM_SHIPPING_TYPE: product_shipping_type, UF_CRM_PAYMENT_METHOD: product_payment_method, NAME: user_name, LAST_NAME: user_lastname, TITLE: 'Заказ', PHONE: [ { "VALUE": user_phone, "VALUE_TYPE": "WORK" } ], ADDRESS_PROVINCE: user_region,
               ADDRESS_POSTAL_CODE: user_index, ADDRESS_CITY: user_city, ADDRESS: user_street + " - " + user_home,
               EMAIL: [ { "VALUE": user_email, "VALUE_TYPE": "HOME" } ], CURRENCY_ID: 'RUB', OPENED: 'Y', ASSIGNED_BY_ID: 1, OPPORTUNITY: product_total_price}},
    })
    .done(function(lead) {

        var lead_id = lead['result'];
        var arr = [];
        $('.cart__item').each(function (i, index) {
            arr.push({'PRODUCT_ID': $(this).attr('data-crm-id'), 'PRICE_EXCLUSIVE': $(this).find('.basket__input-price').text(), 'QUANTITY': $(this).find('.info__counter-input').val()});
        });
            $.ajax({
                url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.lead.productrows.set',
                type: 'POST',
                dataType: 'json',
                data: {id: lead_id, rows: arr},
            })
                .done(function (data) {
                    $.request('MakeOrder::onCreate', {
                        'data': order
                    });

                    $.ajax({
                        url: 'http://october/paybox',
                        type: 'GET',
                        data: {price: total},
                    })
                        .done(function (data) {
                            window.location.href = data;
                        });

                });


    }); 

    

});

$("#slider").slick({
    dots: true,
    customPaging: function(slider, i) { 
        return '<button class="tab">' + $(slider.$slides[i]).attr('title') + '</button>';
    },
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1
});

$('.cart__on__clear').click(function(event) {
    

    var data = {
        'cart': []
    };

    $.request('Cart::onClear', {
        'data': data,
        'update': {'product/cart-link-header/cart-link-header': '._ajax_cart_link_header_wrapper',
                   'product/cart-position-list/cart-position-list': '.cart'
        }
    });
   
});


