<?php

namespace App\Controllers;

class Home extends BaseController{

    /*public function getTest()
    {
        echo view('layouts/header');
        echo view('templates/Board');
        echo view('layouts/footer');


    }

*/
    public function index()
    {

    }
    public function Test(): string{

        return view('layouts/header');
        return view('templates/Board');
        return view('layouts/footer');
    }

}