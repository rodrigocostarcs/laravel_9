<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
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

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {   
        #$request->all()
        #$request->only(['name', 'email','password'])
        
    //    $user = new User;
    //    $user->name = $request->name;
    //    $user->email = $request->email;
    //    $user->senha = bcrypt($request->password);
    //    $user->save();

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);
        #return redirect()->route('users.show',['id' => $user->id]);
        return redirect()->route('users.index');

    }
}
