<html>
	<head>
		<title>CRUD Codeigniter</title>
		<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}


.btn_ubah, a{
	background-color: #337ab7;
	color: white;
	padding: 14px 25px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
}

.btn_hapus, a {
    background-color: #d9534f;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

.btn_tambah, a {
    background-color: #5cb85c;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

div.ex2 {
	padding-left: 40px;
	padding-right: 40px;
}

body {
	padding-left: 50px;
	padding-right: 50px;
	padding-bottom: 50px;
	border-radius: 5px;
}

</style>
	</head>
	<body>
		<h1>Data Pegawai</h1>
		<hr>

		<a class="btn_tambah" href='<?php echo base_url("pegawai/tambah"); ?>'>Tambah Data</a>
		<br><br>
<div class="ex2">
		<table border="1" cellpadding="7">
			<tr>
				<th>KdPegawai</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>KodePos</th>
				<th>NoTelp</th>
        <th>username</th>
        <th>password</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php
			if( ! empty($pegawai)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
				foreach($pegawai as $data){
					echo "<tr>
					<td>".$data->KdPegawai."</td>
					<td>".$data->Nama."</td>
					<td>".$data->Alamat."</td>
					<td>".$data->NoTelp."</td>
					<td>".$data->KodePos."</td>
					<td>".$data->username."</td>
          <td>".$data->password."</td>
					<td><a class='btn_ubah'  href='".base_url("pegawai/ubah/".$data->KdPegawai)."'>Ubah</a></td>
					<td><a class='btn_hapus' href='".base_url("pegawai/hapus/".$data->KdPegawai)."'>Hapus</a></td>
					</tr>";
				}
			}else{ // Jika data siswa kosong
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>
		</table>
</div>

	</body>


</html>
