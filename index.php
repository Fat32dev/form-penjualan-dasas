<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Penjualan</title>
	<link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

	<table class="table1" border="0" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Form Penjualan</font></center>
    </tr>
		<br><br>
		<form action="hasil.php" method="POST">
	<tr>
		<td>No Barang</td>
		<td>: <input type="text" name="no_barang" placeholder="Masukkan No Barang" required></td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td>: <input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" required></td>
	</tr>
	<tr>
		<td>Jumlah Barang</td>
		<td>: <input type="number" name="jumlah_barang" placeholder="Masukkan Jumlah Barang" required></td>
	</tr>
	<tr>
		<td>Harga Barang</td>
		<td>: <input type="number" name="harga_barang" placeholder="Masukkan Harga Barang" required></td>
	</tr>
	<tr>
		<td></td>
		<td style="text-align: center;"><input type="submit" name="laporan" value="Laporan" /td>
	</tr>
	</table>

</body>
</html>