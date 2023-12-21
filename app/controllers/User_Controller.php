<?php
require_once 'app/helpers/LoginChecker.php';
require_once 'app/models/User_Model.php';

class User_Controller
{
    private $LoginChecker;
    private $UserModel;

    public function __construct()
    {
        $this->LoginChecker = new LoginChecker();
        $this->UserModel = new User_Model();
    }

    public function login() {
        $this->UserModel->login($_POST);
    }
    public function register() {
        $this->UserModel->register($_POST);
    }
}
