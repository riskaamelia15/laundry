<?php
include 'koneksi.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function insert($user, $email, $pass)
    {
        $sql = "INSERT INTO login (id, username, email, password) VALUES (null, '$user',
                '$email', '$pass')";
        $this->conn->query($sql);
    }

    public function tampil_data()
    {
        $sql = "SELECT * FROM login";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
}
