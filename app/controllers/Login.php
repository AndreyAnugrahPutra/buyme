<?php
// require_once 'auth_user.php';
if(isset($_SESSION['login']))
{
    header('Location: '.$_SESSION['url']);
}

class Login extends Controller
{
    public function index()
    {
        $data['kategori_produk'] = $this->model('Produk_model')->getKategoriProduk();
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
            $_SESSION['url'] = $_SERVER['REQUEST_URI'];

            if($_SESSION['user']['Role'] == 2)
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
            
            Notification::setNotif('failed', 'Gagal','Username / Password Salah!');
            header('Location: '.BASEURL.'login/index');
            exit;
        }
    }

}