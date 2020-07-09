<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomersModel extends Model
{
    protected $table = "customers";

    protected $fillable = [
        'email',
        'password',
        'name',
        'country_id',
        'city',
        'state',
        'zip',
        'address',
        'phone',
        'company_name',
        'created_at',
        'updated_at'
    ];
}
