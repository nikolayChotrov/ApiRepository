<?php

namespace App\Http\Controllers;

use App\Repository\CountryInformationable;
use App\Repository\CountryInformationAddable;
use App\Repository\CountryInformationCheckable;
use App\Repository\CountryInformationRepository;
use App\Repository\Sanitizable;
use App\Repository\UserCreatable;
use Illuminate\Http\Request;

class RegisterCustomer extends Controller
{
    private $countryInformation;
    private $checkable;
    private $informationAddable;
    private $userCreatable;
    private $sanitizable;

    private $countryData;
    private $responseAfterTheCheck;
    private $finalResponse;


    public function __construct(CountryInformationable $countryInformation,CountryInformationCheckable $checkable,CountryInformationAddable $informationAddable, UserCreatable $userCreatable, Sanitizable $sanitizable)
    {
        $this->countryInformation = $countryInformation;
        $this->checkable = $checkable;
        $this->informationAddable = $informationAddable;
        $this->userCreatable = $userCreatable;
        $this->sanitizable = $sanitizable;
    }

    public function createCustomer(Request $request){

        $this->countryData = $this->countryInformation->getCountryData($request['country_name']); //Get the country data in object
        $this->responseAfterTheCheck = $this->checkable->checkIfDataIsFull($this->countryData );  //Get the response if data is missing
        $this->informationAddable->addInformationFromApi($this->responseAfterTheCheck,$request['country_name']); //adds the missing information if any
        $this->finalResponse = $this->sanitizable->sanitizeTheDataSoItIsTheSameAsTheDatabase($request,$this->countryData[0]['id']); // Makes the data same as database
        $this->userCreatable->createUser($this->finalResponse); //Uploads the Post data to the database

        return response()->json( $request,201);
    }
}
