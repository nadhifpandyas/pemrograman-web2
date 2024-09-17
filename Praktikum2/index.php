<?php
include "orang.php";
include "BankCustomer.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello praktikum 2</h1>
    <div class="di">
        <?php
            $nasabah = new BankCustomer();
            $nasabah->setcustomerName('Nadhif');
            $nasabah->setaddress('Mendalo, Muaro Jambi');
            $nasabah->setemail('nadhifpandia@gmail.com');
            $nasabah->setcard('platinum');
            $nasabah->getacc('wadiah');

            $nasabah->insertCard();
            $nasabah->enterPIN(123456);
        ?>
    </div>
</body>
</html>

<!-- localhost/index.php?nama=jhon -->
<!-- http://uinjambi.ac.id/berita?page=1&search=kuliah&orderBy=id -->