<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController {

    public function index() {
        $userModel = new UserModel();
        // Add operation
        $userModel->insert_data(array(
            "name" => "Sanjay",
            "email" => "sanjay@gmail.com",
            "phone_no" => "1234567890",));

        // Update Operation
        $userModel->update_data(1, array(
            "name" => "Sanjay",
            "email" => "sanjay@gmail.com",
            "phone_no" => "1234567890",
        ));

        //...        
    }

}
