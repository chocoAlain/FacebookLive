<?php

namespace App\Http\Controllers;

use App\Models\contactModel;
use Illuminate\Http\Request;

class Contact_Controller extends Controller
{
    public function index(){
        $show = contactModel::all()->toArray();
        return response()->json($show);
    }

    public function store(Request $request){
        $newReq = new contactModel();
        $newReq -> prov = $request->input("prov");
        $newReq -> cellphone_number = $request->input("cpNum");
        $newReq -> save();
        return 'Sheshh';
    }
}
