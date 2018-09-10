<?php
include "../admin/cek_login.php";

?>
<!DOCTYPE HTML>
<head>
<title>Cakru Birama 2014</title>
<style>
.kolom_kiri
{
	text-align:left;
}

/*td{
	color:#333333; text-shadow: 0.25px 0.25px 0.5px #0099CC; size:1.25em; font-family:"lucida Bright"; 
}	*/

</style>
	<!-- pemanggilan ckeditor untuk textarea-->
    
    	<script type="text/javascript" src="css/ckeditor/ckeditor.js"></script>
        <!--<script type="text/javascript" src="css/ckeditor/styles.js"></script>-->
        
</head>
<body>
<!-- <link href="css/ckeditor/contents.css" rel="stylesheet" type="text/css" >-->

<div style="border-radius:8px; background-color:#EEEEEE; border:solid #818181 0.25px;">
<Div style="background-color:#0099CC; border-radius:6px;"><br><br><br></Div>

<form action="proses_input_news.php" method="post" enctype="multipart/form-data">
<h3 style="color:#333333#0099CC; font-family:Verdana, Arial, Helvetica, sans-serif; size:2em; text-shadow:2px 2px 1px #0099CC; "><center>FORM ARTIKEL</center></h3>
<h1 style="color:#333333#0099CC; font-family:'century Gothic'; size:5em; text-shadow:2px 2px 1px #0099CC; padding-bottom:-20px;"> <center>Birama </center></h1>

<h5 style="color:#333333#0099CC; font-family:'century Gothic'; padding-top:-30px; "> <center>" Bacaan Interaktif Aktualisasi Mahasiswa "</center></h5>
  <table width="530" border="0" align="center">
    
    <tr>
      <td>Judul Berita</td>
      <td>:</td>
      <td class="kolom_kiri"><input name="judul_berita_news" type="text" id="judul_berita_news" size="40" maxlength="120"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Sinopsis Berita</td>
      <td>:</td>
      <td class="kolom_kiri"><textarea name="sinopsis_berita_news" id="textfield"  cols="50" rows="9"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24">Isi Berita</td>
      <td>:</td>
      <td class="kolom_kiri"><textarea class="ckeditor" name="isi_berita_news" cols="100" rows="20"></textarea>
      <script type="text/javascript">
	  		
			var editor = CKEDITOR.replace('isi_berita_news');
			
      </script>
      </td>
    </tr> 
    <tr>
      <td height="24">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="24">Foto</td>
      <td>:</td>
      <td class="kolom_kiri"><input type="file" name="foto_news" id="foto_news">
        <input type="hidden" name="MAX_FILE_SIZE" values="30000000000"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td>:</td>
      <td class="kolom_kiri"><select name="kategori" id="kategori">
        <option>News</option>
        <option>Unikom Activities</option>
        <option>Biografi</option>
        <option>Community Zone</option>
        <option>Cerpen</option>
        <option>Comic</option>
        <option>Corat-Coret Mahasiswa</option>
      </select>      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Penerbit Artikel</td>
      <td>:</td>
      <td class="kolom_kiri"><select name="penerbit" id="kategori3">
        <option>HIMA IF</option>
        <option>Funco</option>
        <option>HIMA TK</option>
        <option>HIMA ELEKTRO</option>
        <option>HIMA TI</option>
        <option>HIMA TS</option>
        <option>HIMA SI</option>
        <option>UKM Karate</option>
        <option>UKM Pencak Silat</option>
        <option>UKM Bulu Tangkis</option>
        <option>UKM Bola Voli</option>
        <option>UKM Bola Basket</option>
        <option>UKM Futsal</option>
        <option>HIMA Arsitektur</option>
        <option>HIMA PWK</option>
        <option>HIMA AK</option>
        <option>HIMA IK</option>
        <option>HIMA Manajemen</option>
        <option>HIMA Sasta Inggris</option>
        <option>HIMA Sastra Jepang</option>
        <option>HIMA Ilmu Hukum</option>
        <option>Hima Hubungan Internasional</option>
        <option>Divisi Robotika</option>
        <option>Divisi Rocket</option>
              </select>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Link website</td>
      <td>:</td>
      <td class="kolom_kiri"><input name="link_news" type="text" id="link_news" size="40" maxlength="120"></td>
    </tr>
  </table>
  <p align="center">
    <input type="submit" name="Proses" id="Proses" value="Proses">
    <input type="reset" name="Reset" id="button" value="Reset">
  </p>
  <br>
     <Div style="background-color:#0099CC; text-align:center; border-radius:5px;">
       <br>	
        <hr noshade width="70%">
  <p align="center" style="color:#4E4E4E; font-size:24px; font-weight:bolder;">Unit Kegiatan Mahasiswa Pers Birama Unikom</p>
  <p align="center"style="color:#4E4E4E; font-size:20px; font-weight:bolder;">Bacaan, Interaksi, dan Aktualisasi Mahasiswa</p>
  <p style="color:#4E4E4E; font-size:20px; font-weight:bolder;">2014</p>
    <hr noshade width="35%"><br>
    </Div>

  
</form>
</div>
</body>
</html>


