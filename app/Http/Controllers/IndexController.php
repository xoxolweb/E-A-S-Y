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

        return view('site.main')->with(compact('items'));
    }

    public function category($category){


        return view('site.category')->with($category);
    }

    public function detail($category,$id){


        return view('site.detail')->with(compact('category','id'));
    }
}
