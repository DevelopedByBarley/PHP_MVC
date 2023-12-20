<?php

  require_once 'app/renders/Home_Render.php';
  require_once 'app/controllers/Home_Controller.php';

  $r->addRoute('GET', '/', [Home_Render::class, 'home']);
  $r->addRoute('GET', '/404', [Home_Render::class, 'error']);
