<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Data Log in</title>
</head>
<body>
<div>
<h1>Data Pengguna</h1>
<a href="beranda.php">Tambah Data</a>
<br><br>

<!-- Awal table -->
<table border="1">

<!-- Awal thead -->
<thead>
<tr>
<th>No.</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>
</tr>
</thead>

<!-- Awal tbody -->
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
    <td colspan="9">Belum ada data pada tabel data pengguna.</td>
    </tr>
<?php }?>
</tbody>
</table>
</div>
</body>
</html>