<?php
namespace App\Controller;
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Model\User;

class Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        echo 'test';
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            if ($this->userModel->login($email, $password)) {
                if($role == "admin") {
                    $_SESSION['logged_in'] = true;
                    header("Location: /admin/dashboard.php");
                    exit;
                } else {
                    $_SESSION['logged_in'] = true;
                    header("Location: /content/navigation.php");
                    exit;
                }
            }
        }
    }

    public function register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $role = $_POST['role'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            if ($this->userModel->register($name,$email,$password, $role)) {
                $_SESSION['registered'] = true;
                header("Location: /auth/login.php");
                exit;
            }
        }
    }
    
    public function logout() {
        $this->userModel->logout();
        header("Location: /auth/login.php");
        exit;
    }

    public function admin() {
        session_start();

        if (!isset($_SESSION["id"]) || $_SESSION["role"] !== "admin") {
            header("Location: /auth/login.php");
            exit;
        }
    }
}

?>