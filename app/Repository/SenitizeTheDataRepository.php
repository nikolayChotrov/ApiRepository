<?php


namespace App\Repository;


class SenitizeTheDataRepository implements Sanitizable
{

    public function sanitizeTheDataSoItIsTheSameAsTheDatabase($data,$id)
    {
        unset($data['country_name']);
        $data['country_id'] = $id;
        return $data;
    }
}
