<?php
//memanggil koneksi
include ('koneksi.php');

//pengujian edit
if (@$_GET['hal'] == "edit")
{
  //tampilkan edit
  $tampil = mysqli_query($koneksi, "SELECT * FROM tabelssiswa WHERE id = '$_GET[id]' ");
  $data = mysqli_fetch_array($tampil);
  if($data)
  {
    //data ditampung dulu sebelum ditampilkan
    $vnim = $data['nisn'];
    $vnamamhs = $data['namasiswa'];
    $vjk = $data['jk'];
    $valamat = $data['alamat'];
    $vkota = $data['kota'];
    $vemail = $data['email'];
  }
}


?>