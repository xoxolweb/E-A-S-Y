@extends('layouts.admin')


@section('content')
    <style>
        input{
            margin:3px;
            padding:2px;
        }
        label{
            display: block;
            width:100% !important;
        }
        select{
            width:100% !important
        }
    </style>
    <form action="{{route('adminStoreSpec')}}" method="post" enctype="multipart/form-data" class="container">
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
        <label for="name">Имя</label></label><input type="text" id="name" name="name">
        <label for="email">Е-мэйл</label></label><input type="email" id="email" name="email">
        <label for="mob">тел:моб.</label></label><input type="text" id="mob" name="mob">
        <label for="of_tel">тел:оффис</label></label><input type="of_tel" id="of_tel" name="of_tel">
        <label for="photo">Фото</label></label><input type="file" accept="image/*" id="photo" name="photo">
                    {{csrf_field()}}
            </div>
        <button id="store" type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection