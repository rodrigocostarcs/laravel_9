<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
       
        #também poderia ser compact('users')
        return view('users.index',[
            'users' => $users
        ]);
    }

    public function show($id)
    {
        #$user = User::find($id);
        
        $user = User::where('id','=',$id)->first();
        
        if(!$user){
            return redirect()->route('users.index');
        }else{
            return view('users.show',compact('user'));
        }
    }
}
