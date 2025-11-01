<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../src/router.php';
require_once __DIR__ . '/../src/Controlles/UserControlles.php';

$router = new Router();
$database = Database::connection();
$userController = new UserController($database);

$router->add('GET', '/api/v1/users', [$userController, 'index']);
$router->add('GET', '/api/v1/users/{id}', [$userController, 'show']);

$router->run();
?>
