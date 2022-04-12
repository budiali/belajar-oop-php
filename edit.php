<?php
include "class/database.php";
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>

<body>
    <a href="tampil_data.php">Kembali</a>
    <h4>Form Edit Data</h4>
    <form action="proses.php?aksi=update_data" method="post">
        <?php
        foreach ($db->edit($_GET['id']) as $e) { ?>


            <table>
                <tr>
                    <td>Nama</td>

                    <td>
                        <input type="hidden" name="id" value="<?= $e['id']; ?>">
                        <input type="text" name="nama" value="<?= $e['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?= $e['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td><input type="text" name="usia" value="<?= $e['usia']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>

        <?php } ?>
    </form>
</body>

</html>