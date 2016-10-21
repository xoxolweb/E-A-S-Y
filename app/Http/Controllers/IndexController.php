<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bid;
use App\Http\Requests;



class IndexController extends Controller
{
    //
    public function index(){

        $model = new Bid();
        $items = $model::all();


        $avg_price = $items->average('price');
        $slider_objs = $model::where('price','>',$avg_price)->get();



        foreach ($items as $item) {
            $cities[] = $item->city;
            $conditions[] = $item->condition;
            $types[] = $item->type;
            $room_numbers[] = $item->room_number;
            $sleep_places[] = $item->sleep_places;
        }

        $cities = array_unique($cities);
        $types = array_unique($types);
        $conditions = array_unique($conditions);
        $room_numbers = array_unique($room_numbers);
        $sleep_places = array_unique($sleep_places);

        return view('site.main')->with(compact('items','cities','types','conditions',
                                                'room_numbers','sleep_places','slider_objs'));
    }

    public function category($category){


        return view('site.category')->with($category);
    }

    public function detail($category,$id){


        return view('site.detail')->with(compact('category','id'));
    }
}
