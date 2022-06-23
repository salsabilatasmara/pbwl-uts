<?php

include "app/order.php";

$order = new order();
$rows = $order->tampil();

?>

<!DOCTYPE html>
<html>
<head>
    <title>OOP UTS</title>
    <link href="layout/asset/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>  
    <div class="atas">
        <div class="content">
            <ul>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>
        </div>
    </div>
    <header>
            <h1><a href="index.php">RAJA LAUNDRY</a></h1>
            <ul>
                <li><a href="tampilan_kiloan.php">Paket Kiloan</a></li>
                <li><a href="tampilan_satuan.php">Paket Satuan</a></li>
                <li><a href="tampilan_order.php">Order</a></li>
            </ul>
    </header>
    <section class="kotak">
        <br><br>
<?php

require_once "app/order.php";

$track = new order();
$rows = $track->input();

?>

<center>
<table>
     <form method="POST" action="proses_order.php">
        <tr>
            <td>ID Orderan</td>
            <td><input type="text" name="id_order"></td>
        </tr>
        <tr>
            <td>Nama Pemesan</td>
            <td><input type="text" name="nama_order"></td>
        </tr>
        <tr>
            <td>Tanggal Order</td>
            <td><input type="text" name="tgl_order"></td>
        </tr>
        <tr>
            <td>Jenis Paket</td>
            <td><input type="text" name="jenis_paket"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="Time" name="hrg_order"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn-simpan" class="tombol tombol-simpan"value="SIMPAN"></td>
        </tr>
</table>
</center>
</form>
    </section>

        <footer>
            Copyright&copy; 2022 sa_tsmr
        </footer>
    </div>
</body>
</html>