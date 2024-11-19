<?php 

require_once "model/daftarbuku.php";

class bukucontroler{

    public function jalankan(){
        $theme_value = "light";
        if(isset ($_GET['theme'])){
            $theme_value = $_GET['theme'];
        }

        //set cookie
        if(!isset($_COOKIE{'theme'}) || isset($_GET['theme'])){
            setcookie('theme', $theme_value, time()+3600*24);
        }
        else{
            $theme_value = $_COOKIE ['theme'];
        }
        //hapus cookie
        if(isset($_COOKIE{'theme'}) && isset($_GET['hapus_theme'])){
            setcookie('theme');
        }
        
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";



      
    }
    public function simpan(){
        session_start();
        $buku = new buku ($_POST['judul'], $_POST['pengarang'],$_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new daftarbuku();

        $status= $daftar_buku->simpan($buku);
        
        if($status){
            $_SESSION['berhasil'] = 'data berhasil disimpan';
        }else{
            $_SESSION['gagal'] = 'data gagal disimpan';
        }

        
        header( 'Location: http://localhost/index.php');
        exit;
    }
    public function hapus (){
        session_start();
        $id = $_POST['id_hapus'];


        $daftar_buku = new daftarbuku();
        $status=$daftar_buku->hapus($id);

        if($status){
            $_SESSION['berhasil'] = 'data berhasil dihapus';
        }else{
            $_SESSION['gagal'] = 'data gagal dihapus';
        }

        header( 'Location: http://localhost/index.php');
        exit;
    }
    public function edit (){

        //index.php/edit?id=5

        //menangkap nilai query string id dari view

        $id = $_GET['id'];
        
        //membuat objek model daftar buku
        $daftar_buku = new daftarbuku();

        //mengambil dan membuat oblek model buku berdasarkan id buku dari objek daftar_buku
        $buku = $daftar_buku->getBukuById($id);

        //jika buku ada atau ketemu
        if($buku){
        //tampilkan view edit buku
            include_once "view/EditBukuView.php";
        }else{
            header("Location: http://localhost/index.php");
        }
    }
    public function update(){
        session_start();
        $buku = new Buku($_POST ['judul'], $_POST ['pengarang'], $_POST ['penerbit'], $_POST ['tahun']);
        $buku->setId($_POST['id']);

        $daftar_buku = new daftarbuku();
        $status= $daftar_buku->update($buku);
        if($status){
            $_SESSION['berhasil'] = 'data berhasil diupdate';
        }else{
            $_SESSION['gagal'] = 'data gagal diupdate';
        }
        
        header('Location: http://localhost/index.php');
        exit;
    }

}