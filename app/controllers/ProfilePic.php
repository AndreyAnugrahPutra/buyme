<?php

class ProfilePic extends Controller
{
    public function index()
    {
        $data['user_data'] = $this->model('Users_model')->getUserProfile();

        $data['judulHalaman'] = 'Foto Profil';
        $this->view('user/templates/header', $data);
        $this->view('user/templates/sidebar', $data);
        $this->view('user/profile/picture/index', $data);
        $this->view('user/templates/footer', $data);
    }

    public function uploadFoto()
    {
        if(isset($_POST['uploadBtn']))
        {
            if($this->model('Users_model')->uploadFotoProfile())
            {
                Notification::setNotif('success', 'Berhasil','Foto Telah Diupload');
                header('Location: '.BASEURL.'user/index');
                exit;
            }
            else 
            {
                Notification::setNotif('failed', 'Gagal!','Foto Gagal Diupload :(');
                header('Location: '.BASEURL.'ProfilePic/index');
                exit;
            }
            
        }
    }
}