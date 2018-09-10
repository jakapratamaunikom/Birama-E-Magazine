<?php
include "koneksi.inc";
//include "../admin/cek_login.php";

// memanggil username
$Panggil_id=$_GET[id_news];
$ambil_artikel=mysql_query ("select id_news,judul_berita_news,sinopsis_berita_news,foto_news,penerbit,link_news,tanggal_post from artikel_news where ketegori='Community Zone'");
$tampil_artikel=mysql_fetch_array($ambil_artikel);
	 
	 $Judul_Berita_News=$tampil_artikel[judul_berita_news];
	 $Sinopsis_Berita_News=$tampil_artikel[sinopsis_berita_news];
	 $foto_news=$tampil_artikel[foto_news];
	 $penerbit=$tampil_artikel[penerbit];
	 $Link_News=$tampil_artikel[link_news];
	 
// akhir pemanggilan username
	 
$sqlCount="select count(id_news) from artikel_news order by tanggal_post desc";
$rsCount=mysql_fetch_array(mysql_query($sqlCount));
$files=$rsCount[0];
$page=isset($_GET['page']) ? $_GET['page'] : 1;
$limit=5;
$start_from=$limit * ($page - 1);
$sql_limit="select * from artikel_news order by tanggal_post desc limit $start_from, $limit";
$result=mysql_query($sql_limit);
$all="select * from artikel_news";
$check=mysql_num_rows(mysql_query($all));
if($check<1){
  echo "<div align='center' style='color:#DC533F; text-shadow:2px 2px 2px black; margin-top:100px;'><h2>Belum ada satupun artikel disini</h2></div>";}
else{
  while ($choose=mysql_fetch_array($result)) {
	$id_news=$choose['id_news'];
	$Judul_Berita_News=$choose['judul_berita_news'];
	$Sinopsis_Berita_News=$choose['sinopsis_berita_news'];
	$foto_news=$choose['foto_news'];
	$penerbit=$choose['penerbit'];
	$Link_News=$choose['link_news'];
	
	/*$Foto_News=$choose['foto_news'];
	$Category=$choose['category'];*/
	
	
	?>
<div style="color:#0000ff; padding:10px; margin:10px; background-color:#EFEFEF; border-radius:6px; border:#333333 1px solid;" id="all">


<table width="100%" border="0" align="center" cellpadding="3px">
  <tr height="30">
	<td colspan="3">
	  <div id="menu_title" style="color:#FFFFFF; font-weight:bold;">
	  <span class="left" style="margin-left:25px;"></span><span class="center" style="margin-left:25px;">&nbsp;<font color="#DC533F"><span class="center" style="margin-left:25px;"><font color="#DC533F"><?php echo $Judul_Berita_News; ?></font></span></font></span>	  </div>	</td>
  </tr>
  <tr>
  	<td width="30%" align="center" valign="top" scope="col" style="padding-top:10px;"><img src="<?php if($foto_news != ''){echo '../foto_artikel/'.$foto_news;}else{echo "../foto_artikel/unknown.jpg";}?>" height="75" width="75" /></td>
    <td colspan="2" scope="col" valign="top" style="padding:10px; color:#5D5D5D; font-weight:bolder;"><?php echo $Sinopsis_Berita_News; ?> <br />
    	<?php echo ('Oleh :'); echo $penerbit; ?>    <br />
        <div style="float:right;"><a href="<?php echo $Link_News; ?>"><img src="../icons/Downloads.png"  height="80" width="80"/></a></div>
      </td>
  </tr>
  <tr>
	<td colspan="2" valign="top" style="padding-left:20px; width:50%;">
	  Posted : <?php echo $tanggal_post; ?>	</td>
	<td valign="top" align="right">
	  <a href="../index.php?menu=full_global_artikel&amp;id=<?php echo $id_news."&judul_berita_news=".$Judul_Berita_News; ?>"><img src="../icons/readmore.png" height="55" width="100"/></a>	</td>
  </tr>
</table>
</div>
<?php $Judul_Berita_News++; }} ?>
<div style="color:; margin:10px; padding:15px;" align="center">
<?php
if($Judul_Berita_News==''){}
else{
  $all_page=ceil($files / $limit);
  echo 'Halaman: ';
  for($i=1; $i <=$all_page; $i++){
	if($page !=$i){echo '[<a href="?menu=all_global_artikel&page='.$i.'">'.$i.'</a>] ';}
	else{echo "[$i] ";}}}
?>
</div>