<?php
	$q = intval($_GET['q']);

	$con = mysqli_connect('localhost','root','');
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con,"sppd_gubsu");
	$sql="SELECT * FROM karyawan WHERE nip = '".$q."'";
	$result = mysqli_query($con,$sql);
	
	while ($row = mysqli_fetch_array($result)) {
		echo $row['jabatan'];
	}
	mysqli_close($con);
?>