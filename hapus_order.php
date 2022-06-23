<?php

include "app/order.php";


$track = new order();
$row = $track->delete($id);
if($track){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='tampilan_order.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba lagi');document.location='tampilan_order.php'</script>";
}
?>


