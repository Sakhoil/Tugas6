<?php
//menampilkan koneksi
include ('koneksi.php');
include ('edit.php');
include ('hapus.php');
include ('simpan.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>DATA SISWA BARU</title>
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">    
  <h1 class="text-center">From Pendaftaran Siswa Baru</h1>
  <h3 class="text-center" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">By Safaru</h3>

  <!-- ini awal card from -->
  <div class="card mt-5">
    <div class="card-header bg-primary text-white" >
      From Input Data Siswa Baru
    </div>
    <div class="card-body">
      <form method="post" action="">
        <div class="form-group">
          <label>NISN</label>
          <input type="text" name="nisn" value="<?=@$vnisn?>" class="form-control" placeholder="Input NISN anda disini" 
          required>
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="namasiswa" value="<?=@$vnamasiswa?>" class="form-control" placeholder="Input Nama anda disini" 
          required>
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select class="form-control" name="jk">
          <option value="<?=$vjk?>"><?=@$vjk?></option>
            <option value="L">L</option>
            <option value="P">P</option>
          </select>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea class="form-control" name="alamat" placeholder="Input Alamat anda disini" 
          required><?=@$valamat?></textarea>
        </div>
        <div class="form-group">
          <label>Kota</label>
          <select class="form-control" name="kota">
            <option value="<?=$vkota?>"><?=@$vkota?></option>
            <option value="Lamongan">Lamongan</option>
            <option value="Bojonegoro">Bojonegoro</option>
            <option value="Tuban">Tuban</option>
          </select>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" value="<?=@$vemail?>" class="form-control" placeholder="Input email anda disini" 
          required>
        </div>
        
        <button type="submit" class="btn btn-success mt-4" name="simpan" >Simpan</button>
        <button type="reset" class="btn btn-danger mt-4" name="reset" >Reset</button>

      </form>
    </div>
  </div>
  <!-- ini akhir card from-->

  <!-- ini awal card tabel -->
  <div class="card mt-5">
    <div class="card-header bg-success text-white" >
      Daftar Siswa Baru
    </div>
    <div class="card-body">
      
      <table class="table table-bordered table-striped">
        <tr>
          <th>No.</th>
          <th>NISN</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Kota</th>
          <th>Email</th>
          <th>Aksi</th>
        </tr>
        <?php
          $no=1; 
          $tampil = mysqli_query($koneksi, "SELECT * from tabelssiswa order by id desc");
          while($data = mysqli_fetch_array($tampil)) :
        
        ?>

        <tr>
          <td><?=$no++?></td>
          <td><?=$data['nisn']?></td>
          <td><?=$data['namasiswa']?></td>
          <td><?=$data['jk']?></td>
          <td><?=$data['alamat']?></td>
          <td><?=$data['kota']?></td>
          <td><?=$data['email']?></td>
          <td>
            <a href="index.php?hal=edit&id=<?=$data['id']?>" class="btn btn-warning">Edit</a>
            <a href="index.php?hal=hapus&id=<?=$data['id']?>" 
                onclick = "return confirm('lu yakin mau hapus nih data bos???')" class="btn btn-danger">Hapus</a>
          </td>
        </tr>
      <?php endwhile; //penutup perulangan while ?>
      </table>
    </div>
  </div>
  <!-- ini akhir card tabel-->
  </div>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>