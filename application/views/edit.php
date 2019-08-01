<!DOCTYPE html>
<html>
<head>
	<title>edit data reservasi</title>
</head>
<body>


	<center>
		<h3>Edit Data</h3>
		
	</center>
	<?php foreach($reservasi as $u){ ?>
	<form action="<?php echo base_url('index.php/MyController/update'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>tgl_transaksi</td>
				<td><input type="date_default_timezone_get" name="tgl_transaksi" value="<?php echo $u->tgl_transaksi ?>"></td>
			</tr>
			<tr>
				<td>jenis_paket</td>
				<td><input type="text" name="jenis_paket" value="<?php echo $u->jenis_paket ?>"></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
			</tr>
			<tr>
				<td>no_ktp</td>
				<td>
					<input type="hidden" name="no_ktp" value="<?php echo $u->no_ktp ?>">
					<input type="text" name="no_ktp" value="<?php echo $u->no_ktp ?>">
				</td
			</tr>
			<tr>
				<td>tanggal_tampil</td>
				<td><input type="date" name="tanggal_tampil" value="<?php echo $u->tanggal_tampil ?>"></td>
			</tr>
			<tr>
				<td>waktu_tampil</td>
				<td><input type="time" name="waktu_tampil" value="<?php echo $u->waktu_tampil ?>"></td>
			</tr>
			<tr>
				<td>lokasi_tampil</td>
				<td><input type="text" name="lokasi_tampil" value="<?php echo $u->lokasi_tampil?>"></td>
			</tr>
			<tr>
				<td>tari_1</td>
				<td><input type="text" name="tari_1" value="<?php echo $u->tari_1 ?>"></td>
			</tr>
			<tr>
				<td>tari_2</td>
				<td><input type="text" name="tari_2" value="<?php echo $u->tari_2 ?>"></td>
			</tr>
			<tr>
				<td>tari_3</td>
				<td><input type="text" name="tari_3" value="<?php echo $u->tari_3 ?>"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $u->keterangan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
				
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>