<?php

    require_once("App/Models/MHome.php");

    class Session_Controller extends Controller
    {
        public function __construct() {

        }

        function index() {

        }

        function logOut() {
            if (session_destroy()) {
                header('location: ' . BASE_URL . 'Home');
            }
        }

        function logIn() {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $mod = new home_model();
            $check = $mod->login_model($username, $password);
            if ($check >= 1) {
                $_SESSION['username'] = $check['username'];
                $_SESSION['email'] = $check['email'];
                $_SESSION['usertype'] = $check['usertype'];

                echo '1';
            } else {
                echo '0';
            }
        }

        function signIn() {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $usertype = $_POST['usertype'];

            $mod = new home_model();
            $inserted = $mod->add_users_model($firstname, $lastname, $username, $password, $email, $usertype);
            if ($inserted >= 1) {
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['usertype'] = $usertype;
                echo '1';
            } else {
                echo '0';
            }   
        }
    }
    
?>