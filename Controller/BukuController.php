<?php

require_once "Model/DaftarBuku.php";

class BukuController{

    public function jalankan(){
        $daftar_buku = new DaftarBuku();
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }
}