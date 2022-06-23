<?php

include "app/kiloan.php";


$album = new kiloan();
$row = $album->delete($id);
if($album){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='tampilan_kiloan.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='tampilan_kiloan.php'</script>";
}
?>