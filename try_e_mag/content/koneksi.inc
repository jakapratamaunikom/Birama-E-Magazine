<?php

$host="localhost";
$user="root";
$pass="";
$database="e_magazine_birama";

	$koneksi=mysql_connect
			($host,$user,$pass);
				if (! $koneksi)
				{	
					echo ("Koneksi Gagal");
				}
				
			//memilih database	
				mysql_select_db($database)			
			 	or die ("Database tidak ditemukan");

	

	
										

?>