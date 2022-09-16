<?php

class Users_model
{
    private $namaTable = 'users_db',
            $db;
    
    private $imageFormat = ['image/png', 'image/jpeg', 'image/jpg'];
    
    public function __construct()
    {
        $this->db = new Database;
    }

    // public function getAllUser()
    // {
    //     $this->db->query('SELECT * FROM '.$this->namaTable);
    //     return $this->db->resultSet();
    // }

    public function getUserProfile()
    {
        $Username = $_SESSION['user']['Username'];
        // $this->db->query("SELECT * FROM users_db  WHERE Username = ".$Username);

        $this->db->query("SELECT * FROM users_db WHERE Username = :Username");
        $this->db->bind('Username', $Username);

        return $this->db->single();
    }

    public function getUserProfilePic()
    {
        $Username = $_SESSION['user']['Username'];
        // $this->db->query("SELECT * FROM users_db  WHERE Username = ".$Username);

        $this->db->query("SELECT * FROM users_picture WHERE Username = :Username");
        $this->db->bind('Username', $Username);

        return $this->db->single();
    }

    

    public function cekUser()
    {
        $Username = $_POST['Username'];

        $this->db->query("SELECT * FROM users_db WHERE Username = :Username");
        $this->db->bind('Username', $Username);
        return $this->db->single();
    }

    public function tambahUser($data)
    {   
        $tanggalJoin = date('d-m-Y');
        $userid = rand();
        
        $query = "INSERT INTO users_db VALUES
                 ('', '$userid','user', :NamaLengkap, :Username, :PasswordInp, :Email, :TanggalLahir, :NomorTelp, :Alamat, '$tanggalJoin')";

        
        $password = $data['PasswordInp'];
        $this->db->query($query);
        $this->db->bind('NamaLengkap', $data['NamaLengkap']);
        $this->db->bind('Username', $data['Username']);
        $this->db->bind('PasswordInp', password_hash($password, PASSWORD_DEFAULT));
        $this->db->bind('Email', $data['Email']);
        $this->db->bind('TanggalLahir', $data['TanggalLahir']);
        $this->db->bind('NomorTelp', $data['NomorTelp']);
        $this->db->bind('Alamat', $data['Alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function uploadFotoProfile()
    {
        $Username = $_SESSION['user']['Username'];
        $UserId= $_SESSION['user']['user_id'];

        $fileName = $_FILES['userImg']['name'];
        // $fileSize = $_FILES['image']['size'];
        $tmpName = $_FILES['userImg']['tmp_name'];

        // $imageFormat = $this->imageFormat; 
        $imgExt = explode('.', $fileName); 
        $imgExt = strtolower(end($imgExt)); 

        // $newImgName = $_SESSION['user']['Username'];
        $newImgName = $_SESSION['user']['Username']. '.' . $imgExt;

        $query = "INSERT INTO users_picture VALUES ('$UserId', '$Username', '$newImgName')";

        $uploadPath = 'img/userPic/'.$newImgName;
        
        // $this->db->bind('ProfilePic', $newImgName);
        
        move_uploaded_file($tmpName, $uploadPath);
        
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();

    }

    public function updateProfile()
    {
        
    }

}