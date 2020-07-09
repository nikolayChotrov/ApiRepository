<?php


namespace App\Repository;


use App\Models\CountriesModel;
use App\Models\CustomersModel;

class CountryInformationAddRepository implements CountryInformationAddable
{
    private $apiConnectable;
    public function __construct(ApiConetable $apiConetable)
    {
        $this->apiConnectable = $apiConetable;
    }

    public function addInformationFromApi($response, $countrie)
    {
       if ($response === true)
       {
           $data = $this->apiConnectable->getRequestBackFromApi($countrie);
           $dbUpload = CountriesModel::where('name', $countrie)->update($data);
       }
    }
}
