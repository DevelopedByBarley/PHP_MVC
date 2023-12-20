<?php

  require_once 'app/renders/Admin_Render.php';
  require_once 'app/controllers/Admin_Controller.php';

  $r->addRoute('GET', '/admin', [Admin_Render::class, 'form']);

  
  $r->addRoute('POST', '/admin/login', [Admin_Controller::class, 'loginAdmin']);
