<?php
//Llamada al modelo
require_once("App/Models/MHome.php");

class Home_Controller extends Controller{
    private $view;

    public function __construct() {
    }


    function index() {
        require_once("App/Views/Estructura/header.php");
        require_once("App/Views/Home/Login.php");
        require_once("App/Views/Estructura/footer.php");
    }

    function signIn() {
        $mod = new home_model();
        $roles = $mod->get_roles();
        require_once("App/Views/Estructura/header.php");
        require_once("App/Views/Home/Signin.php");
        require_once("App/Views/Estructura/footer.php");
    }

    function admin() {
        $mod = new home_model();
        $users = $mod->get_users_model();
        require_once("App/Views/Estructura/header.php");
        require_once("App/Views/Home/Admin.php");
        require_once("App/Views/Estructura/footer.php");
    }

    function students() {
        require_once("App/Views/Estructura/header.php");
        require_once("App/Views/Home/Students.php");
        require_once("App/Views/Estructura/footer.php");
    }
}
 
?>