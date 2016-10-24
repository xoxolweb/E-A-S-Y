@extends('layouts.admin')

@section('content')

<style>
    label{
        display: block;
        width:100% !important;
    }
    select{
        width:100% !important
    }
</style>

<form action="{{route('adminStore')}}" method="post" enctype="multipart/form-data" class="container">
        <div class="row">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @elseif(session('message'))
                <div class="alert alert-success">
                    <ul>

                            <li>{{ session('message') }}</li>

                    </ul>
                </div>
            @endif
            <div class="col-md-4">
                <label for="title">Заголовок</label> <input   id="title" type="text" name="title">
                <label for="city">Город</label> <input id="city" type="text" name="city">
                <label for="region">Расположение</label> <input   id="region" type="text" name="region">
                <label for="type">Специалист</label>
                <select id="spec" name="spec">
                    @foreach($list as $spec)
                    <option value="{{$spec->id}}">{{$spec->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="type">Тип недвижимости</label>
                    <select id="type" name="type">
                        <option>Купить</option>
                        <option>Продать</option>
                        <option>Арендовать</option>
                        <option>Сдать в Аренду</option>
                    </select>
                <label for="category">Категория</label>
                    <select id="category" name="category">
                        <option>Квартиры</option>
                        <option>Дома</option>
                        <option>Земельные участки</option>
                        <option>Оффисы</option>
                    </select>
                <label for="condition">Состояние</label>
                    <select id="condition" name="condition">
                        <option>Отличное</option>
                        <option>Хорошее</option>
                        <option>Нормальное</option>
                        <option>Плохое</option>
                    </select>
                <label for="price">Цена</label> <input   id="price" type="text" name="price">
                <label for="area">Площадь</label> <input   id="area" type="text" name="area">
                <label for="room_number">Количество комнат</label> <input   id="room_number" type="text" name="room_number">
                <label for="sleep_places">Количество спальных мест</label> <input   id="sleep_places" type="text" name="sleep_places">
                <label for="bath_places">Количество ванных</label> <input   id="bath_places" type="text" name="bath_places">
                <label for="images">Фото</label> <input   id="images" type="file" name="bigImage"  accept="image/*">
                {{--<label for="images">Upload Photos (380*246)</label> <input   id="images" type="file" name="images" multiple accept="image/*">--}}
            </div>
            <div class="col-md-3">
                <label for="description">Описание</label>
                <textarea rows="5"  cols="40" id="description" name="description"></textarea>
                <hr>
                <label for="other">Additional information</label>
                <textarea name="other" id="other" cols="40" rows="5"></textarea>
                <hr>
                <label for="keywords">Keywords</label>
                <input type="text" id="keywords" name="keywords">
            </div>
            {{csrf_field()}}
        </div>
     <button id="send" type = "submit" class="btn btn-primary">Сохранить</button>

 </form>


@endsection