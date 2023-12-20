<?php
require_once 'app/helpers/Alert.php';

class AuthService
{
  private $pdo;
  private $alert;


  public function __construct()
  {
    $db = new Database();
    $this->alert = new Alert();
    $this->pdo = $db->getConnect();
  }


  public function registerAdmin($body)
  {

    $adminId = uniqid();
    $name = filter_var($body["name"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS);
    $pw = password_hash(filter_var($body["password"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS), PASSWORD_DEFAULT);
    $createdAt = time();

    $stmt = $this->pdo->prepare("INSERT INTO `admins` (`id`, `adminId`, `name`, `password`, `createdAt`) VALUES (NULL, :adminId, :name, :password, :createdAt)");
    $stmt->bindParam(":adminId", $adminId);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":password", $pw);
    $stmt->bindParam(":createdAt", $createdAt);
    $stmt->execute();
  }

  public function loginAdmin($body)
  {
    session_start();

    var_dump($_POST);
    exit;
    $name = filter_var($body["name"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS);
    $pw = filter_var($body["password"] ?? '', FILTER_SANITIZE_SPECIAL_CHARS);

    $stmt = $this->pdo->prepare("SELECT * FROM `admins` WHERE `name` = :name");
    $stmt->bindParam(":name", $name);
    $stmt->execute();
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);


    if (!$admin || count($admin) === 0) {
      $this->alert->set('Sikertelen bejelentkezés!', null, null, "danger", "/admin");
      exit;
    }

    $isVerified = password_verify($pw, $admin["password"]);


    if (!$isVerified) {
      $this->alert->set('Sikertelen bejelentkezés!', null, null, "danger", "/admin");
      exit;
    }

    $_SESSION["adminId"] = $admin["adminId"];

    $this->alert->set('Sikeres bejelentkezés!', null, null, "success", "/admin/dashboard");
  }

  public function logoutAdmin()
  {
    session_start();
    session_destroy();

    $cookieParams = session_get_cookie_params();
    setcookie(session_name(), "", 0, $cookieParams["path"], $cookieParams["domain"], $cookieParams["secure"], isset($cookieParams["httponly"]));


    header("Location: /admin");
  }
}