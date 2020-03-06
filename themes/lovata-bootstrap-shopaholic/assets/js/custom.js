$(".basket__btn-pay").click(function(event) {
	$("#order-page").show('slow/400/fast', function() {

		
	});
	$(".basket").hide();
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

