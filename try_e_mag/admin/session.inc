<?php

	session_start();
	if (!session_is_registered(it_team_birama_2014))

	{
		echo "<script> alert ('Anda tidak berhak untuk mengakses halaman ini'); </script>";
		exit;
	}

?>