<?php

class Produk extends Controller
{
    public function tambahProduk($kategori)
    {
        if(isset($_POST['submitProduk']))
        {
            if($this->model('Produk_model')->uploadProduk($kategori))
            {
                Notification::setNotif('success', 'Berhasil','Produk Telah Diupload');
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
}