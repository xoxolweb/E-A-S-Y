@extends('layouts.admin')


@section('content')
    <div class="objs">

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Заголовок</th><th>Район</th><th>Кол. комнат</th><th>Описание</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bids as $bid)
                <tr>
                    <td>{{$bid->title}}</td><td>{{$bid->region}}</td><td>{{$bid->room_number}}</td><td>{{$bid->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $bids->render() !!}
    </div>

@endsection