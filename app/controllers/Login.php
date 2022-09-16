<?php

class Login extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('login/footer');
    }

    public function Login()
    {
        if($this->model('Login_model')->LoginUser())
        {
            $_SESSION['user'] = $this->model('Login_model')->LoginUser();
            $_SESSION['login'] = 'true';

            if($_SESSION['user']['Status'] == 'user')
            {
                Notification::setNotif('success', 'Selamat Datang', ''.$_SESSION['user']['Username'].'');
                header('Location: '.BASEURL.'home/index');
                exit;
            }
            else
            {
                header('Location: '.BASEURL.'dashboard/index');
                exit;
            }
        }
        else
        {
            header('Location: '.BASEURL.'login/index');
            exit;
        }
    }

}