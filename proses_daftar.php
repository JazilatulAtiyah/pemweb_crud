<?php 
	include 'koneksi.php';


	$id 					= $_POST['1'];
	$username			 	= $_POST['2'];
	$password 				= $_POST['3'];
	$nama					= $_POST['4'];
	$email					= $_POST['5'];
	$jk 					= $_POST['6'];
	$usia					= $_POST['7'];
	$alamat					= $_POST['8'];
	$regional				= $_POST['9'];
	$hak_akses 				= $_POST['10'];

	$sql = mysql_query("INSERT INTO data (id, username, password, nama, email, jk, usia, alamat, regional, privilage) 
		VALUES ('$id','$username', '$password', '$nama','$email', '$jk', '$usia', '$alamat', '$regional', '$hak_akses')") or die(mysql_error());

	if ($sql) {
		header('location:login.php');
	}

?>