<?php
include "cek_login.php";
//session_start();
 
if (!empty($_SESSION['username_admin'])) {
        header('location:../admin/login.php');
}
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
<style type="text/css">
h3
{
	text-align:center;
}
</style>

	<title>Adminsitrator</title>
</head>
	
    <body>
    	<table>
        </table>
    	
        
        
        
        <?php


//include "../admin/koneksi.inc";

	



/*if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo "<script> alert ('Username dan Password belum diisi!'); </script>";
    } else if ($_GET['error'] == 2) {
        echo "<script> alert ('Username belum diisi!'); </script>";
    } else if ($_GET['error'] == 3) {
        echo "<script> alert ('Password belum diisi!'); </script>";
    } else if ($_GET['error'] == 4) {
        echo "<script> alert ('Username dan Password tidak terdaftar!'); </script>";
    }
}*/
?>

<form action="../admin/otentikasi.php"  method="post"  enctype="multipart/form-data">
   	  <h3> Welcome Member</h3>
  <table width="276" height="87" border="0" align="center">
    <tr>
            <td width="61">Username</td>
            <td width="3">:</td>
            <td width="190"><input name="username_admin" type="text" id="username_admin" size="30" maxlength="45"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="pass_admin" type="password" id="pass_admin" size="30" maxlength="45"></td>
          </tr>
        </table>
<p align="center">
        <input type="submit" name="Login" id="button" value="Login">
        <input type="reset" name="Reset" id="Reset" value="Reset">
  </p>
</form>

    </body>
</html>