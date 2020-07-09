<?php


namespace App\Repository;

use App\Models\CountriesModel;

class CountryInformationRepository implements CountryInformationable
{

    public function getCountryData(String $name): object
    {
        $data = CountriesModel::where('name', $name)->get();
        return $data;
    }
}
