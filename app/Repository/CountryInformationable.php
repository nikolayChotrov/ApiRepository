<?php


namespace App\Repository;


interface CountryInformationable
{
    public function getCountryData(String $name) : object ;
}
