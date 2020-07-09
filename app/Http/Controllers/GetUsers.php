<?php

namespace App\Http\Controllers;

use App\Models\CustomersModel;
use Illuminate\Http\Request;

class GetUsers extends Controller
{
    public function listAllUsers(){
        $country = CustomersModel::get();
        if (is_null($country))
        {
            return response()->json(['message'=>'error']);
        }
//        return response()->json(CountriesModel::get(),200);
        return response()->json($country,200);
    }

    public function listUserBuEmail($email){
        $data = CustomersModel::where('email', $email)->get();
        if (is_null($data))
        {
            return response()->json(['message'=>'error']);
        }
        return response()->json($data,200);
    }
    public function listUserBuCity($city){
        $data = CustomersModel::where('city', $city)->get();
        if (is_null($data))
        {
            return response()->json(['message'=>'error']);
        }
        return response()->json($data,200);
    }
    public function listUserBuState($state){
        $data = CustomersModel::where('state', $state)->get();
        if (is_null($data))
        {
            return response()->json(['message'=>'error']);
        }
        return response()->json($data,200);
    }
}



