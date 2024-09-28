<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 4px;
        }
    </style>
</head>
<body>
    <h2>Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tugas</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TotalNilai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "nilai.php";

            $mhs1 = new Nilai();
            $mhs1->setTugas(90);
            $mhs1->setUts(85);
            $mhs1->setUas(90);

            $mhs2 = new Nilai();
            $mhs2->setTugas(58);
            $mhs2->setUts(77);
            $mhs2->setUas(60);

            $mhs3 = new Nilai();
            $mhs3->setTugas(89);
            $mhs3->setUts(87);
            $mhs3->setUas(75);

            echo "<tr>
            <td>1</td>
            <td>Emily Smith</td>
            <td>" . $mhs1->getTugas() . "</td>
            <td>" . $mhs1->getUTS() . "</td>
            <td>" . $mhs1->getUAS() . "</td>
            <td>" . $mhs1->getTotalNilai() . "</td>
            </tr>";

            echo "<tr>
            <td>1</td>
            <td>James Smith</td>
            <td>" . $mhs2->getTugas() . "</td>
            <td>" . $mhs2->getUTS() . "</td>
            <td>" . $mhs2->getUAS() . "</td>
            <td>" . $mhs2->getTotalNilai() . "</td>
            </tr>";

            echo "<tr>
            <td>1</td>
            <td>Jhon Smith</td>
            <td>" . $mhs3->getTugas() . "</td>
            <td>" . $mhs3->getUTS() . "</td>
            <td>" . $mhs3->getUAS() . "</td>
            <td>" . $mhs3->getTotalNilai() . "</td>
            </tr>";


            ?>
        </tbody>
    </table>
</body>
</html>