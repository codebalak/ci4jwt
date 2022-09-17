<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\User;


class Users extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $user = new User();
        $userlist = $user->findAll();
        return $this->respond($userlist);
    }

    public function show($id='')
    {
        $user  = new User();

        $data = $user->find($id);

        if (empty($data)) {
            
            $responseArray=
            [
                'status'=>'404',
                'Message'=>"User not found"
            ];
            return $this->respond($responseArray);
        }

        return $this->respond($data);
    }

     public function edit($id='')
    {
        $user  = new User();

        $data = $user->find($id);

        if (empty($data)) {
            
            $responseArray=
            [
                'status'=>'404',
                'Message'=>"User not found"
            ];
            return $this->respond($responseArray);
        }

        return $this->respond($data);
    }
}
