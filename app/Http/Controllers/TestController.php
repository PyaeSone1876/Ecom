<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    //  function list($id=null)
    // {
    //     return $id?Skill::find($id):Skill::all();
    // }


    // function add(Request $req)
    // {
    //     return ["Result"=>"Data has been saved"];
    //     $skill= new Skill;
    //     $skill->name=$req->name;
    //     $skill->percent=$req->percent;
    //     $result=$skill->save();
    //     if ($result) {
    //         return ["Result"=>"Data has been saved"];
    //     }else{
    //         return ["Result"=>"Opertaion fail"];
    //     }
    //     }     


        public function login(Request $req)
        {
            if(Auth::attempt($req->all())) {
                return response()->json([
                    'message' => 'successfully login'
                ]);
            } else {
                return response()->json([
                    'message' => 'fail login'
                ]);
            }
            
        }

       
}
