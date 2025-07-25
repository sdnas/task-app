<?php

use function FastRoute\simpleDispatcher;

require '../vendor/autoload.php';
require '../config/database.php';

$db = new Database();
$taskController = new TaskController($db->conn);

$route = require '../route/api.php';

return [
    'controller' => $taskController,
    'dispatcher' => simpleDispatcher($route)
];