<?php
require_once 'app/helpers/LoginChecker.php';

class User_Render
{
  private $Renderer;
  private $LoginChecker;

  public function __construct()
  {
    $this->Renderer = new Renderer();
    $this->LoginChecker = new LoginChecker();
  }

  public function login()
  {
    session_start();

    echo $this->Renderer->render("admin/Layout.php", [
      "content" => $this->Renderer->render("public/pages/user/Login.php", [])
    ]);
  }
  public function register()
  {


    echo $this->Renderer->render("admin/Layout.php", [
      "content" => $this->Renderer->render("public/pages/user/Register.php", [
      ])
    ]);
  }
}
