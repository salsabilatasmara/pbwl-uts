<?php

include "app/satuan.php";

$satuan = new satuan();
$rows = $satuan->tampil();

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

require_once "app/satuan.php";

$played = new satuan();
$rows = $played->input();

?>

<center>
<table>
     <form method="POST" action="proses_satuan.php">
        <tr>
            <td>ID Satuan</td>
            <td><input type="text" name="satuan_id"></td>
        </tr>   
        <tr>
            <td>Jenis Barang</td>
            <td><input type="text" name="jenis_satuan"></td>
        </tr>
        <tr>
            <td>Harga per PCS</td>
            <td><input type="text" name="hrg_satuan"></td>
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