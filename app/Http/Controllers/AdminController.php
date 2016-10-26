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



       $bids = Bid::paginate(1);
       $specs = Specialist::paginate(3);

       return view('admin.panel')->with(compact('bids','specs'));
    }

    public function add_new(){

        $spec = new Specialist();
        $list = $spec::all();

        return view('admin.add_new')->with(compact('list'));
    }
    public function add_spec(){


        return view('admin.add_spec');
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
    public function store_obj(Request $request)    {

        $this->validate($request,[
            'title' => 'required|unique:bids',
            'city' => 'required',
            'region' => 'required',
            'category' => 'required',
            'type' =>'required',
            'specialist' => 'reqired',
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
    public function store_spec(Request $request)    {

        $this->validate($request,[
            'name' => 'required|unique:specialists',
        ]);

        if(empty($request->email))
            $request->email = 'e-a-s-y@i.ua';
        if(empty($request->mob))
            $request->mob = '(093) 273-93-59';
        if(empty($request->of_tel))
            $request->of_tel = ' 0 800 759 359';


        $fs = new Filesystem();
        $alias = str_slug($request->name);
        $path = public_path()."/uploads/employees/{$alias}/";
        $make_result = $fs->makeDirectory($path,0777,true,true);
        if($make_result) {
            $image =  "/uploads/employees/{$alias}/{$request->photo->getClientOriginalName()}";
            $request->photo->move($path, $request->photo->getClientOriginalName());

        }else{
            $image = '/public/img/employees.jpg';
        }


        $info = $request->all();
        $spec = new Specialist();



        $phone = new \stdClass();
        $phone->mob = $request->mob;
        $phone->office = $request->of_tel;

        $info['phone'] = json_encode($phone);
        $info['photo'] = json_encode($image);
        $spec->fill($info);
        $spec->save();


        return redirect()->route('adminAddSpec')->with('message','saved');

    }



}
