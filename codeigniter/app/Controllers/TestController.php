<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Test_model;

class TestController extends Controller
{
    public function index()
    {
        $testModel = new Test_model();
        $data = $testModel->testDatabaseConnection();

        print_r($data);
    }

    public function Test(){
        return view('templates/test');
    }
}


// Eine Testdatei, lokale addresse lautet 136.199.28.231