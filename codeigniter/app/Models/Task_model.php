<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model {

    public function getTasksByBoard($boardId) {
        $this->db->select('tasks.*, persons.Personenname, taskarten.Taskartenname, spalten.Spaltenname');
        $this->db->from('tasks');
        $this->db->join('persons', 'persons.id = tasks.Personenid');
        $this->db->join('taskarten', 'taskarten.id = tasks.Taskartenid');
        $this->db->join('spalten', 'spalten.id = tasks.Spaltenid');
        $this->db->where('tasks.Spaltenid', $boardId);
        $this->db->order_by('tasks.tasks', 'ASC');

        $query = $this->db->get();
        return $query->result_array();
    }

}
?>
