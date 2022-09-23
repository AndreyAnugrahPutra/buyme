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

    public function edit()
    {
        $data['user_data'] = $this->model('Users_model')->getUserProfile();

        $data['user_pic'] = $this->model('Users_model')->getUserProfilePic();

        $data['judulHalaman'] = 'Foto Profil';
        $this->view('user/templates/header', $data);
        $this->view('user/templates/sidebar', $data);
        $this->view('user/profile/picture/edit', $data);
        $this->view('user/templates/footer', $data);
    }

    public function updateFoto()
    {
        if(isset($_POST['updateBtn']))
        {

            if($this->model('Users_model')->updateFotoProfile($_POST) > 0)
            {
                Notification::setNotif('success', 'Berhasil','Foto Telah Diganti');
                header('Location: '.BASEURL.'user/index');
                exit;
            }
            else 
            {
                Notification::setNotif('failed', 'Gagal!','Foto Gagal Diganti :(');
                header('Location: '.BASEURL.'ProfilePic/edit');
                exit;
            }

        }
    }

    public function hapus()
    {
        if($this->model('Users_model')->hapusFotoProfile($_POST) == 0)
        {
            Notification::setNotif('success', 'Berhasil','Foto Telah Dihapus');
            header('Location: '. BASEURL .'user/index');
            exit;
        }
        else
        {
            Notification::setNotif('failed', 'Gagal!','Foto Gagal Dihapus:(');
            header('Location: '. BASEURL .'user/index');
            exit;
        }
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