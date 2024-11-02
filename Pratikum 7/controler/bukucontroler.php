<?php 

require_once "model/daftarbuku.php";

class bukucontroler{

    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";



      
    }
    public function simpan(){
        $buku = new buku ($_POST['judul'], $_POST['pengarang'],$_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new daftarbuku();
        $daftar_buku->simpan($buku);
        
        header( 'location : http://localhost/index.php');
        exit;
    }
    public function hapus (){
        $id = $_POST['id_hapus'];


        $daftar_buku = new daftarbuku();
        $daftar_buku->hapus($id);

        header( 'location : http://localhost/index.php');
        exit;
    }
}