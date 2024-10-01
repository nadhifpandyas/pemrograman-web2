<?php

class Form{
    protected $fields;

    public function __construct()
    {
        $this->fields = [];
    }
    public function setTextFields($nama, $text){
        $label = "<div class='wrapper'><label for='".$nama."'>".$nama."</label>";
        $textfields = "<input class='form-input' type='text' name='".$nama."' ></div>";
        array_push($this->fields, $label . $textfields);
    }
    public function tampilkanForm(){
        echo "<form";
            foreach($this->fields as $field){
                echo $field;
            }
            echo "<input type='submit' value='Simpan'>";
            echo "</form>";
    }
}

class FormMahasiswa {
}