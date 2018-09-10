<?php 
include "../admin/koneksi.inc";

if (isset($_GET['judul_berita_news'])) 
{
    $ambil_artikel=mysql_query
	("SELECT * FROM artikel_news WHERE judul_berita_news = '$_GET[judul_berita_news]'");
	 //$tampil_artikel  = $ambil_artikel->fetch(PDO::FETCH_ASSOC);
	 $tampil_artikel=mysql_fetch_array($ambil_artikel);
	 
	 
$ID_News=$tampil_artikel['id_news'];	 
  $Judul_Berita_News=$tampil_artikel['judul_berita_news'];
  $Sinopsis_Berita_News=$tampil_artikel['sinopsis_berita_news'];
  $Isi_Berita_News=$tampil_artikel['isi_berita_news'];
  
  

  

  $penerbit=$tampil_artikel['penerbit'];
  $Link_News=$tampil_artikel['link_news'];



}
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administrator - Update Artikel</title>
 <link rel="shortcut icon" type="image/x-icon" href="../icons/machine2.png" />   
<style type="text/css">
<!--
.kolom_kiri {	text-align:left;
}
.gotik
{
	font-family:"century Gothic"; 
	font-size:13px;
	text-align:center;
}
-->
</style>


    	<script type="text/javascript" src="css/ckeditor/ckeditor.js"></script>
</head>

<form method="post" action="<?php echo $PHP_SELF ?>" enctype="multipart/form-data">

<div style="border-radius:8px; background-color:#EEEEEE; border:solid #818181 0.25px;">
<Div style="background-color:#0099CC; border-radius:6px;"><br><br><br></Div>


<h3 style="color:#333333#0099CC; font-family:Verdana, Arial, Helvetica, sans-serif; size:2em; text-shadow:2px 2px 1px #0099CC; "><center>FORM UPDATE ARTIKEL</center></h3>
<h1 style="color:#333333#0099CC; font-family:'century Gothic'; size:5em; text-shadow:2px 2px 1px #0099CC; padding-bottom:-20px;"> <center>Birama </center></h1>

<h5 style="color:#333333#0099CC; font-family:'century Gothic'; padding-top:-30px; "> <center>" Bacaan Interaktif Aktualisasi Mahasiswa "</center></h5>


<table width="335" border="0" align="center">
  <tr>
    <td width="61" class="gotik">Judul Berita</td>
    <td width="3">:</td>
    <td width="249"><input name="judul_berita_news" type="text" id="judul_berita_news" value="<?php echo $Judul_Berita_News; ?>" size="50" maxlength="50"></td>
  </tr>
  <tr>
    <td  class="gotik">Sinopsis Berita</td>
    <td>:</td>
    <td><textarea name="sinopsis_berita_news" cols="50" rows="9" id="sinopsis_berita_news"><?php echo $Sinopsis_Berita_News; ?></textarea>      </td>
  </tr>
  <tr>
    <td class="gotik">Isi Berita</td>
    <td>:</td>
    <td><textarea class="ckeditor" name="isi_berita_news" cols="100" rows="20">
	<?php echo $Isi_Berita_News; ?> </textarea>
      <script type="text/javascript">
	  		
			var editor = CKEDITOR.replace('isi_berita_news');
			
      </script></td>
  </tr>
  <tr>
    <td class="gotik">Foto Artikel</td>
    <td>:</td>
    <td><span class="kolom_kiri">
      <input type="file" name="foto_news" id="foto_news" />
      <input type="hidden" name="MAX_FILE_SIZE" values="30000000000" />
    </span></td>
  </tr>
  <tr>
    <td class="gotik">Penerbit Artikel</td>
    <td>:</td>
    <td><input name="penerbit" type="text" id="penerbit" value="<?php echo $penerbit; ?>
" size="45" /></td>
  </tr>
  <tr>
    <td class="gotik">Link Website</td>
    <td>:</td>
    <td><input type="text" name="link_news" id="link_news" value="<?php echo $Link_News; ?>" /></td>
  </tr>
  <tr>
  	<td colspan="3" align="center"><input type="submit" value="Update" name="Update" id="Update" /> 
  	<input type="reset" value="Reset" name="Reset" id="Reset" />
  	<a href="../admin/index2.php"><input type="button" name="Back" id="Back" value="Back" />
  	</a></td>
	</tr>   
</table>

</form>


       <!-- footer canvas -->
    		  <div align="left" style="background-color:#3F3D44; background-repeat:repeat-x; border:double #333333; border-radius:10px;">
     <div style="float:right; color:#838383; font-size:1.55em; font-family:'century Gothic'; margin-top:10px; margin-right:25px;">Question and Support<p style="font-family:'century Gothic'; font-size:11px; color:#CCCCCC;"><font color="#FF3300">Email</font> persbiramaunikom@gmail.com</p>
     </div>
        
        	
        <p style="padding-top:5px; border-radius:10px; color:#CCCCCC; font-size:0.85em; font-family:'century Gothic';">@2014 - BIRAMA -  Unikom - Bandung             </p>
        <p style=" color:#CCCCCC; font-size:0.85em; font-size:0.85em; font-family:'century Gothic';">     All right reserved     </p></div> 
    
    
   
   
   
   
   

</html>
</body>
<?php
// peletakan script PHP
  require "../admin/koneksi.inc";
	if (!empty($_POST[Update])) 
	{

$judul=$_POST['judul_berita_news'];
$sinopsis=$_POST['sinopsis_berita_news'];
$Isi_Berita_News=$_POST['isi_berita_news'];


/*  proses foto*/
$folder='../foto_artikel/';
$folder = $folder . basename( $_FILES['foto_news']['name']);

$foto_newsz =($_FILES['foto_news']['name']);

$terbitan=$_POST['penerbit'];
$Link_News=$_POST['link_news'];
$tanggal_post=date('Y-m-d H:i:s');









// validasi masukan data menuju database

/*if ($_POST[judul_berita_news]=='')
{
	echo "<script>alert ('Judul artikel tidak boleh kosong, pembuatan artikel  dibatalkan !!!'); document.location.href='javascript:history.back();'</script>";
	$ada_error=true;

}

	if ($_POST[sinopsis_berita_news]=='')
	{	
		echo "<script>alert ('Sinopsis berita tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
			$ada_error=true;

	}
		if ($_POST[isi_berita_news]=='')
		{
			echo "<script>alert ('Isi berita tidak boleh kosong,  pembuatan artikel dibatalkan !!!'); 	document.location.href='javascript:history.back();';</script>";
				$ada_error=true;

		}
			/*if (trim($_POST[foto_news]==''))
			{
				echo "<script>alert ('Nomer Telepon tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
					$ada_error=true;

			} */
					/*if ($_POST[kategori]=='')
				{
						echo "<script>alert ('Kategori tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
							$ada_error=true;

				}
						if ($_POST[penerbit]=='')
				{
						echo "<script>alert ('Penerbit tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
							$ada_error=true;

				}
						if ($_POST[link_news]=='')
					{
						echo "<script>alert ('Link download tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
							$ada_error=true;

					}					
	else
		if (!$ada_error)
		{	*/				
	

$pembaruan_berita=
			mysql_query("update artikel_news set
											judul_berita_news='$judul'			,
											sinopsis_berita_news='$sinopsis'		,
											isi_berita_news='$Isi_Berita_News'				,
											foto_news='$foto_newsz'	,
											penerbit='$terbitan'	,
											link_news='$Link_News',
											tanggal_post='$tanggal_post'			
												
						where judul_berita_news='$_GET[judul_berita_news]'");
						
						
 if(move_uploaded_file($_FILES['foto_news']['tmp_name'], $folder))
 {
 echo "<script> alert ('Terima Kasih'); </script>";
 }
 else {
 
 //Gives and error if its not
 echo "<script>alert ('Sorry, there was a problem uploading your file.'); </script>";
 }
						
						
if($pembaruan_berita)
			{
				echo "<script>alert ('Artikel anda telah diperbaharui..'); document.location.href='../admin/index2.php';</script>";
			}
else
				{
					echo "<script>alert ('Pembaruan artikel Gagal..');</script>";
				}					 				
	}
?>

