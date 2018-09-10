<?php

include "koneksi.inc";

if (isset($_GET['judul_berita_news'])) {
    $ambil_artikel=mysql_query("SELECT id_news,judul_berita_news,sinopsis_berita_news,isi_berita_news,foto_news,kategori,penerbit,link_news,tanggal_post FROM artikel_news WHERE judul_berita_news = '$_GET[judul_berita_news]'");
	 //$tampil_artikel  = $ambil_artikel->fetch(PDO::FETCH_ASSOC);
	 $tampil_artikel=mysql_fetch_array($ambil_artikel);
	 }
    
	

  $Judul_Berita_News=$tampil_artikel['judul_berita_news'];
  $Sinopsis_Berita_News=$tampil_artikel['sinopsis_berita_news'];
  $Isi_Berita_News=$tampil_artikel['isi_berita_news'];
  $foto_news=$tampil_artikel['foto_news'];
  $Kategori=$tampil_artikel['kategori'];
  $penerbit=$tampil_artikel['penerbit'];
  $Link_News=$tampil_artikel['link_news'];



	?>
    

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $tampil_artikel['judul_berita_news'];?> &#8220; E - Magazine Birama &#8221;</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="images/biramalogo.png" />
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    
        
</head>





<!-- content-->


        

  






		
       <!DOCTYPE html>
<html>
<head>
	<title><?php echo $tampil_artikel['judul_berita_news'];?> &#8220; E - Magazine Birama &#8221;</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="images/biramalogo.png" />
</head>





<!-- content-->


        

  




<div style="color:#0000ff; margin-bottom:10px; background-color:#FCFCFC; border-radius:12px; border:#333333 3px inset;">

	<!-- head atas-->
    	<div align="left" style="background-color:#3F3D44; background-repeat:repeat-x; border:double #333333; border-radius:10px; height:75px;">
     <div style="float:right; color:#838383; font-size:1.55em; font-family:'century Gothic'; margin-top:10px; margin-right:25px;">E - Magazine Birama<p style="font-family:'century Gothic'; font-size:11px; color:#CCCCCC;"><font color="#FF3300" style="font-family:'century Gothic';">Bacaan Interaktif Aktualisasi Mahasiswa</font></p>
     </div>
        
        	
        <div style=" margin-top:10px;border-radius:10px; color:#69C; font-size:1.75em;; font-family:'century Gothic'; padding-bottom:5px;"><?php echo $Kategori; ?>           </div>
        <div style=" color:#CCCCCC; font-size:0.85em; font-family:'century Gothic';"> Developing By : IT Team Birama  </div>
       </div> 
        <br />
    <!-- end of head atas -->

<div align="right" style="font-family:helvetica; font-size:1.15em; padding-left:-5px; color:#4A4A4A; font-weight:bold;"><p style="padding-right:30px; "><img src="images/biramalogo.png" height="35" width="35"  style="vertical-align:middle;"/> irama Magazine </p></div>
<table  border="0" align="center" cellpadding="3px">

  <tr height="30">
  
	<td colspan="3" style="text-align:center;">
	  <div style="color:#FFFFFF; font-weight:bold;">
  
	  <span><font color="#DC533F">
      <span class="center" style="text-transform:uppercase;">
      <font color="#5A5A5A" style="text-transform:uppercase; text-shadow:#BCBCBC 1px 2px 3px; font-size:1.75em;">
	  <?php echo $tampil_artikel['judul_berita_news']; ?></font></font></span>	<br /><br />
     <div align="center"><?php echo ('<font color="black">Penerbit : </font>' ); echo 
	 ('<font color="#DC533F">'.$tampil_artikel['penerbit'].'</font>'); ?>   </div>
      
        </div>	</td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
  </tr>
 
  <tr>
  	<td width="10%" align="center" valign="top" ><img src="<?php if($tampil_artikel['foto_news'] != ''){echo 'foto_artikel/'.$tampil_artikel['foto_news'];}else{echo "foto_artikel/unknown.jpg";}?>" height="300" width="250" style="border:#707070 4px outset; border-radius:13px; " /></td>
   </tr> 
  </table>  <br />
    
	<div  align="center" style="width:350px; height:700px; padding-left:150px; ">
    <div align="left" style="background-color:#F9F9F9; border-radius:13px; padding-left:8px; padding-bottom:5px; padding-right:5px; padding-top:5px; border:#3366CC 2px dashed;  color:#5A5A5A; font-family:verdana; width:800px; height:653px; word-wrap:break-word; ">
    <span><font color="">
      <p align="center" style="text-transform:uppercase;">
      <font style="text-transform:uppercase; text-shadow:#BCBCBC 1px 2px 3px; font-size:1.35em;">
      
	  <br><?php echo $tampil_artikel['judul_berita_news']; ?></font></font></p>
    
    <p align="left">
	
	<?php echo $tampil_artikel['isi_berita_news'];  ?></p>
    <br />
    
    <div style="border:#3366CC 2px dashed; float:right;  border-radius:8px;"> <?php echo $tampil_artikel['tanggal_post']; ?></div><br />
    <br />
    
    	
    
    
    
    </p>
    </p>
     <div align="left"><a href="<?php echo $Link_News; ?>"><img src="icons/Downloads.png"  height="45" width="45"/></a></div>
     
     
     <div align="left" style="background-color:#3F3D44; border:double #333333; border-radius:10px; height:90px;">
    
    <div><p style="padding-top:5px; text-align:center; border-radius:10px; color:#CCCCCC; font-size:0.85em; font-family:'century Gothic';">@2014 - BIRAMA -  Unikom - Bandung  
    
                 </p>
        <p style=" color:#CCCCCC; text-align:center; font-size:0.85em; font-size:0.85em; font-family:'century Gothic';">     All right reserved     </p>
    
    
 </div>    
     
     </div>
     	
    </div>
    
    
    
    
   </div>

     
     
     
     <!-- footer -->
     <div style="background-color:#313131; height:300px; border-radius:10px; font-family:helvetica;"> 
     
     
     <!-- sosial content -->

    
<hr noshade width="70%">
  <p align="center" style="color:#F4F4F4; font-size:24px; font-weight:bolder;">Unit Kegiatan Mahasiswa Pers Birama Unikom</p>
  <p align="center"style="color:#F4F4F4; font-size:20px; font-weight:bolder;">Bacaan, Interaksi, dan Aktualisasi Mahasiswa</p>
  <p align="center" style="color:#F4F4F4; font-size:20px; font-weight:bolder;">2014</p>
<hr noshade width="35%">

     <div class="first-footer">
						<div class="col-md-12">
							<div class="social-footer">
								<ul>
									<li><a href="http://www.facebook.com/" target="_blank" class="fa fa-facebook"></a></li>
									<li><a href="http://www.twitter.com/" target="_blank" class="fa fa-twitter"></a></li>
									<!--<li><a href="#" target="_blank" class="fa fa-dribbble"></a></li>
									<li><a href="#" target="_blank" class="fa fa-linkedin"></a></li>
									<li><a href="#" target="_blank" class="fa fa-rss"></a></li>-->
								</ul>
							</div> <!-- /.social-footer -->
						</div> <!-- /.col-md-12 -->
					
			</div> <!-- /.first-footer -->
     
     
     </div>
     </div>
        
        	
     
     
     
     
     
      </div> 
    <!-- end of footer canvas -->
    
    </div>
    
  
  
   
   
     
        </p>
      
      
	

	
	 
  



</div>






</div>






