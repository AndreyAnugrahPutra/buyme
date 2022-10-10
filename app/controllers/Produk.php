<?php

class Produk extends Controller
{
    public function tambahProduk($kategori)
    {
        if(isset($_POST['submitProduk']))
        {
            if($this->model('Produk_model')->uploadProduk($kategori))
            {
                Notification::setNotif('success', 'Berhasil! ','Produk Telah Diupload');
                header('Location: '.BASEURL.'dashboard/index');
                exit;
            }
            else
            {
                Notification::setNotif('failed', 'gagal','Produk Gagal DiUpload');
                header('Location: '.BASEURL.'dashboard/tambahProduk');
                exit;
            }
        }
    }  
    public function updateProduk($idProduk)
    {
        if(isset($_POST['submitProduk']))
        {
            $query = $this->model('Produk_model')->updateProduk($idProduk);
            if($query)
            {
                Notification::setNotif('success', 'Berhasil! ','Produk Telah Diupdate');
                header('Location: '.BASEURL.'dashboard/produk/lihat');
                exit;
            }
            else
            {
                Notification::setNotif('failed', 'gagal','Produk Gagal DiUpdate');
                header('Location: '.BASEURL.'dashboard/ubah/'.$idProduk);
                exit;
            }
        }
    }  
}