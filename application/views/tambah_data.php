<!DOCTYPE html>
<html>
<head>
	<title>tambah data</title>
</head>
<body>

	<form action="<?php echo base_url(). 'index.php/MyController/tambah'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Jenis Paket</td>
				<td><input type="text" name="jenis_paket"></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>no_ktp</td>
				<td><input type="text" name="no_ktp"></td>
			</tr>
			<tr>
				<td>Tanggal Tampil</td>
				<td><input type="text" name="tanggal_tampil"></td>
			</tr>
			<tr>
				<td>Waktu Tampil</td>
				<td><input type="text" name="waktu_tampil"></td>
			</tr>
			<tr>
				<td>Lokasi Tampil</td>
				<td><input type="text" name="lokasi_tampil"></td>
			</tr>
			<tr>
				<td>tari_1</td>
				<td><input type="text" name="tari_1"></td>
			</tr>
			<tr>
				<td>tari_2</td>
				<td><input type="text" name="tari_2"></td>
			</tr>
			<tr>
				<td>tari_3</td>
				<td><input type="text" name="tari_3"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
			<td>	
			</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
	</body>
</html>
	
	
