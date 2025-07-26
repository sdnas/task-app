<?php

namespace App\Http\Controllers;

use App\Models\Task;

require_once '../config/database.php';

class TaskController {
    private $task;

    public function __construct($db) {
        $this->task = new Task($db);
    }

    public function getTasks() {
        return json_encode($this->task->get());
    }

    public function createTask() {
        $data = json_decode(file_get_contents("php://input"), true);
        return json_encode(["success" => $this->task->add($data['title'])]);
    }

    public function deleteTask($id) {
        return json_encode(["success" => $this->task->delete($id)]);
    }
}