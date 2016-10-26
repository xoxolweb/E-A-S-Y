               @foreach($items as $item)
                    <div class="sell_card">
                        <div class="head_card">
                            <a href="/{{$item->cat_alias}}/{{$item->alias}}">
                                @if($item->images != null)
                                    <img src="{{ json_decode($item->images) }}" alt="">
                                @else
                                    <img src="/public/img/template.jpg" alt="">
                                @endif
                            </a>
                            <div class="bl_cent_categ">
                                <p class="prise">${{$item->price}}</p>
                                <a href="/{{$item->cat_alias}}/{{$item->alias}}" class="rent_text">{{$item->category}}</a>
                            </div>
                        </div>
                        <div class="text_card">

                            <a href="#">{{$item->city}},{{$item->region}}</a>
                            <p>{{$item->description}}</p>
                            <div class="about_card">
                                <p>Площадь:{{$item->area}}</p>
                                <div class="bed_shower">
                                    <p class="icon-bed">{{$item->sleep_places}}</p>
                                    <p class="icon-wash">{{$item->bed_places}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

