

// блок выбирай easy
$('.choice_bl>div h5').on('click',function(){
  $(this).parent().toggleClass('onchoice')
})
//slider
var arrElem=['.wraper_slider','.users_block','.employees_bl'];

if(($(document).width()-11)<=768){
  arrElem.push('.employee')
}
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
  $('.body_about').slideToggle();
  $(this).parent().toggleClass('active_about')
})


$('.accordion>div h5').on('click',function(){
  $(this).parent().toggleClass('onchoice')
})


$('.slick-slider .slick-next').text('>');
$('.slick-slider .slick-prev').text('<');

// heddin's art


function filter_main() {


  var region = $('#street').val()

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
    'city': city,
    'region': region,
    'condition': condition,
    'type': type_home,
    'room_number': rooms_num,
    'sleep_places': sleep_num,
    'price_min': price_min,
    'price_max': price_max,
    'area_min': area_min,
    'area_max': area_max
  };

  //form_data = JSON.stringify(form_data);
  var _token = csrfToken;

  $.ajax({
    headers: {
      'X-CSRF-TOKEN': _token
    },
    type: 'post',
    url: '/filter',
    data: form_data,
    success: function (resp) {
      $('.result_filter').html(resp);
    },
    error: function (err) {
      console.error(err);
    }
  });
}
function filter_category(){


  var region  = $('#street').val()
  var category = $('#cat_name').val();
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
    'category' : category,
    'room_number' : rooms_num,
    'sleep_places': sleep_num,
    'price_min' : price_min,
    'price_max' :price_max,
    'area_min' : area_min,
    'area_max' : area_max
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
        $('.category_card').html(resp);
    },
    error:function(err){
       console.error(err);
    }
  });


}

function _main(){


  var btn_give_rent = $('#btn_g_rent');
  var btn_search = $('#search');
  var btn_objs = $('#objs');
  var btn_specs = $('#specs');


  btn_objs.click(
    function(){
       $('.objs').collapse('toggle');

    }
  );
  btn_specs.click(
    function(){

      $('.specs').collapse('toggle');

    }
  );
  btn_search.click(filter_category);
  btn_give_rent.click(filter_main);


}
$(document).ready(_main);

