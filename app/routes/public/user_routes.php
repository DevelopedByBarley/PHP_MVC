<?php

require_once 'app/renders/User_Render.php';
require_once 'app/controllers/User_Controller.php';

$r->addRoute('GET', '/login', [User_Render::class, 'login']);
$r->addRoute('GET', '/register', [User_Render::class, 'register']);


$r->addRoute('POST', '/register', [User_Controller::class, 'register']);
$r->addRoute('POST', '/login', [User_Controller::class, 'login']);
