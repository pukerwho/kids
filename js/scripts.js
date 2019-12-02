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
