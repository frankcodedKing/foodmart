<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //l0gin functi0nality
    //check passw0rd and redirect -> pr0duct page
    function login(Request $req)
    {
    // gets first data
       $user = User::where(['email'=>$req->email])->first();
       
       if(!$user || !Hash::check($req->password,$user->password))
       {
        return redirect("/login")->with('errmsg','Username or password not correct ');
         

       }
       else{
           //set session
           $req->session()->put('user',$user);
           return redirect("/products");
       }
    }

    function signup(Request $req)
    {
    $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('login');
    }

}
