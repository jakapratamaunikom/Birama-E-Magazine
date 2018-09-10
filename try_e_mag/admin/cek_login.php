<?php
session_start();
 
//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username_admin']) || empty($_SESSION['username_admin'])) {
	
	//tampilan pesan kesalahan
	
		 echo "<script> alert ('Anda harus login terlebih dahulu !!!!'); document.location.href='../admin/login.php'; </script>"; 
	
    //redirect ke halaman login
		
	
   // header('location:../admin/login.php');
}
?>