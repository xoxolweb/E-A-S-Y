

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

function give_rent(){


  var region  = $('#street').val()

  var city = $('#city option:selected').val();
  var condition = $('#condition option:selected').val();
  var type_home = $('#type_home option:selected').val();
  var rooms_num = $('#rooms_num option:selected').val();
  var sleep_num = $('#sleep_num option:selected').val();

  var price_min = $('#price_min').val();
  var price_max = $('#price_max').val();
  var area_min = $('#area_min').val();
  var area_max = $('#area_max').val();

  var form_data = {
    'city' : city,
    'region': region,
    'condition': condition,
    'type': type_home,
    'room_number' : rooms_num,
    'sleep_places': sleep_num,
    'price_min' : price_min,
    'price_max' :price_max,
    'area_min' : area_min,
    'area_max' : area_max,
  };

  //form_data = JSON.stringify(form_data);
  var _token = csrfToken;

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': _token
    },
    type: 'post',
    url:'/filter',
    data : form_data,
    success:function(resp){

       $('.result_filter').html(resp);
    },
    error:function(err){
     // console.error(err);
    }
  });


}

function _main(){


  var btn_give_rent = $('#btn_g_rent');
  btn_give_rent.click(give_rent);


}
$(document).ready(_main);

