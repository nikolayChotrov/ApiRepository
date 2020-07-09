<?php

namespace App\Http\Controllers;

use App\Models\CustomersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetCustomerDetail extends Controller
{
    public function listCustomer($id){
        $response = CustomersModel::where('customers.id', $id)
            ->join('countries', 'countries.id', '=', 'customers.country_id')
            ->first();
        if (is_null($response))
        {
            return response()->json(['message'=>'error']);
        }

        return $response;
    }
}
