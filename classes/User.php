<?php
require_once "Database.php";

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conn;
    }

    // Check if user already exists
    public function isUserExist($email) {
        $sql = "SELECT id FROM users WHERE email='$email'";
        $result = $this->db->query($sql);
        return $result->num_rows > 0;
    }

    // Register user
    public function register($name, $email, $password) {
        if ($this->isUserExist($email)) {
            return false; // User already exists
        }
        $pass = md5($password);
        $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$pass')";
        return $this->db->query($sql);
    }

    // Login
    public function login($email, $password) {
        $pass = md5($password);
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }
}
?>
