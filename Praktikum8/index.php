<?php
include "controler/bukucontroler.php";

$aplikasi = new bukucontroler();

$_REQUEST = $_SERVER['REQUEST_URI'];
$_REQUEST = parse_url($_REQUEST, PHP_URL_PATH);

switch ($_REQUEST) {
    case '/': 
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan':
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus':
        $aplikasi->hapus();
        break;
    default:
        $aplikasi->jalankan();
}
