<?php

require_once "buku.php";
require_once "database/database.php";

class daftarbuku
{
    private $koneksi;

    public function getdata()
    {
        $db = new database();
        $this->koneksi = $db->getkoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $this->koneksi->query($sql);

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $book = new buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
                $book->setId($row["id"]);
                array_push($daftar_buku, $book);
            }
        }

        return $daftar_buku;
    }

    public function getkolomtabel()
    {
        return array('no', 'judul', 'pengarang', 'penerbit', 'tahun');
    }

    public function simpan($buku)
    {
        $db = new Database();
        $koneksi = $db->getkoneksi();

        $sql = "INSERT INTO buku (judul, pengarang, penerbit, tahun) VALUES ('" . $buku->getjudul() . "', '" . $buku->getpengarang() . "', '" . $buku->getpenerbit() . "', '" . $buku->gettahun() . "')";
        $query = $koneksi->query($sql);

        if ($query === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function hapus($id)
    {
        $db = new Database();
        $koneksi = $db->getkoneksi();

        $sql = "DELETE FROM buku WHERE id = " . $id;
        $query = $koneksi->query($sql);

        return $query;
    }

    public function update($buku)
    {
        $db = new Database();
        $koneksi = $db->getkoneksi();

        $sql = "UPDATE buku SET judul = '" . $buku->getjudul() . "', pengarang = '" . $buku->getpengarang() . "', penerbit = '" . $buku->getpenerbit() . "', tahun = '" . $buku->gettahun() . "' WHERE id = " . $buku->getId();
        $query = $koneksi->query($sql);

        return $query;
    }
    public function getBukuById($id){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $sql = "SELECT * FROM buku WHERE id = " . $id;

        $query = $koneksi->query($sql);

        if($query->num_rows > 0){
            $data = $query->fetch_assoc();

            $buku = new Buku($data['judul'], $data['pengarang'], $data['penerbit'], $data['tahun']);
            $buku->setId($data['id']);

            return $buku;
        }
        return false;
    }

}
