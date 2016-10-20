
function add_record(){

    var title = $('#title').val();
    var alias = $('#alias').val();
    var city = $('#city').val();
    var region = $('#region').val();
    var category = $('#category option:selected ').text();
    var price = $('#price').val();
    var room_number = $('#room_number').val();
    var sleep_places = $('#sleep_places').val();
    var bath_places = $('#bath_places').val();
    var description = $('#description').val();
    var other = $('#other').text();
    var keywords = $('#keywords').val();
    var condition = $('#condition option:selected').text()

    var bid_data = {
        "title":title,
        "alias": alias,
        "city": city,
        "region": region,
        "category": category,
        "price": price,
        "room_number": room_number,
        "sleep_places": sleep_places,
        "bath_places": bath_places,
        "description": description,
        "other": other,
        "keywords": keywords,
        "condition": condition
    };
    var token = window.Laravel.csrfToken;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': token
        },
        type: 'POST',
        url:'admin/add',
        data : bid_data,
        success:function(resp){
            console.log(resp);
        },
        error:function(err){
            console.error(err);
        }
    });
}
function _main(){
    //$('#send').click(add_record);
}


$(document).ready(_main);