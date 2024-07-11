<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $matkul     = $_POST['matkul'];
  $hari   = $_POST['hari'];
  $dosen  = $_POST['dosen'];
  $semester      = $_POST['semester'];
  $ruang    = $_POST['ruang'];

  $result = mysqli_query($con, "INSERT INTO matkul(matkul,hari,dosen,semester,ruang) VALUES('$matkul','$hari','$dosen','$semester','$ruang')");

  echo "<script>window.location.href ='?page=matkul';</script>";
}
?>

<h4 class="mb-5">Tambah Data Matkul</h4>

<form method="post">
    <div class="mb-3 row">
        <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="matkul" class="form-control" placeholder="Masukan kode Mata Kuliah...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="hari" class="col-sm-2 col-form-label">Hari</label>
        <div class="col-sm-10">
            <input type="text" name="hari" class="form-control" placeholder="Masukan Hari...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="dosen" class="col-sm-2 col-form-label">Dosen Pengajar</label>
        <div class="col-sm-10">
            <input type="text" name="dosen" class="form-control" placeholder="Masukan Dosen Pengajar...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="semester"  class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-10">
            <input type="text" name="semester" class="form-control" placeholder="Masukan Semester...">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="ruang" class="col-sm-2 col-form-label">Ruangan</label>
        <div class="col-sm-10">
            <input type="text" name="ruang" class="form-control" placeholder="Masukan Ruangan ...">
        </div>
    </div>
    
    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=matkul" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>
    
