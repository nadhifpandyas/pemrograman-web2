<?php

include "orang.php";
class Mahasiswa extends Orang{
public $NIM;
public $prodi;

public function getNilaiSemester(){

}
    
}

class MahasiswaAsing extends Mahasiswa{

    // overide
    public function ucapSalam(){
        echo "Hello My Name " . $this->nama;
    }
}

?>