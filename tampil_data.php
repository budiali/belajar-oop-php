<?php include "class/database.php";
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form_input.php">Tambah Data</a>
    <table>
        <tr>
            <td>nama</td>
            <td>alamat</td>
            <td>usia</td>
        </tr>
        <?php foreach($db->ambil_data() as $d) { ?>
        <tr>
            <td> <?= $d['nama']; ?> </td>
            <td> <?= $d['alamat']; ?></td>
            <td><?= $d['usia']; ?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>