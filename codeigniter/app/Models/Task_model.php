<?php namespace App\Models;

use CodeIgniter\Model;

class Tasks_model extends Model
{
    public function getPersonen(){
        $this->load->database();
        $this->personen = $this->db->table('personen');
        $this->personen->select();

        $result = $this->personen->get();
        return $result->getResultArray();
    }

    public function getSpalten(){
        $this->spalten = $this->db->table('spalten');
        $this->spalten->select();

        $result = $this->spalten->get();
        return $result->getResultArray();
    }

    public function getTasks(){
        $this->tasks = $this->db->table('tasks');
        $this->tasks->select();

        $this->tasks->orderBy('id', 'asc');
        $result = $this->tasks->get();
        return $result->getResultArray();
    }

    public function getData()
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks->select('tasks.*, personen.*, taskarten.*');

        $this->tasks->join('personen', 'tasks.personenid = personen.id');
        $this->tasks->join('taskarten', 'tasks.taskartenid = taskarten.id');

        // $this->spalten->where('Inventory.status_id', 1);

        $this->tasks->orderBy('tasks.id', 'asc');

        $result = $this->tasks->get();
        return $result->getResultArray();
    }

    public function createTasks()
    {
        $this->tasks = $this->db->table('tasks');
        $this->tasks->insert(array('personenid' => $_POST['Person'],
            'taskartenid' => 1, // TODO
            'spaltenid' => $_POST['Spalte'],
            'sortid' => 1, // TODO
            'tasks' => $_POST['BeschreibungDerTask'],
            'erstelldatum' => '2024-01-01', // TODO
            'erinnerungsdatum' => $_POST['Erinnerungsdatum'],
            'erinnerung' => $_POST['Erinnerung'],
            'notizen' => $_POST['Notiz'],
            'erledigt' => '0',
            'gelöscht' => '0',));
    }

    public function updateTasks(){
        $this->tasks = $this->db->table('tasks');
        $this->tasks->where('id', $_POST['id']);
        $this->tasks->update(array('personenid' => $_POST['Person'],
            'taskartenid' => 1, // TODO
            'spaltenid' => $_POST['Spalte'],
            'sortid' => 1, // TODO
            'tasks' => $_POST['BeschreibungDerTask'],
            'erstelldatum' => '2024-01-01', // TODO
            'erinnerungsdatum' => $_POST['Erinnerungsdatum'],
            'erinnerung' => $_POST['Erinnerung'],
            'notizen' => $_POST['Notiz'],
            'erledigt' => '0',
            'gelöscht' => '0',));

    }

    public function deleteTasks(){

        $this->tasks = $this->db->table('tasks');
        $this->tasks->where('id', $_POST['id']);
        $this->tasks->delete();
    }

    public function getTask($id = null){
        $this->tasks = $this->db->table('tasks');
        $this->tasks->select('*');

        IF ($id != NULL) {
            $this->tasks->where('id', $id);
        }

        $this->tasks->orderBy('tasks');
        $result = $this->tasks->get();

        if ($id != NULL) {
            return $result->getRowArray();
        }
        else return $result->getResultArray();
    }
}