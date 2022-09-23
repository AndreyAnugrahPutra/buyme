<?php

class Produk_model
{
    private $namaTable = 'produk_db',
            $db;
    

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKategoriProduk()
    {
        $this->db->query("SELECT * FROM kategori_produk");

        return $this->db->resultSet();
    }
}