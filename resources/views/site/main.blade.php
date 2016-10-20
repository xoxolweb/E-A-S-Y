@extends('layouts.app');

@section('content')

    <div class="slider">

        <section class="slider">
            <div class="wraper_slider">
                <div>
                    <img src=" /public/img/bgslide.jpg" alt="">
                    <div class="element_slide">
                        <div>
                            <div class="bl_cent_categ">
                                <p class="prise">$3580</p>
                                <a href="#" class="rent_text">Подробнее</a>
                            </div>
                            <div class="text_card">
                                <a href="#">Chatham St NW. Roanoke, VA 24012</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque rerum, dignissimos enim recusandae quis consectetur fugiat similique facere quaerat cum quibusdam ad voluptatibus dolorem deleniti ullam porro hic minus facilis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src=" /public/img/bgslide.jpg" alt="">
                    <div class="element_slide">
                        <div>
                            <div class="bl_cent_categ">
                                <p class="prise">$3580</p>
                                <a href="#" class="rent_text">Подробнее</a>
                            </div>
                            <div class="text_card">
                                <a href="#">Chatham St NW. Roanoke, VA 24012</a>
                                <p>Lorem impsulm, insulim sulem malin tempo impsulm, insulim sulem malin tempo</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="category_bl">
            <div class="contain">
                <div class="home_bl">
                    <a href="#" class="body_category">
                        <h2>Дома</h2>
                    </a>
                    <div class="footer_category">
                        <a href="#">Аренда</a>
                        <a href="#">Продажа</a>
                    </div>
                </div>
                <div class="apartments_bl">
                    <a href="#" class="body_category">
                        <h2>Квартиры</h2>
                    </a>
                    <div class="footer_category">
                        <a href="#">Аренда</a>
                        <a href="#">Продажа</a>
                    </div>
                </div>
                <div class="offices_bl">
                    <a href="#" class="body_category">
                        <h2>Офисы</h2>
                    </a>
                    <div class="footer_category">
                        <a href="#">Аренда</a>
                        <a href="#">Продажа</a>
                    </div>

                </div>
            </div>
        </section>
        <section class="filter">
            <div class="contain">
                <div class="tab-content">
                    <div class="header_filter">
                        <h3>Мне нужно:</h3>
                        <div class="button_category">
                            <div class="buy_bt">
                                <p class="icon-home_sale">Купить</p>
                            </div>
                            <div class="rent_bt">
                                <p class="icon-home_sale">Арендовать</p>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="give_rent">
                        <div id="give_rent_form">
                            <div class="city_form_bl">
                                <label for="street">Город:</label>
                                <select class="dropdown" id="city">
                                    <option value="">Город:</option>
                                </select>
                            </div>
                            <div class="row_st">
                                <label for="street">Улица:</label><input class="input-sm" type="text" id='street' placeholder="street">
                            </div>
                            <div class="condition_bl">
                                <label for="condition">Состояние:</label>
                                <select id="condition">
                                    <option value="Любое"></option>
                                </select>
                            </div>
                            <div class="type_home">
                                <label for="type_home">Тип недвижимости:</label>
                                <select id="type_home">
                                    <option value="Любое"></option>
                                </select>
                            </div>
                        </div>
                        <div class="footer_for_bl">
                            <div class="head_price">
                                <div class="rent_fack">
                                    <div>
                                        <label for="price_min">Цена:</label>
                                        <input class="input-sm" type="text" id="price_min" placeholder="price-min">
                                    </div>
                                    <input class="input-sm" type="text" id="price_max" placeholder="price-max">
                                </div>
                                <input type="range" min="10" max="1000" step="10" class="input-sm" onchange="changeValue()" />
                            </div>
                            <div class="area_form_bl">
                                <div class="head_area_m">
                                    <div class="body_area_m">
                                        <div>
                                            <label for="area-min">Площадь: </label>
                                            <input id="area-min" class="input-sm" type="text" placeholder="area">
                                        </div>
                                        <input id="area-max" class="input-sm" type="text" placeholder="area">
                                    </div>
                                </div>
                                <input type="range" min="10" max="1000" step="10" class="input-sm" onchange="changeValue()" />
                            </div>
                            <div class="roms_num_bl">
                                <label for="rooms_num">Кол. комнат:</label>
                                <select id="rooms_num">
                                    <option value="">rooms</option>
                                </select>
                            </div>
                            <div class="places_form_bl">
                                <label for="sleep_num">Спальных мест:</label>
                                <select id="sleep_num">
                                    <option value="">sleep places</option>
                                </select>
                            </div>
                            <button id="btn_g_rent">Арендовать</button>
                        </div>
                    </div>
                    <!-- <div role="tabpanel" class="tab-pane" id="sell">...</div>
                <div role="tabpanel" class="tab-pane" id="rent">...</div>
                <div role="tabpanel" class="tab-pane" id="buy">...</div> -->
                </div>
            </div>
        </section>
        <section class="result_request_bl">
            <div class="contain">
                <div class="header_request">
                    <h3>по вашему запросу</h3>
                </div>
                <div class="result_filter">
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

            </div>
        </section>
        <section class="">
            <div class="contain">
                <div class="employee_bl">

                </div>


            </div>
        </section>
</div>
@endsection