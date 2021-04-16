<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Laporan Penjualan</title>
    <link rel="stylesheet" href="style1.css" type="text/css" media="all" />
</head>
<body>

    <table class="table1" border="3" cellspacing="0" cellpadding="5" align="center">
    <tr>
        <center><font size="7" face="Century Gothic" >Form Laporan Penjualan</font></center>
    </tr>
    <tr>
        <br>
            <tr>
                <center>
                <a href="index.php" style="padding:0.2% 0.4%;background-color :#ff1b5b; color:#fff;border-radius:2px;text-decoration:none;">🔃Kembali</a>
                </center>
            </tr>
        <br>
    </tr>
    <tr>
        <th>No Barang</th>
        <th >Nama Barang</th>
        <th >Qty</th>
        <th width="2" align="left">Harga</th>
        <th width="2" align="left">Total</th>
    </tr>

    <tr>

    <?php

$no = $_POST['no_barang'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah_barang'];
$harga = $_POST['harga_barang'];

 
$hitung = $harga * $jumlah;

?>
    <td><?php echo $no ?></td>
    <td><?php echo $nama ?></td>
    <td><?php echo $jumlah ?></td>
    <td><?php echo $harga ?></td>
    <td><?php echo $hitung ?></td>
    </tr>
    
    </table>

</body>
</html>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>:Penjualan</title>
    <style media="screen">
      .link{
        font-family: sans-serif;
        color:blue;
      }
    </style>
  </head>
   
  </body>
</html>