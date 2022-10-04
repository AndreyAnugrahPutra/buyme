<?php
require_once 'auth_user.php';

// $_SESSION['url'] = $_SERVER['REQUEST_URI'];

class Dashboard extends Controller
{
    public function index()
    {
        $data['judulHalaman'] = 'Dashboard Admin';
        // $data['kategori_produk'] = $this->model('Produk_model')->getKategoriProduk();
        $this->view('dashboard/templates/header', $data);
        $this->view('dashboard/templates/sidebar', $data);
        $this->view('dashboard/index', $data);
        $this->view('dashboard/templates/footer', $data);
    }

    public function produk($action)
    {
        $data['judulHalaman'] = $action.' Produk';

        $data['kategoriProduk'] = $this->model('Produk_model')->getKategoriProduk();

        $this->view('dashboard/produk/templates/header', $data);
        $this->view('dashboard/produk/templates/sidebar', $data);
        $this->view('dashboard/produk/'.$action.'Produk', $data);
        $this->view('dashboard/produk/templates/footer', $data);

    }

    public function tambah($kategori)
    {
        $data['judulHalaman'] = 'Tambah Produk '.$kategori;
        $data['kategori_produk'] = $this->model('Produk_model')->getKategori($kategori);
        $this->view('dashboard/produk/header', $data);
        $this->view('dashboard/produk/templates/sidebar', $data);
        $this->view('dashboard/produk/form', $data);
        $this->view('dashboard/produk/templates/footer', $data);
    }

}
