<?php
class Database
{
    public $host = "localhost", $user = "root", $pass = 123, $db = "xirpl2";
    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            // echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}
// Data Tabel Siswa
include 'siswa.php';

// data tabel A
// include ''

// koneksi DB
$db = new Database();
