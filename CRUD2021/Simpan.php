<?php
//memanggil koneksi
include ('koneksi.php');

//jika tombol simpan diklik
if(isset($_POST['simpan']))
{
  //data diedit atau disimpan baru
  if ($_GET['hal'] == "edit") 
  {
      //jika data diedit
      $edit = mysqli_query($koneksi, " UPDATE tabelssiswa set
                                          nisn = '$_POST[nisn]',
                                          namasiswa = '$_POST[namasiswa]',
                                          jk = '$_POST[jk]',
                                          alamat = '$_POST[alamat]',
                                          kota = '$_POST[kota]',
                                          email = '$_POST[email]'
                                        WHERE id = '$_GET[id]'

                                      ");
    if($edit) //jika edit suksess
    {
      echo "<script>
              alert('edit data suksess boss!!');
              document.location='index.php';
          </script>";
    }
    else //jika edit gagal
    {
      echo "<script>
      alert('edit data GAGAL boss!!');
      document.location='index.php';
  </script>";
    }
  }
  else 
  {
      //jika data disimpan baru
      $simpan = mysqli_query($koneksi, "INSERT INTO tabelssiswa (nisn, namasiswa, jk, alamat,kota, email)
                                      VALUES ('$_POST[nisn]', 
                                              '$_POST[namasiswa]', 
                                              '$_POST[jk]', 
                                              '$_POST[alamat]',
                                              '$_POST[kota]',
                                              '$_POST[email]')
                                      ");
    if($simpan) //jika simpan suksess
    {
      echo "<script>
              alert('simpan data suksess boss!!');
              document.location='index.php';
          </script>";
    }
    else //jika simpan gagal
    {
      echo "<script>
      alert('simpan data GAGAL boss!!');
      document.location='index.php';
  </script>";
    }
  }
}

?>