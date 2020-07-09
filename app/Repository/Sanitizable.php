<?php


namespace App\Repository;


interface Sanitizable
{
    public function sanitizeTheDataSoItIsTheSameAsTheDatabase($data,$id);
}
