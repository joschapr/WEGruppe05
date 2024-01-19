<?php

namespace App\Models;

use CodeIgniter\Model;

class Test_model extends Model
{
    public function testDatabaseConnection()
    {
        $query = $this->db->query('SELECT NOW() as datetime');
        return $query->getRowArray();
    }
}

