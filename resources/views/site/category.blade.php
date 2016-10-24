@extends('layouts.app')

@section('content')

    <!-- Top Background -->
    <section class="top_background">
    </section>
    <!--  Bread Crumbs-->
    <div class="bread_crumbs">
        <div class="contain">
            <div class="speedbar">
                <span class="first_speed"><a href="#">Агентство недвижимости E-A-S-Y</a><span>&rArr;</span></span>
                <span><a href="#">{{$cat_name}}</a></span>
            </div>
        </div>
    </div>
    <!--Category-->
    <section class="body_block_category">
        <div class="contain">
            <div class="category_card">
                @include('site.filter_results',['items'=>$items])
            </div>
            <!--  Filter-->
            <div class="right_bl_category">
                <div id="search_form" class="form_filter_cat">
                    <input type="hidden" value="{{$cat_name}}" id="cat_name"/>
                    <h6>ПОИСК ОБЕКТА</h6>
                    <select id="type_home">
                        <option value="Любое">Любой</option>
                        @foreach($types as $type)
                            <option value="{{$type}}">{{$type}}</option>
                        @endforeach
                    </select>
                    <select id="city">
                        <option value="">Любой</option>
                        @foreach($cities as $city)
                            <option value="{{$city}}">{{$city}}</option>
                        @endforeach
                    </select>
                    <select name="condition">
                        <option value="Любое">Любое</option>
                        @foreach($conditions as $condition)
                            <option value="{{$condition}}">{{$condition}}</option>
                        @endforeach
                    </select>
                    <select name="rooms_num">
                        <option value="">Любое</option>
                        @foreach($room_numbers as $room_number)
                            <option value="{{$room_number}}">{{$room_number}}</option>
                        @endforeach
                    </select>
                    <select id="sleep_num">
                        <option value="">Любое</option>
                        @foreach($sleep_places as $sl_places)
                            <option value="{{$sl_places}}">{{$sl_places}}</option>
                        @endforeach
                    </select>
                    <div class="prise_category">
                        <input type="text" id="price_min" placeholder="Цена от:" autocomplete="off">
                        <input type="text" id="price_max" placeholder="Цена до:" autocomplete="off">
                    </div>
                    <div class="area_category">
                        <input type="text" id="area_min" placeholder="Площадь от:" autocomplete="off">
                        <input type="text" id="area-max" placeholder="Площадь до:" autocomplete="off">
                    </div>
                    <div class="clearfix"></div>
                    <button class="btn btn-default" id="search">Поиск</button>
                </div>
                <div class="employees_slider">
                    <h6>НАШИ СПЕЦИАЛИСТЫ</h6>
                    <div class="employees_bl">
                        <div class="emplo_card_slid">
                            <img src="../../public/img/specialist-face.png" alt="specialist-face">
                            <p>Риелтор</p>
                            <p>Георгий</p>
                        </div>
                        <div class="emplo_card_slid">
                            <img src="../../public/img/specialist-face.png" alt="specialist-face">
                            <p>Риелтор</p>
                            <p>Георгий</p>
                        </div>
                    </div>
                </div>
                <div class="reviews_users">
                    <div class="users_block">
                        <div class="user_kard">
                            <img src="../../public/img/feedback-face.png" alt="Андрей Филипов">
                            <a href="">Андрей Филипов</a>
                            <p>Покупатель</p>
                            <i class="icon-feedback"></i>
                            <p>Желаю процветания Вашей фирме, а сотрудникам - здоровья, терпения, бодрости и сил. Благодаря Вам, мы довольны на все 100%!</p>
                        </div>
                        <div class="user_kard">
                            <img src="../../public/img/feedback-face.png" alt="Андрей Филипов">
                            <a href="">Андрей Филипов</a>
                            <p>Покупатель</p>
                            <i class="icon-feedback"></i>
                            <p>Желаю процветания Вашей фирме, а сотрудникам - здоровья, терпения, бодрости и сил. Благодаря Вам, мы довольны на все 100%!</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection

