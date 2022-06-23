
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
                <li ><a href="tampilan_kiloan.php">Paket Kiloan</a></li>
                <li><a href="tampilan_satuan.php">Paket Satuan</a></li>
                <li><a href="tampilan_order.php">Order</a></li>
            </ul>
    </header>
    <section class="banner">

    <section class="kotak">
        <nav class="tambahuser">
        <a href="tambah_satuan.php"><img src="layout/asset/images/tbh.png" width="30px"></a>
    </nav>
        <br><br>
<?php

require_once "app/satuan.php";

$satuan = new satuan();


?>

<center>
<table>
    <tr>
        <th>ID Satuan</th>
        <th>Jenis Satuan</th>
        <th>Harga</th>
        <th>Aksi</th>

    </tr>

    <?php foreach ($rows as $row) { ?>

        <tr>
            <td><?php echo $row['satuan_id']; ?></td>
            <td><?php echo $row['jenis_satuan']; ?></td>
            <td><?php echo $row['hrg_satuan']; ?></td>
            <td><img src="layout/asset/images/edit1.png">&nbsp;
            <img src="layout/asset/images/hapus2.jpg"></td>
        </tr>

    <?php } ?>
</table>
</center>
    </section>
    </section>

        <footer>
            Copyright&copy; 2022 sa_tsmr
        </footer>
    </div>
</body>
</html>