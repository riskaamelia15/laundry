<?php
include 'model.php';
$model = new Model();
$index = 1;
?>

<!doctype html>
<html lang="en">
<head>
    <title>Data Pengguna</title>
</head>

<body>

    <div>
        <h1>Data Pengguna</h1>

        <a href="index.html">Tambah Data</a>
    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>

        <tbody>
<?php
$result = $model->tampil_data();
if (!empty($result)) {
    foreach ($result as $data): ?>

    <tr>
        <td><?=$index++?></td>
        <td><?=$data->username?></td>
        <td><?=$data->email?></td>
        <td><?=$data->password?></td>
    </tr>

<?php endforeach;
} else {?>
    <tr>
        <td colspan="9">Belum ada data pada tabel pengguna.</td>
    </tr>
<?php }?>

        </tbody>
    </table>

    </div>

</body>
</html>