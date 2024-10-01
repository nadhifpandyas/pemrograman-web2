<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .wrapper{
            padding: 18px;
        }
        .form-input{
            display: block;
        }
    </style>
    <title>Form dengan OOP</title>
</head>
<body>
    <?php
    require_once "FormMahasiswa.php";

    $form = new Form();
    $form->setTextFields('Nama', '');
    $form->setTextFields('NIM', '');
    $form->setTextFields('Prodi', '');
    $form->setTextFields('Fakultas', '');
    $form->tampilkanForm();
    ?>
</body>
</html>