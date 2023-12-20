<?php
require_once 'app/helpers/LoginChecker.php';

class Admin_Render
{
  private $Renderer;
  private $LoginChecker;

  public function __construct()
  {
    $this->Renderer = new Renderer();
    $this->LoginChecker = new LoginChecker();
  }

  public function form()
  {
    session_start();

    $admin = $_SESSION["adminId"] ?? null;

    if($admin) {
      header('Location: /admin/dashboard');
      exit;
    }

    echo $this->Renderer->render("admin/Layout.php", [
      "admin" => $admin,
      "content" => $this->Renderer->render("admin/pages/Login.php", [])
    ]);
  }
  public function dashboard()
  {

    $admin = $this->LoginChecker->checkUserIsLoggedInOrRedirect("adminId", "/admin");

    echo $this->Renderer->render("admin/Layout.php", [
      "admin" => $admin,
      "content" => $this->Renderer->render("admin/pages/Dashboard.php", [
        "admin" => $admin,

      ])
    ]);
  }
}
