<?php


namespace App\Repository;


interface CountryInformationCheckable
{
    public function checkIfDataIsFull(object $data) : Bool;
}
