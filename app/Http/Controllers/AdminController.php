<?php

namespace App\Http\Controllers;

use App\Bid;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\View\View;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){


       return view('admin.panel');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * or
     * @return void
     */
    public function edit($id = null){

            $bid = new Bid();


            return view('admin.edit');
    }

    /**
     * @param Request $request
     * @return string
     */
    public function add(Request $request){

        $this->validate($request,[
            'title' => 'required|unique:bids',
            'alias' => 'required',
            'city' => 'required',
            'region' => 'required',
            'category' => 'required',
            'price' => 'required|digits_between:1,10',
            'room_number' => 'required|digits_between:1,10',
            'sleep_places' => 'required|digits_between:1,10',
            'bath_places' => 'required|digits_between:1,10',
            'description' => 'required',
            'condition' => 'required',

        ]);


        $bid = new Bid();
        $info = $request->all();


        $bid->fill($info);
        $bid->autor = 'admin';
        $bid->save();


        return 'ok';
    }





}
