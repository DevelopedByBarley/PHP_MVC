<?php

require_once 'app/services/LanguageService.php';

class Home_Render
{
  private $Renderer;
  private $LanguageService;

  public function __construct()
  {
    $this->Renderer = new Renderer();
    $this->LanguageService = new LanguageService();

  }

  public function home()
  {
    $this->LanguageService->language();
    
    echo $this->Renderer->render("public/Layout.php", [
      "content" => $this->Renderer->render("public/pages/Main.php", [])
    ]);
  }

  public function error()
  {

    echo $this->Renderer->render("public/Layout.php", [
      "content" => $this->Renderer->render("public/pages/404.php", [])
    ]);
  }
}
