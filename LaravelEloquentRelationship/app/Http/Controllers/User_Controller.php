<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class User_Controller extends Controller
{
    public function index(){
        $users = User::with('userFunction')->get();
        return response()->json($users);
    }

    public function store(Request $request){
        $newReq = new User();
        $newReq -> first_name = $request->input("first_name");
        $newReq -> last_name = $request->input("last_name");
        $newReq -> contact_num = $request->input("contact_num");
        $newReq -> save();
        return 'Sheshh';
    }
}
