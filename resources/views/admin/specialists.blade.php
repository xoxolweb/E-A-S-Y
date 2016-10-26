@extends('layouts.admin')


@section('content')
    <div class="specs">

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Имя</th><th>Е-майл</th><th>Телефоны</th><th>Фото</th>
            </tr>
            </thead>
            <tbody>
            @foreach($specs as $specialist)
                <tr>
                    <td>{{$specialist->name}}</td><td>{{$specialist->email}}</td><td>{{$specialist->phone}}</td><td>{{$specialist->photo}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $specs->render() !!}
    </div>

@endsection