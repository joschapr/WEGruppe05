<?php

namespace App\Controllers;
use App\Models\Tasks_model;
class Home extends BaseController
{
    public function index()
    {
        // Load the database
        $db = db_connect();

        // Check if the connection is successful
        if ($db->connect()) {
            echo 'Database connection successful!';
        } else {
            echo 'Database connection failed!';
        }
    }
}
