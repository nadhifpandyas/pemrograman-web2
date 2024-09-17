<?php

class BankCustomer{
    private string $customerName;
    private string $address;
    private string $email;
    private string $card;
    protected string $acc;

    // Constructor
    public function __construct(){
        $this->email = "Ini_email_default_@gmail.com";
    }

    public function __destruct(){
        echo "koneksi sudah selesai";
    }

    public function setcustomerName($customerName){
        $this->customerName = $customerName;
    }

    public function setaddress($address){
        $this->address = $address;
    }

    public function setemail($email){
        $this->email = $email;
    }

    public function setcard($card){
        $this->card = $card;
    }

    public function getacc($acc){
        $this->acc = $acc;
    }

    public function insertCard(){
        echo "kartu dimasukkan : <br>";
        echo "nama customer :" . $this->customerName . '<br>';
        echo "alamat :" . $this->address . '<br>';
        echo "email :" . $this->email . '<br>';
        echo "card :" . $this->card . '<br>';
        echo "acc :" . $this->acc . '<br>';
    }

    public function enterPIN(int $number){
        echo "masukkan pin anda :"  . $number;
    }
    public function changePIN(){
    }

    public function withDrawCash(){
    }

    public function requestTransactionSummary(){
    }

    public function acceptAmount(){
    }
}
