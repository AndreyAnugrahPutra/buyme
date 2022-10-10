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

        $data['Produk'] = $this->model('Produk_model')->getProduk();

        $data['lihatProdukTitle'] = 'Daftar Produk Yang Di Upload';

        $this->view('dashboard/produk/templates/header', $data);
        $this->view('dashboard/produk/templates/sidebar', $data);
        $this->view('dashboard/produk/'.$action.'Produk', $data);
        $this->view('dashboard/produk/templates/footer', $data);

    }

    public function cariProduk()
    {
        $keyword = $_POST['searchInput'];
        if($keyword == '')
        {
            header('Location: '.BASEURL.'dashboard/produk/lihat');
            exit;
        }
        else
        {
        $data['judulHalaman'] = 'lihat Produk';

        $data['Produk'] = $this->model('Produk_model')->cariProduk();

        $data['lihatProdukTitle'] = 'Hasil Pencarian '.$keyword;

        $this->view('dashboard/produk/templates/header', $data);
        $this->view('dashboard/produk/templates/sidebar', $data);
        $this->view('dashboard/produk/lihatProduk', $data);
        $this->view('dashboard/produk/templates/footer', $data);
        }
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

    public function ubah($produkId)
    {
        $data['judulHalaman'] = 'Ubah Produk';

        $data['Produk'] = $this->model('Produk_model')->getProdukId($produkId);

        $this->view('dashboard/produk/templates/header', $data);
        $this->view('dashboard/produk/templates/sidebar', $data);
        $this->view('dashboard/produk/Ubah Produk', $data);
        $this->view('dashboard/produk/templates/footer', $data);
    }

    // public function kategori($namaKategori)
    // {


    //     $data['judulHalaman'] = 'Produk';

    //     $data['Produk'] = $this->model('Produk_model')->getKategoriProdukNama($namaKategori);

    //     $data['Produk'] = $this->model('Produk_model')->getProduk();

    //     $this->view('dashboard/produk/templates/header', $data);
    //     $this->view('dashboard/produk/templates/sidebar', $data);
    //     $this->view('dashboard/produk/Kategori Produk', $data);
    //     $this->view('dashboard/produk/templates/footer', $data);

    // }

}
