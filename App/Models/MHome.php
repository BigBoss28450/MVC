<?php
class home_model{
    private $db;
    private $personas;
    private $roles;
 
    public function __construct(){
        $this->db = Conectar::conexion();
        $this->personas = array();
        $this->roles = array();
    }
    public function get_personas(){
        $consulta = $this->db->query("select * from usuarios;");
        while($filas = $consulta->fetch_assoc()) {
            $this->personas[] = $filas;
        }
        return $this->personas;
    }

    public function get_roles(){
        $consulta = $this->db->query("SELECT * FROM usertype");
        while ($filas = $consulta->fetch_assoc()) {
            $this->roles[] = $filas;
        }
        return $this->roles;
    }

    public function login_model($username, $password) {
        $consulta = $this->db->query("SELECT * FROM usuarios WHERE username = '$username' OR email = '$username' AND password = '$password'");
        return $consulta->fetch_assoc();
    }

    public function add_users_model($firstname, $lastname, $username, $password, $email, $usertype) {
        $consulta = $this->db->query("INSERT INTO usuarios(firstname, lastname, username, password, email, usertype) VALUES('$firstname', '$lastname', '$username', '$password', '$email', '$usertype');");
        return $this->db->affected_rows;
    }

    public function get_users_model() {
        $consulta = $this->db->query("SELECT * FROM usuarios INNER JOIN usertype ON usuarios.usertype = usertype.id");
        $data = array();
        while ($rows = $consulta->fetch_assoc()) {
            $data[] = $rows;
        }
        return $data;
    }
}
?>