

// блок выбирай easy
$('.choice_bl>div h5').on('click',function(){
  $(this).parent().toggleClass('onchoice')
})
//slider
$('.wraper_slider').slick({
  infinite: true,
  autoplay: true,
  speed: 500
});
$('.users_block').slick({
  infinite: true,
  autoplay: true,
  speed: 500
});
// context_about hidden block
$('.context_about h1').on('click', function(){
  $('.body_about').slideToggle()
  $(this).parent().toggleClass('active_about')
})
$('.slick-slider .slick-next').text('>');
$('.slick-slider .slick-prev').text('<');
