<?php

class Produk_model
{
    private $namaTable = 'produk_db',
            $db;
    

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProduk()
    {
        $this->db->query("SELECT * FROM produk_db");

        return $this->db->resultSet();
    }

    public function getKategoriProduk()
    {
        $this->db->query("SELECT * FROM kategori_produk");

        return $this->db->resultSet();
    }

    public function cariProduk()
    {
        $keyword  = $_POST['searchInput'];

        $query = 'SELECT * FROM produk_db WHERE Nama_produk LIKE :keyword || Deskripsi_produk LIKE :keyword';

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function getKategoriProdukNama($namaKategori)
    {
        $this->db->query("SELECT * FROM produk_db WHERE Kategori_produk = '$namaKategori' ");

        return $this->db->resultSet();
    }
    public function getProdukId($produkId)
    {
        $this->db->query("SELECT * FROM produk_db WHERE id_produk = '$produkId' ");

        return $this->db->single();
    }
    public function getKategoriProdukId($idProduk)
    {
        $this->db->query("SELECT * FROM kategori_produk WHERE id = '$idProduk' ");

        return $this->db->single();
    }

    public function getKategori($kategori)
    {
        $this->db->query("SELECT * FROM kategori_produk WHERE Kategori_produk = :kategori");
        $this->db->bind('kategori', $kategori);
        return $this->db->single();
    }

    public function uploadProduk($kategori)
    {
        $tanggalUpload = date('d-m-Y'); 

        $kategoriProduk = $kategori;

        $satuanBerat = $_POST['satuanBerat'];

        $id = rand().'-'.date('dmY').'-'.$kategoriProduk;

        // Proses Upload Foto Produk
        $fileName = $_FILES['thumbImg']['name'];
        $tmpName = $_FILES['thumbImg']['tmp_name'];

        $imgExt = explode('.', $fileName); 
        $imgExt = strtolower(end($imgExt)); 

        $newImgName = $_POST['namaProduk'].'.'.$imgExt;

        $uploadPath = 'img/produk/thumb/'.$newImgName;

        
        move_uploaded_file($tmpName, $uploadPath);
        // Proses Upload Foto Produk Selesai

        $query = "INSERT INTO produk_db VALUES
        ('$id', :namaProduk, :jumlahStok, :beratProduk, :hargaProduk,  :kategoriProduk, :deskripsiProduk, '$newImgName', '$tanggalUpload')";

        $this->db->query($query);
        
        $this->db->bind('namaProduk', $_POST['namaProduk']);
        $this->db->bind('jumlahStok', $_POST['stokProduk']);
        $this->db->bind('beratProduk', $_POST['beratProduk'].$satuanBerat);
        $this->db->bind('hargaProduk', number_format($_POST['hargaProduk']));
        $this->db->bind('kategoriProduk', $kategori);
        $this->db->bind('deskripsiProduk', $_POST['deskripsiProduk']);
        
        // $this->db->query($queryFotoProduk);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateProduk($idProduk)
    {
        
        $tanggalUpdate = date('d-m-Y'); 
        
        $satuanBerat = $_POST['satuanBerat'];
        
        // Proses Update Foto Produk
        // $Produk['Thumbnail'] = $this->getProdukId($idProduk);

        // $thumbnail = $Produk['Thumbnail']['Thumbnail_produk'];

        // $ThumbnailPath = 'img/produk/thumb/'.$thumbnail;

        // unlink($ThumbnailPath);
        // $fileName = $_FILES['thumbImg']['name'];
        // $tmpName = $_FILES['thumbImg']['tmp_name'];

        // $imgExt = explode('.', $fileName); 
        // $imgExt = strtolower(end($imgExt)); 

        // $newImgName = $_POST['namaProduk'].'.'.$imgExt;

        // $uploadPath = 'img/produk/thumb/'.$newImgName;

        
        // move_uploaded_file($tmpName, $uploadPath);
        // Proses Update Foto Produk Selesai

        $query = "UPDATE produk_db SET Nama_produk=:namaProduk, Jumlah_stok=:jumlahStok, Berat_produk=:beratProduk, Harga_produk=:hargaProduk, Deskripsi_produk=:deskripsiProduk, Tanggal_update= :tanggalUpdate WHERE id_produk= :idProduk";


        $this->db->query($query);
        
        $this->db->bind('namaProduk', $_POST['namaProduk']);
        $this->db->bind('jumlahStok', $_POST['stokProduk']);
        $this->db->bind('beratProduk', $_POST['beratProduk'].$satuanBerat);
        $this->db->bind('hargaProduk', $_POST['hargaProduk']);
        $this->db->bind('deskripsiProduk', $_POST['deskripsiProduk']);
        $this->db->bind('tanggalUpdate', $tanggalUpdate);
        $this->db->bind('idProduk', $idProduk);
        
        // $this->db->query($queryFotoProduk);
        $this->db->execute();

        return $this->db->rowCount();
    }
}