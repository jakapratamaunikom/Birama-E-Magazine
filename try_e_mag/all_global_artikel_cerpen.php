<?php
include "koneksi.inc";


// memanggil username


   
	 
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
   $ambil_artikel1=("SELECT id_news,judul_berita_news,sinopsis_berita_news,isi_berita_news,foto_news,kategori,penerbit,link_news,tanggal_post FROM artikel_news where kategori ='Cerpen' order by kategori");
	$eksekusi1=mysql_query($ambil_artikel1);
	 //$tampil_artikel  = $ambil_artikel->fetch(PDO::FETCH_ASSOC);
	while($tampil_artikel1=mysql_fetch_array($eksekusi1))
	{
	
	 $Judul_Berita_News=$tampil_artikel1['judul_berita_news'];
  $Sinopsis_Berita_News=$tampil_artikel1['sinopsis_berita_news'];
  $Isi_Berita_News=$tampil_artikel1['isi_berita_news'];
  $foto_news=$tampil_artikel1['foto_news'];
  $Kategori=$tampil_artikel1['kategori'];
  $penerbit=$tampil_artikel1['penerbit'];
  $Link_News=$tampil_artikel1['link_news'];
  $tanggal_post=$tampil_artikel1['tanggal_post'];
	 
	
	
	/*$Foto_News=$choose['foto_news'];
	$Category=$choose['category'];*/
	
	
	?>
<!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" href="css/templatemo_style.css"  />
    </head>
<div style="color:#0000ff; margin-bottom:10px; background-color:#FCFCFC; border-radius:12px; border:#333333 3px inset;">

	<!-- head atas-->
    	<div align="left" style="background-color:#3F3D44; background-repeat:repeat-x; border:double #333333; border-radius:10px; height:75px;">
     <div style="float:right; color:#838383; font-size:1.55em; font-family:'century Gothic'; margin-top:10px; margin-right:25px;">E - Magazine Birama<p style="font-family:'century Gothic'; font-size:11px; color:#CCCCCC;"><font color="#FF3300" style="font-family:'century Gothic';">Bacaan Interaktif Aktualisasi Mahasiswa</font></p>
     </div>
        
        	
        <p style="padding-top:5px; border-radius:10px; color:#F33; font-size:1.75em;; font-family:'century Gothic';"><?php echo $Kategori; ?>           </p>
        <p style=" color:#CCCCCC; font-size:0.85em; font-family:'century Gothic';"> Developing By : IT Team Birama  </p>
       </div> 
        <br />
    <!-- end of head atas -->


<div style="font-family:helvetica; font-size:1.15em; float:right; padding-left:-5px; color:#4A4A4A; font-weight:bold;"><p style="padding-right:10px;"><img src="images/biramalogo.png" height="35" width="35" /> irama Magazine </p></div>
        <br /><br />
<table  border="0" align="center" cellpadding="3px">
<tr>
	<div style="border:#3366CC 2px dashed; float:left; border-radius:8px; padding-left:10px;">    <?php echo ('<font color="#DC533F">Posting : </font>'); echo $tanggal_post; ?></div>
    	
        	
        
    
    </div><br /><br />
    <br />
</tr>
  <tr height="30">
  
	<td colspan="3" style="text-align:center;">
	  <div style="color:#FFFFFF; font-weight:bold;">
  
	  <span class="left" style="margin-left:25px;"></span><span class="center" style="margin-left:25px;">&nbsp;<font color="#DC533F"><span class="center" style="text-transform:uppercase; text-shadow:#BCBCBC 1px 2px 3px; font-size:1.75em;"><font color="#4B4B4B" face="helvetica"><?php echo $Judul_Berita_News; ?></font></span></font></span>	<br />
     <div align="center"><?php echo ('<font color="black">Penerbit : </font>' ); echo 
	 ('<font color="#DC533F">'.$penerbit.'</font>'); ?>   </div>
      
        </div>	</td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
  </tr>
 
  <tr>
  	<td width="10%" align="center" valign="top" style="padding-top:10px; padding-left:10px; vertical-align:super;"><img src="<?php if($foto_news != ''){echo 'foto_artikel/'.$foto_news;}else{echo "foto_artikel/unknown.jpg";}?>" height="155" width="130" style="border:#707070 4px outset; border-radius:13px; " /></td>
    
    <td >
	<div  style="width:350px; height:150px; padding-left:30px; ">
    <div style="background-color:#F9F9F9; border-radius:13px; padding-left:8px; padding-bottom:5px; padding-right:5px; padding-top:5px; border:#3366CC 2px dashed; text-align:left; color:#494949; font-family:verdana; width:500px; height:165px; word-wrap:break-word;">
    <p><?php echo $Sinopsis_Berita_News;  ?><br />
    <p style="float:right;" > <a href="../try_e_mag/full_global_article_cerpen.php?page=full_global_artikel_cerpen&amp;id_news=<?php echo $id_news."&judul_berita_news=".$Judul_Berita_News; ?>" target="_blank"><img src="icons/readmore.png" height="50" width="75"/></a>
    	
    <div><a href="<?php echo $Link_News; ?>"><img src="icons/Downloads.png"  height="45" width="45"/></a></div>
    
    
    </p>
    </p>
    
    
   
    
    
    
    <!-- end of canvas -->
    </div>
    </div>
    <!-- end of canvas --> 
    
    
    
    </td>
   </tr> 
   </table> 
      <br />
         <br />
        </p>
      
      
	

	
	 
  
 <!-- footer canvas -->
    		  <div align="left" style="background-color:#3F3D44; background-repeat:repeat-x; border:double #333333; border-radius:10px;">
     <div style="float:right; color:#838383; font-size:1.55em; font-family:'century Gothic'; margin-top:10px; margin-right:25px;">Question and Support<p style="font-family:'century Gothic'; font-size:11px; color:#CCCCCC;"><font color="#FF3300">Email</font> persbiramaunikom@gmail.com</p>
     </div>
        
        	
        <p style="padding-top:5px; border-radius:10px; color:#CCCCCC; font-size:0.85em; font-family:'century Gothic';">@2014 - BIRAMA -  Unikom - Bandung             </p>
        <p style=" color:#CCCCCC; font-size:0.85em; font-size:0.85em; font-family:'century Gothic';">     All right reserved     </p></div> 
    <!-- end of footer canvas -->
</div>
<br>
<?php $Judul_Berita_News++;   }}?>
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