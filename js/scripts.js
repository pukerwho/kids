$(window).scroll(function(){
  console.log('scroll');
  var h_scroll = $(this).scrollTop();
  if ($(document).width() > 993) {
    if (h_scroll > 110) {
      $('.header').addClass('shadow-lg bg-white')
    } else {
      $('.header').removeClass('shadow-lg bg-white')
    }
  }
})

$('.header_order').on('click', function(){
	$('.modal_order').addClass('modal_open');
	$('.modal_bg').addClass('modal_bg_open');
});

$('.modal_close').on('click', function(){
	$('.modal').removeClass('modal_open');
	$('.modal_bg').removeClass('modal_bg_open');
});

$('.order_now').on('click', function(){
  $('.modal_order_now').addClass('modal_open');
  $('.modal_bg').addClass('modal_bg_open');
});

$('#lightSlider').lightSlider({
  gallery: true,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 9,
})