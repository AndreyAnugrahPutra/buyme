<?php

class Signup extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = 'Signup';
        $this->view('templates/header', $data);
        $this->view('signup/index', $data);
        $this->view('signup/footer');
    }

    public function tambah()
    {
        $cekUsername['User'] = $this->model('Users_model')->cekUser();

        if( $cekUsername['User']['Username'] = '')
        {
            Notification::setNotif('failed', 'Signup Gagal!', 'Username Sudah Terdaftar');
            header('Location: '. BASEURL .'signup/index');
            exit;
        }
        else
        {
            if ($this->model('Users_model')->tambahUser($_POST) > 0 )
            {
                Notification::setNotif('success', 'Signup Berhasil!', 'Silahkan Login');
                header('Location: '. BASEURL .'login/index');
                exit;
            }
            else 
            {
                Notification::setNotif('failed', 'Signup Gagal :( ,', 'Silahkan Coba Lagi');
                header('Location: '. BASEURL .'signup/index');
                exit;
            }
        }
    }
}