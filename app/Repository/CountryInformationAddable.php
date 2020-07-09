<?php


namespace App\Repository;


interface CountryInformationAddable
{
    public function addInformationFromApi($response,$countrie);
}
