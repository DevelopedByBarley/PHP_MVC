<?php

class Home_Render
{
  public function home()
  {
    $renderer = new Renderer();

    echo $renderer->render("public/Layout.php", [
      "content" => $renderer->render("public/pages/Main.php", [])
    ]);
  }
  public function error()
  {
    $renderer = new Renderer();

    echo $renderer->render("public/Layout.php", [
      "content" => $renderer->render("public/pages/404.php", [])
    ]);
  }
}
