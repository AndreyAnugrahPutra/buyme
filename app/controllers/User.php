<?php 

class User extends Controller
{

    public function index()
    {
        $data['user_data'] = $this->model('Users_model')->getUserProfile();

        $data['user_pic'] = $this->model('Users_model')->getUserProfilePic();
        
        $data['kategori_produk'] = $this->model('Produk_model')->getKategoriProduk();

        $data['judulHalaman'] = 'Profile';
        $this->view('user/templates/header', $data);
        $this->view('user/templates/sidebar', $data);
        $this->view('user/profile/index', $data);
        $this->view('user/templates/footer', $data);
    }

    public function Cart()
    {
        $data['user_data'] = $this->model('Users_model')->getUserProfile();

        $data['judulHalaman'] = 'Cart';
        $this->view('user/templates/header', $data);
        $this->view('user/templates/sidebar', $data);
        $this->view('user/cart/index', $data);
        $this->view('user/templates/footer', $data);
    }

    public function editProfile()
    {
        $data['user_data'] = $this->model('Users_model')->getUserProfile();
        $data['judulHalaman'] = 'Edit';
        $this->view('user/templates/header', $data);
        $this->view('user/templates/sidebar', $data);
        $this->view('user/profile/editProfile', $data);
        $this->view('user/profile/footer', $data);
    }

    public function updateProfile()
    {
        if(isset($_POST['updateBtn']))
        {
            if($this->model('Users_model')->updateProfile($_POST) > 0)
            {
                $this->model('Users_model')->getUserProfile();
                Notification::setNotif('success', 'Profile Di Update','');
                header('Location: '.BASEURL.'user/index');
                exit;
            }
            else
            {
                Notification::setNotif('failed', 'Gagal','Profile Gagal Di Update');
                header('Location: '.BASEURL.'user/editProfile');
                exit;
            }
        }
    }
    // public function UserProfile()
    // {
    //     $data['user_data'] = $this->model('Users_model')->getUserProfile();
    // }
}