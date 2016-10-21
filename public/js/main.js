

// блок выбирай easy
$('.choice_bl>div h5').on('click',function(){
  $(this).parent().toggleClass('onchoice')
})
//slider
var arrElem=['.wraper_slider','.users_block','.employees_bl']
function setSlidElem(arr){
  for(var i=0;i<arr.length;i++){
    $(arr[i]).slick({
      infinite: true,
      autoplay: true,
      speed: 500
    });
  }
}
setSlidElem(arrElem);

// context_about hidden block
$('.context_about h1').on('click', function(){
  $('.body_about').slideToggle()
  $(this).parent().toggleClass('active_about')
})
$('.slick-slider .slick-next').text('>');
$('.slick-slider .slick-prev').text('<');
