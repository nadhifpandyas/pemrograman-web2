<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum3</title>
    <style>
        .fs-45{
            font-size: 45px
        }
    </style>
</head>
<body>
    <div class="">
        <?php
        include "visibility.php";

        $visibility = new visibility();
        $visibility->tampilkandata();

        echo "<br>";

        echo "Akses di luar kelas <br>";

        echo "public " . $visibility->public . 'br';
        //echo "private " . $visibility->private . 'br';
        //echo "protected " . $visibility->protected . 'br';
        echo "<br> <br>";
        echo "<h2>Konsep Pewarisan</h2>";

        include "Mahasiswa.php";

        $mahasiswa = new Mahasiswa("Jhon Walker");
        $mahasiswa->ucapSalam();

        $mahasiswaInggris = new MahasiswaAsing("Jhon Walker");
        $mahasiswaInggris->ucapSalam();



        ?>
    </div>
</body>
</html>