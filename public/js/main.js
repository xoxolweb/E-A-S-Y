

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
