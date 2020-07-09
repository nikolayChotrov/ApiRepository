<?php


namespace App\Repository;


class CountryInformationCheckingRepository implements CountryInformationCheckable
{
    private $response = false;

    public function checkIfDataIsFull(object $data): bool
    {

        foreach ($data as $item) {
            if ($item['iso_3'] === null || $item['iso_3'] === '' || $item['capital'] === null || $item['capital'] === '' || $item['area'] === null || $item['area'] === '' || $item['flag'] === null || $item['flag'] === '' || $item['currency_code'] === null || $item['currency_code'] === '' )
            {
                echo $item['iso_3'];
                $this->response = true;
            }

        }

        return $this->response;
    }
}
