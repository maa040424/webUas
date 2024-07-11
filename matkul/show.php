<h1>Data Mata Kuliah</h1>
<a href="?page=matkulAdd" class="btn btn-primary mb-4">Tambah Data</a>
<a href="matkul/print.php" class="btn btn-warning mb-4" target="_blank">Cetak</a>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Mata Kuliah</th>
            <th>Hari</th>
            <th>Dosen</th>
            <th>Semester</th>
            <th>Ruangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>	
        <?php
            include 'connection.php';
            $query = mysqli_query($con, "SELECT * FROM matkul");
            while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['matkul']; ?></td>
                <td><?php echo $data['hari']; ?></td>
                <td><?php echo $data['dosen']; ?></td>
                <td><?php echo $data['semester']; ?></td>
                <td><?php echo $data['ruang']; ?></td>
                <td>
                    <a class="btn btn-sm btn-success" href="?page=matkulEdit&id=<?= $data['id']; ?>">Edit</a>
                    <a class="btn btn-sm btn-danger" href="?page=matkulDelete&id=<?= $data['id']; ?>" onclick="return confirm('Lanjutkan menghapus data ?')">Hapus </a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
