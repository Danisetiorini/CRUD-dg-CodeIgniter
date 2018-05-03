<html>
	<head>
		<title>Form Ubah - CRUD Codeigniter</title>
		<style>

		input[type=text]{
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				box-sizing: border-box;
		}

		body {
		padding-left: 100px;
		padding-right: 100px;
    border-radius: 5px;
    background-color: #f2f2f2;
}

.btn_simpan{
	background-color: #337ab7;
	color: white;
	padding: 14px 25px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
}

.btn_batal{
	background-color: #d9534f;
	color: white;
	padding: 14px 25px;
	text-align: center;
	text-decoration: none;
	/* display: inline-block; */
}
		</style>
	</head>
	<body>
		<h1>Form Ubah Data Pegawai</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>


		<?php echo form_open("pegawai/ubah/".$pegawai->KdPegawai); ?>
			<table cellpadding="8">
				<tr>
					<td>KdPegawai</td>
					<td><input size="90" type="text" name="input_kdpegawai" placeholder="Harus diawali PG and 3 digit angka"value="<?php echo set_value('input_kdpegawai', $pegawai->KdPegawai); ?>" readonly></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="input_nama" placeholder="Berisi nama pegawai" value="<?php echo set_value('input_nama', $pegawai->Nama); ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="input_alamat" placeholder="Berisi alamat pegawai" value="<?php echo set_value('input_alamat', $pegawai->Alamat); ?>"></td>
				</tr>
				<tr>
					<td>KodePos</td>
					<td><input type="text" name="input_kodepos" placeholder="berisi kode pos tempa tinggal pegawai" value="<?php echo set_value('input_kodepos', $pegawai->KodePos); ?>"></td>
				</tr>
				<tr>
					<td>NoTelp</td>
						<td><input type="text" name="input_notelp" placeholder="Berisi nomor telepon pegawai" value="<?php echo set_value('input_notelp', $pegawai->NoTelp); ?>"></td>
				</tr>
				<tr>
					<td>username</td>
						<td><input type="text" name="input_username" placeholder="Berisi username akun pegawai" value="<?php echo set_value('input_username', $pegawai->username); ?>"></td>
				</tr>
				<tr>
					<td>password</td>
						<td><input type="text" name="input_password" placeholder="Berisi password aku pegawai" value="<?php echo set_value('input_password', $pegawai->password); ?>"></td>
				</tr>
			</table>

			<hr>

			<input class="btn_simpan" type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>">
			<input class="btn_batal" type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
