<?php

include "app/kiloan.php";

$kiloan = new kiloan();
$rows = $kiloan->tampil();

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

require_once "app/kiloan.php";

$album = new kiloan();
$rows = $album->input();

?>

<center>
<table>
     <form method="POST" action="proses_kiloan.php">
        <tr>
            <td>ID Kiloan</td>
            <td><input type="text" name="kiloan_id"></td>
        </tr>
            <td>Jenis Paket</td>
            <td><input type="text" name="jenis_kiloan"></td>
        </tr>
        <tr>
            <td>Jenis Pelayanan</td>
            <td><input type="text" name="pel_kiloan"></td>
        </tr>
        <tr>
            <td>Harga per Kilo</td>
            <td><input type="text" name="hrg_kiloan"></td>
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