<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Nilai</title>
</head>
<body>
<h1>Tambah</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="proses.php" method="post">
<label>Nama</label>
<br>
<input type="text" name="user">
<br>
<label>Email</label>
<br>
<input type="email" name="email">
<br>
<label>Password</label>
<br>
<input type="password" name="pass">
<br><br>
<button type="submit" name="submit">Submit</button>
<button type="reset">Reset</button>
</form>

                <form action="proses.php" method="post">
                        <div class="col-md-8">
                            <div class="form-group">
                                <!-- Name input-->
                                <input type="text" name="user" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input type="email" name="email" placeholder="example@gmail.com">
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Password input-->
                                <input type="password" name="pass" placeholder="Password">
                            </div>

</body>
</html>
