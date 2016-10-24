<?php

namespace App\Http\Controllers;

use App\Specialist;
use Illuminate\Http\Request;
use App\Bid;
use App\Http\Requests;
use View;


class IndexController extends Controller
{
    //
    public function index()
    {


        $model = new Bid();
        $spec = new Specialist();
        $items = $model::all();
        $list = $spec::all();


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
                                                'room_numbers','sleep_places','slider_objs',
                                                'list'));
    }
    public function filter(Request $filter =  null)
    {
        $model_filter = new Bid();

        if (isset($filter)) {


            $wheres = "";

            if (isset($filter->city) && $filter->city != '') $wheres .= "`city` = '{$filter->city}' and ";
            if (isset($filter->region) && $filter->region != '') $wheres .= "`region` LIKE '{$filter->region}' and ";
            if (isset($filter->condition) && $filter->condition != 'Любое') $wheres .= "`condition` = '{$filter->condition}' and ";
            if (isset($filter->type) && $filter->type != 'Любое') $wheres .= "`type` = '{$filter->type}' and ";
            if (isset($filter->room_number) && $filter->room_number != '') $wheres .= "`room_number` = '{$filter->room_number}' and ";
            if (isset($filter->sleep_places) && $filter->sleep_places != '') $wheres .= "`sleep_places` = '{$filter->sleep_places}' and ";
            if (isset($filter->price_min) && $filter->price_min != '') $wheres .= "`price` > '{$filter->price_min}' and ";
            if (isset($filter->price_max) && $filter->price_max != '') $wheres .= "`price` < '{$filter->price_max}' and ";
            if (isset($filter->area_min) && $filter->area_min != '') $wheres .= "`area` > '{$filter->area_min}' and ";
            if (isset($filter->area_max) && $filter->area_max != '') $wheres .= "`area` < '{$filter->area_max}' and ";

            $wheres = rtrim($wheres, 'and ');

            if ($wheres != '') {
                $items = $model_filter::whereRaw($wheres)->get();
            } else {
                $items = $model_filter::all();
            }
        }

        return view('site.filter_results')->with(compact('items'));
    }
    public function category($category){


        return view('site.category')->with($category);
    }

    public function detail($category,$id){


        return view('site.detail')->with(compact('category','id'));
    }
}
