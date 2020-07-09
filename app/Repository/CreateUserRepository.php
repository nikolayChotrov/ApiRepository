<?php


namespace App\Repository;


use App\Models\CustomersModel;

class CreateUserRepository implements UserCreatable
{

    public function createUser($data)
    {
        $user = CustomersModel::create($data->all());
        return response()->json($user, 201);
    }
}
