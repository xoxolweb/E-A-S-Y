@extends('layouts.admin')

@section('content')

<style>
    label{
        display: block;
    }
</style>

<form action="{{route('adminStore')}}" method="post" class="container">
        <div class="row">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-4">
                <label for="title">Title *</label> <input   id="title" type="text" name="title">
                <label for="alias">Alias </label> <input  id="alias" type="text" name="alias">
                <label for="city">City *</label> <input id="city" type="text" name="city">
                <label for="region">Region *</label> <input   id="region" type="text" name="region">
            </div>
            <div class="col-md-4">
                <label for="type">Category</label>
                    <select id="type" name="type">

                        <option>Buy</option>
                        <option>Sell</option>
                        <option>Rent</option>
                        <option>Give Rent</option>
                    </select>
                <label for="category">Category</label>
                    <select id="category" name="category">
                        <option>Flats</option>
                        <option>Houses</option>
                        <option>Lands</option>
                        <option>Offices</option>
                    </select>
                <label for="condition">Condition</label>
                    <select id="condition" name="condition">
                        <option>Best</option>
                        <option>Good</option>
                        <option>Normal</option>
                        <option>Bad</option>
                    </select>
                <label for="price">Price *</label> <input   id="price" type="text" name="price">
                <label for="area">Area *</label> <input   id="area" type="text" name="area">
                <label for="room_number">Number of rooms *</label> <input   id="room_number" type="text" name="room_number">
                <label for="sleep_places">Number of sleeping places*</label> <input   id="sleep_places" type="text" name="sleep_places">
                <label for="bath_places">Number of bath places*</label> <input   id="bath_places" type="text" name="bath_places">
                <label for="images">Upload Photos</label> <input   id="images" type="file" name="images">
            </div>
            <div class="col-md-3">
                <label for="description">Description</label>
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
     <button id="send" type = "submit" class="btn btn-primary">Send</button>

 </form>
{{--
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
--}}
 {{--<script src="../../../public/js/admin-script.js"></script>--}}


@endsection