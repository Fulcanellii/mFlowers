
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


    var product_name = $('.basket__input-name').text();

    var product_id = $('.order__product-name').attr('product-id');

    var product_offer_id = $('.order__product-name').attr('offer-id');

    var product_price = $('.order__info-input').val();

    var product_quantity = $('.info__counter-input').val();

    var product_total_price = $('#total-price').text();

    var product_shipping_type = $('.order__radio').val();

    var product_shipping_name = $('.shipping_name').val();

    var product_payment_method = $('.form-check-label').val();

    var user_name = $("#order_name").val();

    var user_lastname = $("#order_lastname").val();

    var user_region = $("#order_region").val();

    var user_phone = $("#order_phone").val();

    var user_index = $("#order_index").val();

    var user_city = $("#order_city").val();

    var user_street = $("#order_street").val();

    var user_home = $("#order_home").val();

    var user_email = $("#order_email").val();

    $.ajax({
        url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.lead.add',
        type: 'POST',
        dataType: 'json',
        data: {fields: {NAME: user_name, LAST_NAME: user_lastname, TITLE: 'Заказ', PHONE: [ { "VALUE": user_phone, "VALUE_TYPE": "WORK" } ], ADDRESS_PROVINCE: user_region,
               ADDRESS_POSTAL_CODE: user_index, ADDRESS_CITY: user_city, ADDRESS: user_street + " - " + user_home,
               EMAIL: [ { "VALUE": user_email, "VALUE_TYPE": "HOME" } ], CURRENCY_ID: 'RUB', OPENED: 'Y', ASSIGNED_BY_ID: 1, OPPORTUNITY: product_total_price}},
    })
    .done(function(lead) {

        var lead_id = lead['result'];

        console.log(lead);

        $.ajax({
            url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.product.add',
            type: 'POST',
            dataType: 'json',
            data: {fields: {NAME: product_name, PRICE: product_price, CURRENCY_ID: 'RUB'}},
        })
        .done(function(product) {

            console.log(product);

            $.ajax({
            url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.lead.productrows.set',
            type: 'POST',
            dataType: 'json',
            data: {id: lead_id, rows: [{PRODUCT_ID: product['result'], PRICE_EXCLUSIVE: product_price, TAX_RATE: 15, TAX_INCLUDED: 'Y', QUANTITY: product_quantity}]},
            })
            .done(function(data) {
                console.log(data);
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