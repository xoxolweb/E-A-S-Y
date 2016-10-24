<?php

namespace App\Http\Controllers;

use App\Bid;
use App\Specialist;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;


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

    public function add_new(){
        $spec = new Specialist();
        $list = $spec::all();

        return view('admin.add_new')->with(compact('list'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * or
     * @return void
     */
    public function edit($id = null){

            $bid = new Bid();


            return view('admin.edit')->with(compact('bid'));
    }

    /**
     * @param Request $request
     * @return string
     */
    public function add(Request $request)    {

        $this->validate($request,[
            'title' => 'required|unique:bids',
            'city' => 'required',
            'region' => 'required',
            'category' => 'required',
            'type' =>'required',
            'price' => 'required|digits_between:1,10',
            'area' => 'required|digits_between:1,10',
            'room_number' => 'required|digits_between:1,10',
            'sleep_places' => 'required|digits_between:1,10',
            'bath_places' => 'required|digits_between:1,10',
            'description' => 'required',
            'condition' => 'required',

        ]);

        $fs = new Filesystem();
        $alias = str_slug($request->title);
        $path = public_path()."/uploads/{$alias}/";
        $make_result = $fs->makeDirectory($path,0777,true,true);
        if($make_result) {
            $images =  "/uploads/{$alias}/{$request->bigImage->getClientOriginalName()}";
            $request->bigImage->move($path, $request->bigImage->getClientOriginalName());

        }else{
            $images = null;
        }
        $info = $request->all();

        $bid = new Bid();

        $bid->fill($info);
        $bid->autor = 'admin';
        $bid->alias = $alias;
        $bid->images = json_encode($images);
        $bid->save();


        return redirect()->route('adminAddNew')->with('message','saved');

    }



}
