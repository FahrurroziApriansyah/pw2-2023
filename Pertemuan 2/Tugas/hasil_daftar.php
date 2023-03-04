<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Fahrurrozi Apriansyah</td>
					<td>fahrurrozi.apr@gmail.com</td>
					<td>Jl.Subur 1 Depok</td>
                    <td>081389778070</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Ojiaprnsyh</td>
					<td>ozyxyz@gmail.com</td>
					<td>Jl. Mangga 3 Jakarta Selatan</td>
                    <td>081389778050</td>
				</tr>

				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */

                  if (isset($_POST['proses'])) {

                    // Variable untuk menyimpan atau menampung data
                    $nama_lengkap = $_POST['nama_lengkap'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];

                    $hasil_daftar = ($nama_lengkap) .($email) . ($alamat) . ($telepon);
            
                    // Tampilkan data dari variable
                    echo 'Nama Lengkap : ' . $nama_lengkap;
                    echo '<br/>email : ' . $email;
                    echo '<br/>alamat : ' . $alamat;
                    echo '<br/>telepon : ' . $telepon;
                }

				?>

			</tbody>
		</table>
	</div>
</body>
</html>