<?php

require_once 'app/renders/Admin_Render.php';
require_once 'app/controllers/Admin_Controller.php';
require_once 'app/services/AuthService.php';

$r->addRoute('GET', '/admin', [Admin_Render::class, 'form']);
$r->addRoute('GET', '/admin/dashboard', [Admin_Render::class, 'dashboard']);
$r->addRoute('GET', '/admin/logout', [Admin_Controller::class, 'logout']);
$r->addRoute('POST', '/admin/register', [Admin_Controller::class, 'registerAdmin']);
$r->addRoute('POST', '/admin/login', [Admin_Controller::class, 'loginAdmin']);
