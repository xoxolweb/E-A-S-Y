<?php

namespace App\Http\Controllers;


use App\Bid;
use App\Specialist;
use App\Http\Requests;

class BuyController extends Controller
{
    protected $category = 'buy';
    protected $cat_name = 'Купить';
    protected $items;
    protected $spec;

    public function __construct()
    {
        $this->spec = Specialist::all();
        $this->items = Bid::where('category','LIKE',$this->cat_name)->get();
    }

    public function index(){

        foreach ($this->items as $item) {
            $cities[] = $item->city;
            $conditions[] = $item->condition;
            $types[] = $item->type;
            $room_numbers[] = $item->room_number;
            $sleep_places[] = $item->sleep_places;
            $item->cat_alias = $this->category;
            switch ($item->type){
                case 'Дома' : $item->type_alias = 'houses';
                    break;
                case 'Квартиры' : $item->type_alias = 'flats';
                    break;
                case 'Земельные Участки' : $item->type_alias = 'lands';
                    break;
                case 'Оффисы' :  $item->type_alias = 'offices';
                    break;
            }
        }

        $cities = array_unique($cities);
        $types = array_unique($types);
        $conditions = array_unique($conditions);
        $room_numbers = array_unique($room_numbers);
        $sleep_places = array_unique($sleep_places);

        $items = $this->items;
        $category = $this->category;
        $spec = $this->spec;
        $cat_name = $this->cat_name;


        return view('site.category')->with(compact('items','cat_name','cities',
            'types','conditions','room_numbers','sleep_places','category','spec'
        ));
    }
    public function show_houses(){

        $items = array();
        $type = 'Дома';
        foreach($this->items as $item){
            if ($item->type == $type){
                $item->cat_alias = $this->category;
                $item->type_alias = 'houses';
                $items[] = $item;
            }
        }
        return view('site.subcategory')->with(compact('items','type'));
    }
    public function show_flats(){

        $items = array();
        $type = 'Квартиры';
        foreach($this->items as $item){
            if ($item->type == $type){
                $item->cat_alias = $this->category;
                $item->type_alias = 'flats';
                $items[] = $item;
            }
        }
        return view('site.subcategory')->with(compact('items','type'));
    }
    public function show_offices(){

        $items = array();
        $type = 'Оффисы';
        foreach($this->items as $item){
            if ($item->type == $type){
                $item->cat_alias = $this->category;
                $item->type_alias = 'offices';
                $items[] = $item;
            }
        }
        return view('site.subcategory')->with(compact('items','type'));
    }
    public function show_lands(){

        $items = array();
        $type = 'Земельные Участки';
        foreach($this->items as $item){
            if ($item->type == $type){
                $item->cat_alias = $this->category;
                $item->type_alias = 'lands';
                $items[] = $item;
            }
        }
        return view('site.subcategory')->with(compact('items','type'));
    }
}
