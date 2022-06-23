<?php

include_once "app/kiloan.php";

$album = new kiloan();

if ($_POST['btn-simpan']) {
	$album->input();
	header("location:index.php?page=tampilan_kiloan");
}

if ($_POST['btn-edit']) {
	$album->update();
	header("location:index.php?page=tampilan_kiloan");
}

if ($_GET['delete-id']) {
	$album->delete($_GET['delete-id']);
	header("location:index.php?page=tampilan_kiloan");
}