<html>
	<head>
		<title>Form Tambah - CRUD Codeigniter</title>
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
		<h1>Form Tambah Data Pegawai</h1>
		<hr>

		<!-- Menampilkan Error jika validasi tidak valid -->
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("pegawai/tambah"); ?>
		<table cellpadding="8">
			<tr>
				<td>KdPegawai</td>
				<td><input size="90" type="text" placeholder="Harus diawali PG and 3 digit angka" name="input_kdpegawai" value="<?php echo set_value('input_kdpegawai'); ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" placeholder="Berisi nama pegawai" name="input_nama" placeholder="" value="<?php echo set_value('input_nama'); ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" placeholder="Berisi alamat pegawai" name="input_alamat" value="<?php echo set_value('input_alamat'); ?>"></td>

			</tr>
			<tr>
				<td>KodePos</td>
				<td><input type="text" placeholder="berisi kode pos tempa tinggal pegawai" name="input_kodepos" value="<?php echo set_value('input_kodepos'); ?>"></td>
			</tr>
			<tr>
				<td>NoTelp</td>
				<td><input type="text" placeholder="Berisi nomor telepon pegawai" name="input_notelp"><?php echo set_value('input_notelp'); ?></td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" placeholder="Berisi username akun pegawai" name="input_username"><?php echo set_value('input_username'); ?></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" placeholder="Berisi password aku pegawai" name="input_password"><?php echo set_value('input_password'); ?></textarea>
		</table>

		<hr>
		<input class="btn_simpan" type="submit" name="submit" value="Simpan">
		<a  href="<?php echo base_url(); ?>">
		<input class="btn_batal" type="button" value="Batal"></a>
	<?php echo form_close(); ?>
	</body>
</html>
