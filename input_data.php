<?php
	$connect = mysqli_connect("127.0.0.1","root","","sppd_gubsu");
	
	if (!$connect) {
		die('Could not connect : ' . mysqli_error());
	}
	$nip_pemberi = $_POST['inputNIP1'];
	$nama_pemberi = $_POST['inputNama'];
	$jabatan = $_POST['inputJabatan'];
	$nip_penerima = $_POST['inputNIP2'];
	$nama_penerima = $_POST['inputNama'];
	$nama_pemberi = $_POST['inputNama'];
	$nama_pemberi = $_POST['inputNama'];
?>