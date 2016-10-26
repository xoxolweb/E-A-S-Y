@extends('layouts.app')

    @if($category == 'rent')
      <title>Аренда недвижимости в Киеве и Киевской области - агентство недвижимости E-A-S-Y</title>
      <meta name="description" content="Аренда недвижимости в Киеве и Киевской области, снять недвижимость под Киевом. Реальные фото, лучшие цены.  0 800 759 359" />
      <meta name="keywords" content="аренда недвижимости, снять квартиру, аренда офиса, ареда склада, аренда магазина, агентство недвижимости киев, агентство недвижимости, easy, e-a-s-y, изи, киев, украина" />
    @endif
     @if($category == 'buy')
      <title>Купить недвижимость в Киеве - Продажа недвижимости под Киевом: АН E-A-S-Y</title>
      <meta name="description" content="Купить недвижимость в Киеве и Киевской области, продажа недвижимости под Киевом, реальные фото, лучшие цены" />
      <meta name="keywords" content="недвижимость, недвижимость киев ,агентства недвижимости, недвижимость в киеве, продажа недвижимости, куплю недвижимость, купить недвижимость, аренда недвижимости, киевская недвижимость, агентство недвижимости киев, агентство недвижимости, easy, e-a-s-y, изи, киев, укр" />
     @endif

@section('content')

    <!-- Top Background -->
    <section class="top_background">
    </section>
    <!--  Bread Crumbs-->
    <div class="bread_crumbs">
        <div class="contain">
            <div class="speedbar">
                <span class="first_speed"><a href="{{route ('main')}}">Агентство недвижимости E-A-S-Y</a><span>&rArr;</span></span>
                <span><a href="/{{$category}}">{{$cat_name}}</a></span>
            </div>
        </div>
    </div>
    <!--Category-->
    <section class="body_block_category">
        <section class="category_bl">
            <div class="contain">
                <div class="home_bl">
                    <a href="/houses" class="body_category">
                        <h2>Дома</h2>
                    </a>

                </div>
                <div class="apartments_bl">
                    <a href="/flats" class="body_category">
                        <h2>Квартиры</h2>
                    </a>

                </div>
                <div class="offices_bl">
                    <a href="/offices" class="body_category">
                        <h2>Офисы</h2>
                    </a>


                </div>
            </div>
        </section>
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
                        @foreach($spec as $specialist)
                        <div class="emplo_card_slid">
                            <img src="{{json_decode($specialist->photo)}}" alt="specialist-face">
                            <p>Риелтор</p>
                            <p>{{$specialist->name}}</p>
                        </div>
                        @endforeach
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

