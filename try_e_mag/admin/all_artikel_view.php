<?php
include "../admin/koneksi.inc";
include "../admin/cek_login.php";

$ambil_artikel1=("SELECT 
id_news,
judul_berita_news,
sinopsis_berita_news,
isi_berita_news,
foto_news,
kategori,
penerbit,
link_news,
tanggal_post
 FROM artikel_news ");
	$eksekusi1=mysql_query($ambil_artikel1);
	 //$tampil_artikel  = $ambil_artikel->fetch(PDO::FETCH_ASSOC);
	while($tampil_artikel1=mysql_fetch_array($eksekusi1))
	{
	$id_news=$tampil_artikel1['id_news'];
	$Judul_Berita_News=$tampil_artikel1['judul_berita_news'];
  	$Sinopsis_Berita_News=$tampil_artikel1['sinopsis_berita_news'];
  	$Isi_Berita_News=$tampil_artikel1['isi_berita_news'];
  	$foto_news=$tampil_artikel1['foto_news'];
  	$Kategori=$tampil_artikel1['kategori'];
  	$penerbit=$tampil_artikel1['penerbit'];
  	$Link_News=$tampil_artikel1['link_news'];
  	$tanggal_post=$tampil_artikel1['tanggal_post'];


?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
<title>Administrator - All Article Order by Kategori</title>
<link rel="shortcut icon" type="image/x-icon" href="../icons/machine2.png" />
<style type="text/css">
table 
{
	
	text-align:center;
}

#fielx
{
	background-color:#009966;
	color:#F6F6F6;
	font-size:13px;
	border-radius:9px;
	
	
	
}
.kanpas
{
	width:350px;
	height:300px;
	background-color:#EDEDED;
	border:1.75px solid #252525;
	border-radius:11px;
}
#palue
{
	border:3px #FF6666 dotted;
	border-radius:4px;
}
</style>
<title>Administrator</title>
</head>

<body>
<center>
<div class="kanpas">
<table width="318" border="0" align="center">
<tr>
	<td></td>
</tr>
  <tr>
    <td width="62" id="fielx">ID</td>
    <td width="151" id="palue"><?php echo $id_news; ?></td>
      </tr>
  <tr>
    <td height="37" id="fielx">Kategori</td>
    <td id="palue"><?php echo $Kategori; ?></td>
  </tr>
  <tr>
    <td height="70" id="fielx">Judul</td>
    <td id="palue"><?php echo $Judul_Berita_News; ?></td>
  </tr>
  <tr>
    <td height="100" id="fielx">Foto</td>
    <td id="palue"><img src="<?php if($foto_news!=''){echo '../foto_artikel/'.$foto_news;}else{echo "../admin/img/unknown.jpg";}?>" height="75" width="75" /></td>
  </tr>
</table>
</body>
</div>
<br>
<?php } ?>