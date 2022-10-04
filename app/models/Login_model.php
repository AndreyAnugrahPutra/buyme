<?php

class Login_model
{
    private $namaTable = 'users_db',
            $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function LoginUser()
    {
        $Username = $_POST['username'];
        $password = $_POST['PasswordInp'];

        $query = "SELECT * FROM users_db WHERE Username = :username && Password = :PasswordInp";

        
        $this->db->query($query);
        $this->db->bind('username', $Username);
        $this->db->bind('PasswordInp', $password);

        return $this->db->single();
    }
}