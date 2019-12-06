$(window).scroll(function(){
  console.log('scroll');
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 110) {
    $('.header').addClass('shadow-lg bg-white')
  } else {
    $('.header').removeClass('shadow-lg bg-white')
  }
});

//Мобильное меню
$('.mobile_menu').on('click', function(){
  $(this).toggleClass('active');
  $('.mobile_cover').toggleClass('active');
});

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
  onAfterSlide: function (el) {
    SliderPost();
  },
});

function SliderPost() {
  sliderActiveImgHeight = document.querySelector('.lslide.active img').naturalHeight;
  sliderActiveImgWidth = document.querySelector('.lslide.active img').naturalWidth;
  siderActiveWidth = $('.lslide.active').width();

  sliderNewKoef = sliderActiveImgWidth/siderActiveWidth;
  sliderNewHeight = sliderActiveImgHeight/sliderNewKoef;
  $('#lightSlider').css({'height':sliderNewHeight+'px'})
}

SliderPost();