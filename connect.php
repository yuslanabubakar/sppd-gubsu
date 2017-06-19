<?php
	
	$connect = @mysql_connect('127.0.0.1','root','');
	if (!$connect) {
		die('Tidak bisa koneksi : ' . mysql_error());
	}
	mysql_select_db('mydb',$connect);
	
?>