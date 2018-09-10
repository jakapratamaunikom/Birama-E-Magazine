<?php
session_start(); 
include "../admin/koneksi.inc";


//tangkap data dari form login
$username = $_POST['username_admin'];
$password = $_POST['pass_admin'];
 
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
 
//cek data yang dikirim, apakah kosong atau tidak
/*if (empty($username) && empty($password)) {
    //kalau username dan password kosong
    header('location:../admin/login.php?error=1');
    break;
} else if (empty($username)) {
    //kalau username saja yang kosong
    header('location:../admin/login.php?error=2');
    break;
} else if (empty($password)) {
    //kalau password saja yang kosong
    //redirect ke halaman index
    header('location:../admin/login.php?error=3');
    break;
}
*/ 
$qur = mysql_query("select username_admin,pass_admin from admin where username_admin='$username' and pass_admin='$password'");

$proses_login=mysql_num_rows ($qur);

if ($proses_login == 1) {
    //kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
    
	 echo "<script> alert ('Terima Kasih'); </script>";
	  echo " <script> alert ('Welcome Admin... anda berhak mengakses halaman ini..'); document.location.href='../admin/index2.php'; </script>";
	$_SESSION['username_admin'] = $username;
    //header('location:../admin/index.php');
} else {
    //kalau username ataupun password tidak terdaftar di database
    echo "<script> alert ('Username dan password anda salah !!!!'); document.location.href='../admin/login.php'; </script>"; 
}


?>