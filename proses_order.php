<?php

include_once "app/order.php";

$track = new order();

if ($_POST['btn-simpan']) {
	$track->input();
	header("location:index.php?page=tampilan_order");
}

if ($_POST['btn-edit']) {
	$track->update();
	header("location:index.php?page=tampilan_order");
}

if ($_GET['delete-id']) {
	$track->delete($_GET['delete-id']);
	header("location:index.php?page=tampilan_order");
}