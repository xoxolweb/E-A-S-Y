@extends('layouts.admin')

@section('content')

   @foreach($bid as $item)

       {{ dump($item) }}

     {{--  <span>
         <h3><b>{{ $item->title}}</b></h3>
         <hr>
         <p>{{ $item->description }}</p>
         <hr>
       </span>--}}
   @endforeach


@endsection