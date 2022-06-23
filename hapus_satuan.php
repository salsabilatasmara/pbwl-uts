<?php

include "app/satuan.php";


$played = new satuan();
$row = $played->delete($id);
if($played){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='tampilan_satuan.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba lagi');document.location='tampilan_satuan.php'</script>";
}
?>