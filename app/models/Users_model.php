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
        $userDb['user'] = $this->getUserProfile();
        $UserId = $userDb['user']['id'];
        // $this->db->query("SELECT * FROM users_db  WHERE Username = ".$Username);

        $this->db->query("SELECT * FROM users_picture WHERE user_id=:user_id");
        $this->db->bind('user_id', $UserId);

        return $this->db->single();
    }

    
    public function getRoleDb()
    {
        $this->db->query("SELECT * FROM user_role");
        return $this->db->resultSet();
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
                 ('$userid', :NamaLengkap, :Username, :PasswordInp, :Email, :TanggalLahir, :NomorTelp, :Alamat, '$tanggalJoin', 2)";

        
        $password = $data['PasswordInp'];
        $this->db->query($query);
        $this->db->bind('NamaLengkap', $data['NamaLengkap']);
        $this->db->bind('Username', $data['Username']);
        $this->db->bind('PasswordInp', $password);
        $this->db->bind('Email', $data['Email']);
        $this->db->bind('TanggalLahir', $data['TanggalLahir']);
        $this->db->bind('NomorTelp', $data['NomorTelp']);
        $this->db->bind('Alamat', $data['Alamat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function uploadFotoProfile()
    {
        $userDb['user'] = $this->getUserProfile();
        $Username = $userDb['user']['Username'];
        $UserId= $userDb['user']['id'];

        $fileName = $_FILES['userImg']['name'];
        $tmpName = $_FILES['userImg']['tmp_name'];

        $imgExt = explode('.', $fileName); 
        $imgExt = strtolower(end($imgExt)); 

        $newImgName = $userDb['user']['Username']. '.' . $imgExt;

        $query = "INSERT INTO users_picture VALUES ('','$UserId', '$Username', '$newImgName')";

        $uploadPath = 'img/userPic/'.$newImgName;
        
        move_uploaded_file($tmpName, $uploadPath);
        
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();

    }

    public function hapusFotoProfile()
    {
        $pictureDb['user'] = $this->getUserProfilePic();
        $userDb['user'] = $this->getUserProfile();

        $foto = $pictureDb['user']['Picture'];

        $filepath = 'img/userPic/'.$foto;

        unlink($filepath);

        $Username= $userDb['user']['Username'];
        
        $query = "DELETE FROM users_picture WHERE 
        Username=:Username ";
        
        $this->db->query($query);

        $this->db->bind('Username', $Username);

        $this->db->execute();
        
        $this->db->rowCount();
    }

    public function updateFotoProfile()
    {
        $pictureDb['user'] = $this->getUserProfilePic();
        $userDb['user'] = $this->getUserProfile();

        $foto = $pictureDb['user']['Picture'];

        $filepath = 'img/userPic/'.$foto;

        unlink($filepath);
        
        $userId= $userDb['user']['id'];
        $Username= $userDb['user']['Username'];

        
        $fileName = $_FILES['userImg']['name'];
        $tmpName = $_FILES['userImg']['tmp_name'];
        
        $imgExt = explode('.', $fileName); 
        $imgExt = strtolower(end($imgExt)); 

        $fotoId = rand(0, 10);

        $namaFoto = $Username.$fotoId;
        
        $newImgName = $namaFoto.'.'.$imgExt;

        $uploadPath = 'img/userPic/'.$newImgName;


        // $query = "INSERT INTO users_picture VALUES ('','$userId', '$Username', '$newImgName')";

        $query = "UPDATE users_picture SET Picture=:Picture WHERE user_id=:user_id";

        move_uploaded_file($tmpName, $uploadPath);

        $this->db->query($query);
        
        $this->db->bind('user_id', $userId);
        $this->db->bind('Picture', $newImgName);

        $this->db->execute();

        return $this->db->rowCount();
        
    }

    public function updateProfile($data)
    {
        $userDb['user'] = $this->getUserProfile();
        $userId = $userDb['user']['id'];

        $query = "UPDATE users_db SET NamaLengkap=:NamaLengkap,
        Username=:Username, Email=:Email, TanggalLahir=:TanggalLahir, NomorTelp=:NomorTelp, Alamat=:Alamat WHERE id=:id";

        $this->db->query($query);

        $this->db->bind('id',  $userId);
        $this->db->bind('NamaLengkap', $data['NamaLengkap']);
        $this->db->bind('Username', $data['Username']);
        $this->db->bind('Email', $data['Email']);
        $this->db->bind('TanggalLahir', $data['TanggalLahir']);
        $this->db->bind('NomorTelp', $data['NomorTelp']);
        $this->db->bind('Alamat', $data['Alamat']);

        $this->db->execute();

        return $this->db->rowCount();

    }

}