<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Photo;
use App\Post;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view("admin.users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all = Role::all();
        return view("admin.users.create", compact("all"));
    }
    /**s
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|string
     */
    public function store(UserRequest $request)
    {

         if($request->hasFile("image")){
             $filename = $request->file("image")->getClientOriginalName();
             $filesave = $request->file("image")->storeAs("public/images", $filename);
             $image = Photo::create(["name"=>$filename]);
         }else{
             $photo_id = "";
         }
         $photo_id = $image->id;
         $user = User::create(["name"=>$request->get("name"), "is_active"=>$request->get("is_active"), "email"=>$request->get("email"), "role_id"=>$request->get("role"), "photo_id"=>$photo_id,"password"=>bcrypt($request->get("password"))]);
        return view("admin.users.index")->with("message", "New User successfully added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::findorFail($id);
        $role = Role::all();
        return view("admin.users.edit", compact("user","role"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "role"=>"required",
            "is_active"=>"required"
        ]);
       $users = new User;
       $user = $users->findorFail($id);
       $user->name = $request->get("name");
       $user->email = $request->get("email");
       $user->role_id = $request->get("role");
       $user->is_active = $request->get("is_active");
        if(trim($request->get("password"))!=""){
            $password = bcrypt($request->get("password"));
            $user->password = $password;
       }


       if($request->hasFile("image")){
           $photo = Photo::findorFail($user->id);
           $name  = $request->file("image")->getClientOriginalName();
           $move = $request->file("image")->storeAs("public/images", $name);
           $photo->name=$name;
           $photo->save();
           $user->photo_id = $photo->id;
       }
        $user->save();
       return back()->with("message", "Successfully deleted");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::findorFail($id)->posts;
      foreach ($user as $us){
          $us->delete();
      }

    //  $userimg = unlink(public_path() . "/" .$user->photos->name );
        return back()->with(["message"=>"Successfully deleted"]);
    }
}
