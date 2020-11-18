<?php
	$host = "ec2-3-213-106-122.compute-1.amazonaws.com";
	$user = "caezpqzytoslhz";
	$pass = "577563425eb029010b2ce4229390f0811d09920e53d05892286e967df896b935";
	$port = "5432";
	$dbname = "dc0e5b8t4qql4d";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>
