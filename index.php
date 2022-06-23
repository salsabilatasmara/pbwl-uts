<?php
session_start();

if($_SESSION['status'] !="login"){
    header("location:../index.php");
}
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
                <li ><a href="tampilan_kiloan.php">Paket Kiloan</a></li>
                <li><a href="tampilan_satuan.php">Paket Satuan</a></li>
                <li><a href="tampilan_order.php">Order</a></li>
            </ul>
    </header>
    <section class="banner">
    </section>

        <footer>
            Copyright&copy; 2022 sa_tsmr
        </footer>
    </div>
</body>
</html>