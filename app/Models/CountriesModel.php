<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountriesModel extends Model
{
    protected $table = "countries";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'ido_2',
        'iso_3',
        'name',
        'capital',
        'area',
        'flag',
        'currency_code',
        'currency_simbol'
    ];
}
