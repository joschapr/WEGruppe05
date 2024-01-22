<?php namespace App\Controllers;
use CodeIgniter\Controller;
class First extends BaseController {
    public function index()
    {
        // Load the database
        $db = db_connect();

        // Check if the connection is successful
        if ($db->initialize())
        {
            echo 'Database connection successful!';
        }
        else
        {
            echo 'Database connection failed!';
        }
    }


    public function table_stat()
    {
        $data['title'] = '$title';
        echo view('templates/header');
        echo view('pages/table_stat', $data);
        echo view('templates/footer');
    }

}
