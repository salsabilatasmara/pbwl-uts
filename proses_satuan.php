<?php

include_once "app/satuan.php";

$played = new satuan();

if ($_POST['btn-simpan']) {
	$played->input();
	header("location:index.php?page=tampilan_satuan");
}

if ($_POST['btn-edit']) {
	$played->update();
	header("location:index.php?page=tampilan_satuan");
}

if ($_GET['delete-id']) {
	$played->delete($_GET['delete-id']);
	header("location:index.php?page=tampilan_satuan");
}