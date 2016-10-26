@extends('layouts.admin')

@section('content')
   {{-- <script async src="//jsfiddle.net/YJG79/16/embed/js,html,css,result/dark/"></script>--}}
    <button id="objs" class="btn btn-block">Объекты</button>
    <div class="objs">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                 <th>Title</th><th>Region</th><th>Description</th><th>Room number</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($bids as $bid)
                            <tr>
                                <td>{{$bid->title}}</td><td>{{$bid->region}}</td><td>{{$bid->description}}</td><td>{{$bid->room_number}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $bids->render() !!}
    </div>
    <button id="specs" class="btn btn-block">Специалисты</button>
    <div class="specs">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th><th>E-mail</th><th>Phone</th><th>photo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($specs as $spec)
                            <tr>
                                <td>{{$spec->name}}</td><td>{{$spec->email}}</td><td>{{$spec->phone}}</td><td>{{$spec->photo}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $specs->render() !!}
    </div>
@endsection