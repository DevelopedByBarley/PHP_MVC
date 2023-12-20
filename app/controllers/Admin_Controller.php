<?php

require_once 'app/services/AuthService.php';
require_once 'app/helpers/LoginChecker.php';

class Admin_Controller
{
  private $AuthService;
  private $LoginChecker;

  public function __construct()
  {
    $this->AuthService = new AuthService();
    $this->LoginChecker = new LoginChecker();
  }

  public function registerAdmin()
  {
    $this->AuthService->registerAdmin($_POST);
  }
  public function loginAdmin()
  {

    $this->AuthService->loginAdmin($_POST);
  }

  public function addWork()
  {
    $this->LoginChecker->checkUserIsLoggedInOrRedirect('adminId', '/admin');
  }

  public function logout() {
    $this->AuthService->logoutAdmin();
  }
}