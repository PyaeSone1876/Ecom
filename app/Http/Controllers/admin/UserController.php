<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
         return view('admin.user.UserIndex', compact('users'));
     }

     public function edit($id){
        $users=User::find($id);
        return view('admin.user.UserEdit', compact('users'));
     }

     public function update(Request $request,$id ){
        $users=User::find($id);
        $users->update([
            'name'=> $request->name,
            'email'=> $request->email,
        ]);
        return redirect('/users');
     }
     
     public function delete($id){
        $users=User::find($id);
        $users->delete();
        return redirect('/users');
     }

     public function show(){
      return view ('auth/register');
     }
}
