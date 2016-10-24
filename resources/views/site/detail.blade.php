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
                <span><a href="#"> Арендовать</a></span>
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
                            <img src="../../public/img/Main-product-slider-1.jpg" alt="Фото квартиры">

                        </div>
                        <div class="price_getObj">
                            <p>$7000</p>
                            <a href="#">Арендовать</a>
                        </div>
                    </div>
                    <div class="footer_slider_obj">
                        <img src="../../public/img/Main-product-slider-2.jpg" alt="Фото квартиры">
                        <img src="../../public/img/Main-product-slider-1.jpg" alt="Фото квартиры">
                        <img src="../../public/img/Main-product-slider-1.jpg" alt="Фото квартиры">
                    </div>
                    <div class="about_object">
                        <div class="description_bl">
                            <div class="type_obj">
                                <ul>
                                    <li>Тип объекта: <span>Офис</span></li>
                                    <li>Площадь(общая): <span>120</span>m2</li>
                                    <li>Площадь жилая: <span>32</span>m2</li>
                                    <li>Площадь кухни: <span>12</span>m2</li>
                                    <li>ул.Маршала Малиновского 8</li>
                                    <li class="icon-bed">Комнаты: <span>8</span></li>
                                    <li class="icon-wash">Ванная комната: <span>1</span></li>
                                </ul>
                            </div>
                            <div class="description_text">
                                <h4>Квартира-студия в новом доме</h4>
                                <p>Квартира-студия в новом доме Квартира-студия в новом домеКвартира-студия в новом домеКвартира-студия в новом домеКвартира-студия в новом домеКвартира-студия в новом домеКвартира-студия в новом домеКвартира-студия в новом
                                    доме Квартира-студия в новом дом еКвартира-студия в н овом домеКвартира-студия в новом домеКвартира-студия в новом домеКвартира-студия в новом домеКвартира-студия в новом домеКвартира-студия в новом домеКвартира-студия
                                    в новом домеКвартира-студия в новом доме Квартир а-студия в новом доме Квартира-студия в новом доме Квартира-студия в новом домеКвартира-студия в новом доме Квартира-студия в новом домеКвартира-студия в новом домеКвартира-студи
                                </p>
                            </div>
                        </div>
                        <div class="more_information">
                            <h4>больше информации</h4>
                            <div class="accordion">
                                <div>
                                    <h5>Дополнительная информация </h5>
                                    <div class="text_this">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque minus placeat, commodi laborum unde. Aut error, eius, voluptates quia inventore aspernatur ducimus rerum in quos deleniti a, amet distinctio impedit.</div>
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
                        <img src="../../public/img/specialist-face.png" alt="specialist-face">
                        <p>Георгий</p>
                        <div class="contact_emplo">
                            <a href="tel:+0800759359">Офис: <span>0 800 759 359</span></a>
                            <a href="tel:+380932739359"> Моб.: <span>(093) 273-93-59</span></a>
                            <a href="mailto:support@e-a-s-y.in.ua"> Mail: <span>support@e-a-s-y.in.ua</span></a>
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
    <div class="similar_options_bl">
        <div class="contain">
            <h3>ПОХОЖЫЕ варианты</h3>
            <div class="card_similar">
                <div class="sell_card">
                    <div class="head_card">
                        <a href="#">
                            <img src="../../public/img/template.jpg" alt="">
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
                            <img src="../../public/img/template.jpg" alt="">
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
                            <img src="../../public/img/template.jpg" alt="">
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
                            <img src="../../public/img/template.jpg" alt="">
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
                            <img src="../../public/img/template.jpg" alt="">
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
                            <img src="../../public/img/template.jpg" alt="">
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