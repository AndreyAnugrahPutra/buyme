<?php

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

class Home extends Controller
{
    public function index()
    {
        $data['kategori_produk'] = $this->model('Produk_model')->getKategoriProduk();
        $data['judulHalaman'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}