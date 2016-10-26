@extends('layouts.app')
<title>{{$item->title}}</title>
<meta name="description" content="{{$item->description}}" />
@section('content')
    <!-- Top Background -->
    <section class="top_background">
    </section>
    <!--  Bread Crumbs-->
    <div class="bread_crumbs">
        <div class="contain">
            <div class="speedbar">
                <span class="first_speed"><a href="{{route('main')}}">Агентство недвижимости E-A-S-Y</a><span>&rArr;</span></span>
                <span><a href="/{{$category}}">{{$item->category}}</a></span><span>&rArr;</span>
                <span><a href="/{{$category}}/{{$item->type_alias}}/">{{$item->type}}</a></span><span>&rArr;</span>
                <span><a href="/{{$category}}/{{$item->type_alias}}/{{$item->alias}}">{{$item->title}}</a></span>
            </div>
        </div>
    </div>
    <!-- selected object  -->
    <section class="body_object">
        <div class="contain">
            <div class="object_selected_bl">
                <div class="slider_object">
                    <div class="head_img_bl">
                        <div class="img_obj">
                            @if($item->images != null)
                                <img src="{{ json_decode($item->images) }}" alt="">
                            @else
                                <img src=" /public/img/Main-product-slider-1.jpg" alt="">
                            @endif
                        </div>
                        <div class="price_getObj">
                            <p>${{$item->price}}</p>
                            <a href="/{{$category}}">{{$item->category}}</a>
                        </div>
                    </div>
                    <div class="footer_slider_obj">
                        <img src=" /public/img/Main-product-slider-2.jpg" alt="Фото квартиры">
                        <img src=" /public/img/Main-product-slider-1.jpg" alt="Фото квартиры">
                        <img src=" /public/img/Main-product-slider-1.jpg" alt="Фото квартиры">
                    </div>
                    <div class="about_object">
                        <div class="description_bl">
                            <div class="type_obj">
                                <ul>
                                    <li>Тип объекта: <span>{{$item->type}}</span></li>
                                    <li>Площадь(общая): <span>{{$item->area}}</span>m2</li>
                                   {{-- <li>Площадь жилая: <span>32</span>m2</li>
                                    <li>Площадь кухни: <span>12</span>m2</li>--}}
                                    <li>{{$item->city}},{{$item->region}}</li>
                                    <li class="icon-bed">Комнаты: <span>{{$item->sleep_places}}</span></li>
                                    <li class="icon-wash">Ванная комната: <span>{{$item->bath_places}}</span></li>
                                </ul>
                            </div>
                            <div class="description_text">
                                <h1>{{$item->title}}</h1>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                        <div class="more_information">
                            <h4>больше информации</h4>
                            <div class="accordion">
                                <div>
                                    <h5>Дополнительная информация </h5>
                                    <div class="text_this">{{$item->others}}</div>
                                </div>
                                <div>
                                    <h5>Видео</h5>
                                    <div class="text_this">
                                        <iframe width="100%" height="420" src="https://www.youtube.com/embed/j1aCW6djc2U" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div>
                                    <h5>карта</h5>
                                    <div class="text_this"></div>
                                </div>
                                <div>
                                    <h5>Контакты</h5>
                                    <div class="text_this"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right_bl_category">
                <div class="employees_slider">
                    <h6>НАШ СПЕЦИАЛИСТ</h6>
                    <div class="emplo_card_slid">
                        <img src="{{json_decode($spec->photo)}}" alt="specialist-face">
                        <p>{{$spec->name}}</p>
                        <div class="contact_emplo">
                            <a href="tel:{{json_decode($spec->phone)->office}}">Офис:{{json_decode($spec->phone)->office}}</a>
                            <a href="tel:{{json_decode($spec->phone)->mob}}"> Моб.: {{json_decode($spec->phone)->mob}}</a>
                            <a href="mailto:{{$spec->email}}"> Mail: {{$spec->email}}</a>
                        </div                    </div>
                </div>
                <div class="reviews_users">
                    <div class="users_block">
                        <div class="user_kard">
                            <img src=" /public/img/feedback-face.png" alt="Андрей Филипов">
                            <a href="">Андрей Филипов</a>
                            <p>Покупатель</p>
                            <i class="icon-feedback"></i>
                            <p>Желаю процветания Вашей фирме, а сотрудникам - здоровья, терпения, бодрости и сил. Благодаря Вам, мы довольны на все 100%!</p>
                        </div>
                        <div class="user_kard">
                            <img src=" /public/img/feedback-face.png" alt="Андрей Филипов">
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
    <div class="similar_options_bl">
        <div class="contain">
            <h3>ПОХОЖЫЕ варианты</h3>
            <div class="card_similar">
                <div class="sell_card">
                    <div class="head_card">
                        <a href="#">
                            <img src=" /public/img/template.jpg" alt="">
                        </a>
                        <div class="bl_cent_categ">
                            <p class="prise">$3580</p>
                            <a href="#" class="rent_text">Аренда</a>
                        </div>
                    </div>
                    <div class="text_card">
                        <a href="#">Chatham St NW. Roanoke, VA 24012</a>
                        <p>Lorem impsulm, insulim sulem malin tempo</p>
                        <div class="about_card">
                            <p>Площадь: 450m2</p>
                            <div class="bed_shower">
                                <p class="icon-bed">2</p>
                                <p class="icon-wash">3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sell_card">
                    <div class="head_card">
                        <a href="#">
                            <img src=" /public/img/template.jpg" alt="">
                        </a>
                        <div class="bl_cent_categ">
                            <p class="prise">$3580</p>
                            <a href="#" class="rent_text">Аренда</a>
                        </div>
                    </div>
                    <div class="text_card">
                        <a href="#">Chatham St NW. Roanoke, VA 24012</a>
                        <p>Lorem impsulm, insulim sulem malin tempo</p>
                        <div class="about_card">
                            <p>Площадь: 450m2</p>
                            <div class="bed_shower">
                                <p class="icon-bed">2</p>
                                <p class="icon-wash">3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sell_card">
                    <div class="head_card">
                        <a href="#">
                            <img src=" /public/img/template.jpg" alt="">
                        </a>
                        <div class="bl_cent_categ">
                            <p class="prise">$3580</p>
                            <a href="#" class="rent_text">Аренда</a>
                        </div>
                    </div>
                    <div class="text_card">
                        <a href="#">Chatham St NW. Roanoke, VA 24012</a>
                        <p>Lorem impsulm, insulim sulem malin tempo</p>
                        <div class="about_card">
                            <p>Площадь: 450m2</p>
                            <div class="bed_shower">
                                <p class="icon-bed">2</p>
                                <p class="icon-wash">3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sell_card">
                    <div class="head_card">
                        <a href="#">
                            <img src=" /public/img/template.jpg" alt="">
                        </a>
                        <div class="bl_cent_categ">
                            <p class="prise">$3580</p>
                            <a href="#" class="rent_text">Аренда</a>
                        </div>
                    </div>
                    <div class="text_card">
                        <a href="#">Chatham St NW. Roanoke, VA 24012</a>
                        <p>Lorem impsulm, insulim sulem malin tempo</p>
                        <div class="about_card">
                            <p>Площадь: 450m2</p>
                            <div class="bed_shower">
                                <p class="icon-bed">2</p>
                                <p class="icon-wash">3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sell_card">
                    <div class="head_card">
                        <a href="#">
                            <img src=" /public/img/template.jpg" alt="">
                        </a>
                        <div class="bl_cent_categ">
                            <p class="prise">$3580</p>
                            <a href="#" class="rent_text">Аренда</a>
                        </div>
                    </div>
                    <div class="text_card">
                        <a href="#">Chatham St NW. Roanoke, VA 24012</a>
                        <p>Lorem impsulm, insulim sulem malin tempo</p>
                        <div class="about_card">
                            <p>Площадь: 450m2</p>
                            <div class="bed_shower">
                                <p class="icon-bed">2</p>
                                <p class="icon-wash">3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sell_card">
                    <div class="head_card">
                        <a href="#">
                            <img src=" /public/img/template.jpg" alt="">
                        </a>
                        <div class="bl_cent_categ">
                            <p class="prise">$3580</p>
                            <a href="#" class="rent_text">Аренда</a>
                        </div>
                    </div>
                    <div class="text_card">
                        <a href="#">Chatham St NW. Roanoke, VA 24012</a>
                        <p>Lorem impsulm, insulim sulem malin tempo</p>
                        <div class="about_card">
                            <p>Площадь: 450m2</p>
                            <div class="bed_shower">
                                <p class="icon-bed">2</p>
                                <p class="icon-wash">3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more_card">
                <a href="#" class="active_more">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
            </div>

        </div>

    </div>

@endsection