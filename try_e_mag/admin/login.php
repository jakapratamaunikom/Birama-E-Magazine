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

<!DOCTYPE html>
<head>
<style type="text/css">
h3
{
	text-align:center;
}
</style>
<title>Administrator - Login </title>
<link rel="shortcut icon" type="image/x-icon" href="../icons/machine2.png" />   
</head>
<body>
<form action="../admin/otentikasi.php"  method="post"  enctype="multipart/form-data">
   	  <h3 style="font-family:'century Gothic'; font-size:large; text-shadow:#336699 1px 2px 3px;"> Welcome Admin</h3>
  <fieldset style="border-radius:10px; border:#3366CC 2px dotted;">  
  <legend style="font-family:'century Gothic'; font-size:large; text-shadow:#444444 1px 2px 3px;">Login</legend>
  <table width="276" height="87" border="0" align="center">
    <tr>
            <td width="61" style="font-family:'century Gothic'; font-size:large; text-shadow:#444444 1px 2px 3px;">Username</td>
            <td width="3">:</td>
            <td width="190"><input name="username_admin" type="text" id="username_admin" size="30" maxlength="45"></td>
          </tr>
          <tr>
            <td style="font-family:'century Gothic'; font-size:large; text-shadow:#444444 1px 2px 3px;">Password</td>
            <td>:</td>
            <td><input name="pass_admin" type="password" id="pass_admin" size="30" maxlength="45"></td>
          </tr>
        </table>
<p align="center">
        <input type="submit" name="Login" id="button" value="Login">
        <input type="reset" name="Reset" id="Reset" value="Reset">
  </p>
</form>
</fieldset>
<br><br><br>
<center>
<div style="width:600px; height:65px; border-radius:13px; background-color:#F8F8F8; border:#0066CC inset 2px;">
<div align="center" style="font-family:'century Gothic'; font-size:x-large; color:; text-shadow:#555555 1px 2px 3px;">  &copy; 2014 -  Birama Unikom  </div>
<div  align="center" style="font-family:'century Gothic'; font-size:x-large; color:; text-shadow:#555555 1px 2px 3px;">   </div>
<div  align="center" style="font-family:'century Gothic'; font-size:x-large; color:#333399; text-shadow:#555555 1px 2px 3px;"> |--      Developed By : <font color="#CC0033">IT Team</font><font color="#555555"> BIRAMA UNIKOM</font>      --|<br> </div>

</div>
</center>
</body>

</html>