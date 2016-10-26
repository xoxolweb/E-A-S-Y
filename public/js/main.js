

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
});


$('.accordion>div h5').on('click',function(){
  $(this).parent().toggleClass('onchoice')
});


$('.slick-slider .slick-next').text('>');
$('.slick-slider .slick-prev').text('<');

// heddin's art

//site

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

// adnmin's part

function photo_prewiew() {

    var input = $('#images')[0];

    for (let i = 0; i<input.files.length; i++){

          if (input.files && input.files[i]) {

             var reader = new FileReader();

             reader.onload = function (e) {

             let cur_image = $('<img>').attr('id','ph'+i).attr('src', e.target.result);
                  cur_image.addClass('col-md-3 thumbnail');
                  cur_image.click((e)=>{
                      let target = $('#'+e.target.id);
                    (target.hasClass('col-md-3'))
                        ? target.removeClass('col-md-3').addClass('col-md-12')
                        : target.removeClass('col-md-12').addClass('col-md-3');

                  });
                  cur_image.appendTo($('#imageBox'));
             };

             reader.readAsDataURL(input.files[i]);
          }

    }
  console.log($('#imageBox').children());
}
function swap_imgs(e){

  let target_id = e.target.id;
    let target =  $('#'+target_id);
    let big = $('.big');
    let tmp_src = target.attr('src');

    target.attr('src',big.attr('src'))
    big.attr('src',tmp_src);
}

// main function
function _main() {


  var btn_give_rent = $('#btn_g_rent');
  var btn_search = $('#search');
  var input_photos = $('#images');

  btn_search.click(filter_category);
  btn_give_rent.click(filter_main);

  input_photos.change(photo_prewiew);



}
$(document).ready(_main);

