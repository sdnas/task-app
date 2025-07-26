<?php

namespace App\Models;

class Task
{
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function get() {
        return $this->db->select("tasks", ["id", "title"]);
    }
    
    public function add($title) {
        return $this->db->insert("tasks", ["title" => $title]);
    }

    public function delete($id) {
        return $this->db->delete("tasks", ["id" => $id]);
    }
}