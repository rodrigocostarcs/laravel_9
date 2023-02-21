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

    public function edit($id)
    {
        $user = User::find($id);
        
        if($user){
           return view('users.edit',compact('user'));
        }else{
            return redirect()->route('users.index');
        }
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        $user = User::find($id);
        $data = $request->only(['name','email']);

        if($request->password)
            $data['password'] = bcrypt(($request->password));

        if($user){
           $user->update($data);
           return redirect()->route('users.index');
        }else{
            return redirect()->route('users.index');
        }
    }

    public function delete($id)
    {
         $user = User::find($id);
       
         if($user){
            $user->delete();
            return redirect()->route('users.index');
         }else{
             return redirect()->route('users.index');
         }
     }

}
