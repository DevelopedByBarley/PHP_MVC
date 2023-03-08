<?php
require '../app/models/Home_Model.php';

class HomeHandler
{
    private $homeModel;
    private $mailer;
    private $XLSX;
    public function __construct()
    {
        $this->homeModel = new HomeModel();
        $this->mailer = new Mailer();
        $this->XLSX= new XLSX();

    }

    public function getUsers()
    {
        $tests = $this->homeModel->Test();
        $renderer = new Renderer(); 


        echo $renderer->render("Layout.php",[
            "tests" => $tests
        ]);
    }

    public function addUser() {
        $userName = $_POST["userName"];
        $this->homeModel->addUser($userName);
    
        $this->mailer->send("arpadsz@max.hu", "Hello from oop!");

    }
}
