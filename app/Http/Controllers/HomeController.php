<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function storeTodo(Request $request){
    $data = $request->all();
//        dd($data['data'][0]["doc"]);
      foreach ($data["data"] as $d){
//          dd($d["doc"]["_id"]);
          $save = Todo::updateOrCreate(
              ["_id"=> $d["doc"]["_id"]],
              ["from"=>$d["doc"]["from"],
              "to"=>$d["doc"]["to"],
              "distance"=>$d["doc"]["distance"],
          ]);
      }
        return $save;
    }

    public function ShowTodo(){
        $all = Todo::all();
//        dd($all->last());
        return response()->json($all->last());
    }
}
