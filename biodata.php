<?php
class Biodata extends Database
{
   // Menampilkan Semua Data
   public function index()
   {

      $biodata = mysqli_query($this->koneksi, "select * from biodata");
      // var_dump($biodata);
      return $biodata;
   }

   // Menambah Data
   public function create($nama, $alamat, $agama, $jenis_kelamin, $tgl_lahir, $umur)
   {
      mysqli_query($this->koneksi, "insert into biodata values(null,'$nama','$alamat','$agama', '$jenis_kelamin','$tgl_lahir','$umur')");
   }
   // Menampilkan Data Berdasarkan ID
   public function show($id)
   {
      $biodata = mysqli_query($this->koneksi, "select * from biodata where id='$id'");
      return $biodata;
   }

   // Menampilkan data berdasarkan id
   public function edit($id)
   {
      $biodata = mysqli_query($this->koneksi, "select * from biodata where id='$id'");
      return $biodata;
   }

   // mengupdate data berdasarkan id
   public function update($id, $nama, $alamat, $jenis_kelamin, $agama, $tgl_lahir, $umur)
   {
      mysqli_query($this->koneksi, "update biodata set nama='$nama',agama='$agama', jenis_kelamin='$jenis_kelamin',alamat='$alamat',tgl_lahir='$tgl_lahir',umur='$umur' where id='$id'");
   }

   // menghapus data berdasarkan id
   public function delete($id)
   {
      mysqli_query($this->koneksi, "delete from biodata where id='$id'");
   }
}
