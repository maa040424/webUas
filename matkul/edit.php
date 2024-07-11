<?php 
    include 'connection.php';
    $id = $_GET['id'];

    // echo "<h1>$id </h1>";
    
    // select data
    $query = mysqli_query($con,"SELECT * FROM matkul WHERE id = $id");
    $data = mysqli_fetch_array($query);

    // // update data
    if (isset($_POST['submit'])) {
        $matkul = $_POST['matkul'];
        $hari = $_POST['hari'];
        $dosen = $_POST['dosen'];
        $semester = $_POST['semester'];
        $ruang = $_POST['ruang'];

        mysqli_query($con, "UPDATE matkul SET matkul='$matkul',hari='$hari',dosen='$dosen',semester='$semester',ruang='$ruang' WHERE id=$id");

    //     // header("Location :index.php");
        echo "<script>window.location.href ='?page=matkul';</script>";
    }
?>


<h4 class="mb-5">Edit Data Mata Kuliah</h4>

<form action="" method="post">
    <div class="mb-3 row">
        <label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
        <div class="col-sm-10">
            <input type="text" name="matkul" class="form-control" placeholder="Masukan Mata Kuliah..." value="<?= $data['matkul']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="hari" class="col-sm-2 col-form-label">Hari</label>
        <div class="col-sm-10">
            <input type="text" name="hari" class="form-control" placeholder="Masukan Hari..." value="<?= $data['hari']; ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="dosen" class="col-sm-2 col-form-label">Dosen Pengajar</label>
        <div class="col-sm-10">
            <input type="text" name="dosen" class="form-control" placeholder="Masukan Dosen Pengajar..." value="<?= $data['dosen'];?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="semester" class="col-sm-2 col-form-label">Semester</label>
        <div class="col-sm-10">
            <input type="text" name="semester" class="form-control" placeholder="Masukan Semester ..." value="<?= $data['semester'] ?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="ruang"  class="col-sm-2 col-form-label">Ruangan</label>
        <div class="col-sm-10">
            <input type="text" name="ruang" class="form-control" placeholder="Masukan Ruangan..." value="<?= $data['ruang'] ?>">
        </div>
    </div>

    <div class="row">
        <div class="offset-md-2">
            <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            <a href="?page=matkul" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</form>