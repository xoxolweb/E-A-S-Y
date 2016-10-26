@extends ('layouts.app')
@section('content')
<div class="container">
<h4>{{$type}}</h4>
    <div class="category_card">
       @include('site.filter_results',['items'=>$items])
    </div>
</div>
@endsection
