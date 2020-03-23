
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
        $.ajax({
            url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.lead.productrows.set',
            type: 'POST',
            dataType: 'json',
            data: {id: lead_id, rows: [{ PRODUCT_ID: crm_id, PRICE_EXCLUSIVE: product_price, QUANTITY: product_quantity }] },
            })
            .done(function(data) {
                console.log(data);
            });

    }); 

    

});


jQuery(document).ready(function($) {


        var arr = [];
        var crm_id = $('.cart__item').each(function (i, index) {

            var product_id = $(this).attr('data-crm-id');
            var price = $(this).find('.basket__input-total').text();
            var quantity = $(this).find('.info__counter-input').val();
            console.log(product_id);
            // arr['product_id'] = $(this).attr('data-crm-id');
            // arr['PRICE_EXCLUSIVE'] = $(this).find('.basket__input-total').text();
            // arr['QUANTITY'] = $(this).find('.info__counter-input').val();

            // rows.set('crm_id', $(this).attr('data-crm-id'));
            // var arr = new Map([
            //     ['PRODUCT_ID', ],
            //     ['PRICE_EXCLUSIVE', $(this).find('.basket__input-total').text()],
            //     ['QUANTITY', $(this).find('.info__counter-input').val()]
            // ]);

        });

// console.log(arr);

    // var arr = [];
    // var crm_id = $('.cart__item').each(function (i, index) {
    //
    //     arr['product_id'] = $(this).attr('data-crm-id');
    //     arr['price'] = $(this).find('.basket__input-total').text();
    //     arr['quantity'] = $(this).find('.info__counter-input').val();
    //
    //     console.log(arr);
    //
    // });


        // $.ajax({
     //        url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.product.get',
     //        type: 'POST',
     //        dataType: 'json',
     //        data: {XML_ID: "50"}
     //        })
     //        .done(function(data) {
     //            console.log(data);
     //        });
    
    // $.ajax({
    //         url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.product.add',
    //         type: 'POST',
    //         dataType: 'json',
    //         data: {fields:
    //             { 
    //                 "NAME": "1С-Битрикс: Управление сайтом - Старт", 
    //                 "CURRENCY_ID": "RUB", 
    //                 "PRICE": 4900, 
    //                 "SORT": 500,
    //                 "XML_ID": "50",

    //             }}
    //         })
    //         .done(function(data) {
    //             console.log(data);
    //         });



    // $.ajax({
    //         url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.productrow.fields',
    //         type: 'POST',
    //         dataType: 'json'
    //         })
    //         .done(function(data) {
    //             console.log(data);
    //         });

    // $.ajax({
    //         url: 'https://b24-3xwwl0.bitrix24.ru/rest/1/d6smpzxao255pv73/crm.product.update',
    //         type: 'POST',
    //         dataType: 'json',
    //         data: {id: 71, fields: {XML_ID: 9, ID: 9}}
    //         })
    //         .done(function(data) {
    //             console.log(data);
    //         });
    
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