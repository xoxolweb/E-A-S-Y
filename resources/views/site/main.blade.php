@extends('layouts.app')
<title>Агентство недвижимости E-A-S-Y</title>
<meta name="description" content="Агентство недвижимости E-A-S-Y - купить, арендовать, продать, квартиру, дом, офис, земельный участок в Киеве и Киевской области  0 800 759 359" />
@section('content')

    <!--- slider start -->
    <section class="slider">
        <div class="wraper_slider">
            @foreach($slider_objs as $slider_obj)
            <div>
                @if($slider_obj->images != null)
                    <img src="{{ json_decode($slider_obj->images) }}" alt="">
                @else
                    <img src="/public/img/bgslide.jpg" alt="">
                @endif
                <div class="element_slide">
                    <div>
                        <div class="bl_cent_categ">
                            <p class="prise">${{$slider_obj->price}}</p>
                            <a href="/{{$slider_obj->cat_alias}}/{{$slider_obj->alias}}" class="rent_text">Подробнее</a>
                        </div>
                        <div class="text_card">
                            <a href="#">{{$slider_obj->city}},{{$slider_obj->region}}</a>
                            <p>{{$slider_obj->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!--- slider end -->

    <!-- categories section start-->
    <section class="category_bl">
        <div class="contain">
            <div class="home_bl">
                <a href="/houses" class="body_category">
                    <h2>Дома</h2>
                </a>
                <div class="footer_category">
                    <a href="/rent">Аренда</a>
                    <a href="/buy">Продажа</a>
                </div>
            </div>
            <div class="apartments_bl">
                <a href="/flats" class="body_category">
                    <h2>Квартиры</h2>
                </a>
                <div class="footer_category">
                    <a href="/rent">Аренда</a>
                    <a href="/buy">Продажа</a>
                </div>
            </div>
            <div class="offices_bl">
                <a href="/offices" class="body_category">
                    <h2>Офисы</h2>
                </a>
                <div class="footer_category">
                    <a href="/rent">Аренда</a>
                    <a href="/buy">Продажа</a>
                </div>

            </div>
        </div>
    </section>
    <!-- categories section end-->

    <!-- filter start -->
    <section class="filter">
        <div class="contain">
            <div class="tab-content">
                <div class="header_filter">
                    <h3>Мне нужно:</h3>
                    <div class="button_category">
                        <div class="buy_bt">
                            <p class="icon-home_rent">Купить</p>
                        </div>
                        <div class="rent_bt">
                            <p class="icon-key1">Арендовать</p>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="give_rent">
                    <div id="give_rent_form">
                        <div class="city_form_bl">
                            <label for="city">Город:</label>
                            <select class="dropdown" id="city">
                                <option value="">Любой</option>
                            @foreach($cities as $city)
                                <option value="{{$city}}">{{$city}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="row_st">
                            <label for="street">Улица:</label><input class="input-sm" type="text" id='street' placeholder="Любая">
                        </div>
                        <div class="condition_bl">
                            <label for="condition">Состояние:</label>
                            <select id="condition">
                                <option value="Любое">Любое</option>
                                @foreach($conditions as $condition)
                                    <option value="{{$condition}}">{{$condition}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="type_home">
                            <label for="type_home">Тип недвижимости:</label>
                            <select id="type_home">
                                <option value="Любое">Любой</option>
                                @foreach($types as $type)
                                    <option value="{{$type}}">{{$type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="footer_for_bl">

                        <div class="head_price">
                            <div class="rent_fack">
                                <div>
                                    <label for="price">Цена:</label>
                                    <input class="input-sm" type="text" id="price_min" placeholder="от">
                                </div>
                                <input class="input-sm" type="text" id="price_max" placeholder="до">
                            </div>
                            <input type="range" min="10" max="1000" step="10" class="input-sm" onchange="changeValue()" />
                        </div>
                        <div class="area_form_bl">
                            <div class="head_area_m">
                                <div class="body_area_m">
                                    <div>
                                        <label for="area">Площадь: </label>
                                        <input id="area_min" class="input-sm" type="text" placeholder="от">
                                    </div>
                                    <input id="area_max" class="input-sm" type="text" placeholder="до">
                                </div>
                            </div>
                            <input type="range" min="10" max="1000" step="10" class="input-sm" onchange="changeValue()" />
                        </div>
                        <div class="roms_num_bl">
                            <label for="rooms_num">Кол. комнат:</label>
                            <select id="rooms_num">
                                <option value="">Любое</option>
                                @foreach($room_numbers as $room_number)
                                    <option value="{{$room_number}}">{{$room_number}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="places_form_bl">
                            <label for="ar">Спальных мест:</label>
                            <select id="sleep_num">
                                <option value="">Любое</option>
                                @foreach($sleep_places as $sl_places)
                                    <option value="{{$sl_places}}">{{$sl_places}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button id="btn_g_rent">Filter</button>

                    </div>
                    <a href="#" class="clear_filter"><i class="icon-latex"></i>Clear filter</a>
                </div>
                <!-- <div role="tabpanel" class="tab-pane" id="sell">...</div>
            <div role="tabpanel" class="tab-pane" id="rent">...</div>
            <div role="tabpanel" class="tab-pane" id="buy">...</div> -->
            </div>
         </div>
    </section>

    <!-- filter end -->
    <!-- search result-->
    <section class="result_request_bl">
        <div class="contain">
            <div class="header_request">
                <h3>По вашему запросу</h3>
            </div>
            <div class="result_filter">
                 @include('site.filter_results',['items'=>$items])
            </div>
        </div>
    </section>



    <!-- about start -->
    <section class="about_we_block">
        <div class="contain">
            <div class="employee_block">
                <h3>наши Сотрудники</h3>
                <div class="employee">
                    @foreach($list as $spec)
                    <div class="user">

                        <img src="{{json_decode($spec->photo)}}" alt="">
                        <div class="about_user">
                            <p>Риелтор</p>
                            <span>{{$spec->name}}</span>
                            <p>Сотрудник агентства, который предоставляет услуги в сфере недвижимости.</p>
                            <p>
                                @foreach(json_decode($spec->phone) as $phone)
                                   <li>{{$phone}}</li>
                                 @endforeach
                            </p>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
            <div class="about_we">
                <div class="map_contact_bl">
                    <h3>Где нас найти</h3>
                    <div class="map_google">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d898.0940179651598!2d30.625941281572697!3d50.45612168214366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5556a6c43e9%3A0xe2c7ab3942c50ece!2z0LLRg9C70LjRhtGPINCa0YDQsNC60ZbQstGB0YzQutCwLCAxNS8xNywg0JrQuNGX0LIsINCj0LrRgNCw0LjQvdCw!5e0!3m2!1sru!2sru!4v1475662339781"
                                width="100%" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <p>Офис «E.a.s.y» расположен недалеко от метро Чергиговская, по улице Гната Хоткевича до первого поворота на право, ул.Краковская 15/17</p>
                    <a href="https://www.google.ru/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%9A%D1%80%D0%B0%D0%BA%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%B0,+15%2F17,+%D0%9A%D0%B8%D1%97%D0%B2,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0/@50.456249,30.6257212,18z/data=!3m1!4b1!4m5!3m4!1s0x40d4c5556a6c43e9:0xe2c7ab3942c50ece!8m2!3d50.456249!4d30.626495">
                        подробнее
                    </a>
                </div>
                <div class="choice_bl">
                    <h3>выбирай easy:</h3>
                    <div>
                        <h5>КТО МЫ?</h5>
                        <div class="choice_content">
                            <p>Мы - начало новой ЭРЫ в сфере риелторских услуг по всей территории Украины!</p>
                        </div>
                    </div>
                    <div>
                        <h5>НАША ЦЕЛЬ?</h5>
                        <div class="choice_content">
                            <p>Обратившись к нам Вы получите:<br> Удобство, комфорт, уверенность в завтрашнем дне. </p>
                        </div>
                    </div>
                    <div>
                        <h5>ПОЧЕМУ МЫ?</h5>
                        <div class="choice_content">
                            <ul>
                                <li>Социальная поддержка.</li>
                                <li>Отсутствие финансовых рисков.</li>
                                <li>Полная юридическая и материальная под- держка.</li>
                                <li>Обеспечение комфорта , удобства для про- живания.</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h5>ГРУЗОПЕРЕВОЗКИ</h5>
                        <div class="choice_content">
                            <ul>
                                <li>Помощь с переездом.</li>
                                <li>Услуги грузчиков (гарантия сохранности).</li>
                                <li>Упаковка груза.</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h5>КЛИНИНГ</h5>
                        <div class="choice_content">
                            <ul>
                                <li>Договорное обслуживание постоянных клиентов.</li>
                                <li>Генеральная уборка после строительства и ремонта.</li>
                                <li>Чистка мебели и ковровых изделий (самовывоз и доставка)</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="reviews_bl">
                    <h3>нами довольны:</h3>
                    <div class="reviews_users">
                        <div class="users_block">
                            <div class="user_kard">
                                <img src="../../public/img/feedback-face.png" alt="">
                                <a href="">Андрей Филипов</a>
                                <p>Покупатель</p>
                                <i class="icon-feedback"></i>
                                <p>Желаю процветания Вашей фирме, а сотрудникам - здоровья, терпения, бодрости и сил. Благодаря Вам, мы довольны на все 100%!</p>
                            </div>
                            <div class="user_kard">
                                <img src="../../public/img/feedback-face.png" alt="">
                                <a href="">Андрей Филипов</a>
                                <p>Покупатель</p>
                                <i class="icon-feedback"></i>
                                <p>Желаю процветания Вашей фирме, а сотрудникам - здоровья, терпения, бодрости и сил. Благодаря Вам, мы довольны на все 100%!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="about_easy">
        <div class="contain">
            <div class="context_about">
                <h1>АГЕНТСТВО НЕДВИЖИМОСТИ E-A-S-Y</h1>
                <div class="body_about">
                    <p>Возникла необходимость снять, купить квартиру в Киеве или области? Вы устали от постоянных поисков недвижимости в бескрайних просторах сети интернет? Хотели бы арендовать офис в Киеве за умеренную плату? В таком случае вы попали куда
                        нужно!</p>
                    <h4>Немного о нас</h4>
                    <p>Агентство недвижимости E-A-S-Y – это штат опытных сотрудников, готовых сделать все, чтобы приобретаемая или арендуемая через нас недвижимость удовлетворяла самые высокие клиентские запросы. С нами Вы можете купить/продать/арендовать,
                        либо сдать в аренду жилую или коммерческую недвижимость, а также земельные участки в пределах Киева и области.</p>
                    <h4>Почему вам стоит обратить внимание на наши предложения?</h4>
                    <ul>
                        <li>Специально для простоты и объективности выбора мы разработали подробнейшую систему подбора предложений.</li>
                        <li>Каждое объявление, касающееся продажи или сдачи в аренду проходит верификацию, в рамках которой специалисты компании проверяют благонадёжность клиента. Так, мы страхуем покупателей и арендаторов от любых рисков.</li>
                        <li>Юридическое и материальное сопровождение сделок. Мы исповедуем современный тип сотрудничества, так называемого полного цикла. Это означает, что на наши плечи ложатся все заботы, связанные с составлением договоров, оформлением правоустанавливающих
                            документов на недвижимость, получением разрешений в контролирующих инстанциях и органах.</li>
                        <li>Каждый день, выполняя свою работу, мы руководствуемся исключительно интересами клиентов.</li>
                    </ul>
                    <h4>Что мы Вам предлагаем</h4>
                    <ol>
                        <li>Широкий охват класса недвижимости – от квартир, готовых к капитальному ремонту, до роскошных апартаментов в которые можно въезжать сразу же после покупки/аренды.</li>
                        <li>Быстрый отклик на запрос, творческий подход к решению неординарных задач. Нередко бывает так, что нашим клиентам необходимо подыскать весьма специфическое здание с конкретными характеристиками. При выполнении столь сложных задач,
                            мы не просим об отсрочке, а вместо этого подключаем все ресурсы, и добиваемся поставленной цели в установленный срок.</li>
                        <li>Готовность меняться каждую секунду. Рынок столичной недвижимости весьма динамичен – то и дело возникают новые тренды, условия, обуславливающиеся воздействием внешних факторов: курсом валют, социальной, экономической, политической
                            составляющей жизни государства. Благодаря постоянному мониторингу рынка, отслеживанию ключевых условий, нам удается предвидеть развитие ситуации, тем самым оградив наших клиентов от неприятных форс-мажоров.</li>
                        <li>Предоставление полного спектра услуг, которые избавят Вас от обращения в несколько компаний. Наше агентство без труда окажет помощь при переезде: упаковка грузов, услуги грузчиков – доставим всё в целости и сохранности. Требуется
                            чистка помещения, из которого выезжаете, либо въезжаете? Тогда наша услуга клининга придётся Вам по-душе: периодическая договорная чистка для постоянных клиентов, уборка после ремонта или строительства, а также чистка мебели
                            и ковров, которая предполагает самовывоз и доставку обратно Вам уже очищенных изделий.</li>
                    </ol>
                    <p>Мы рады всем без исключения, будь Вы представителем компании, которая решила купить дом в Киеве с прицелом на будущее, или же владельцем однокомнатной квартиры на окраине столицы, который решил продать квартиру, чтобы отправиться в
                        живописный поселок, расположенный где-нибудь на берегу Днепра.</p>
                    <p>Агентство недвижимости E-A-S-Y – ваш надёжный партнёр и заботливый экономист в деле подбора только самых выгодных предложений покупки и аренды недвижимости на украинском рынке!</p>
                </div>
            </div>

        </div>
    </section>
    <!-- about end -->
@endsection