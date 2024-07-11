<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Data</title>
	<style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            font-size: 12px;
            border-collapse: collapse;
            width: 100%;
        }
    </style>
</head>
<body>
	<div class="container">
		<h1 align="center">Laporan Data Mata Kuliah</h1>
		
		<table border="1" cellpadding="5">
			<thead>
				<tr>
					<th>Mata Kuliah</th>
					<th>Hari</th>
					<th>Dosen</th>
					<th>Semester</th>
					<th>Ruangan</th>
				</tr>
			</thead>
			<tbody>	
				<?php
					include '../connection.php';
					$query = mysqli_query($con, "SELECT * FROM matkul");
					while ($data = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $data['matkul']; ?></td>
						<td><?php echo $data['hari']; ?></td>
						<td><?php echo $data['dosen']; ?></td>
						<td><?php echo $data['semester']; ?></td>
						<td><?php echo $data['ruang']; ?></td>
					</tr>
				<?php
				}
				?>
			</tbody>
        </table>	
	</div>
</body>

<script>
    window.print();
</script>
</html>