<?php

namespace App\Controllers;

class Main extends BaseController{
    public function Startseite(): string{

        return view('templates/Startseite');
    }
    public function Spalten(): string{

        return view('templates/Spalten');
    }
    public function Formular(): string{

        return view('templates/Formular');
    }
    public function Board(): string{

        return view('templates/Board');


    }

    public function Abc(): string{
        return view('templates/Abc');
    }


}