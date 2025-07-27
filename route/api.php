<?php

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

$dispatcher = simpleDispatcher(function(RouteCollector $r) {
    $r->addRoute('GET', '/tasks', 'getTasks');
    $r->addRoute('POST', '/tasks', 'createTask');
    $r->addRoute('DELETE', '/tasks/{id}', 'deleteTask');
});