<?php
class Admin_Render
{
  private $renderer;

  public function __construct()
  {
    $this->renderer = new Renderer();
  }

  public function form()
  {
    $admin = $_SESSION["adminId"] ?? null;

    echo $this->renderer->render("admin/Layout.php", [
      "admin" => $admin,
      "content" => $this->renderer->render("admin/pages/Login.php", [])
    ]);
  }
}
