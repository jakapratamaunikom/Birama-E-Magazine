<?php
include "../admin/koneksi.inc";
include "../admin/cek_login.php";

?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
/* Navigasi menu dengan tabel*/
td
{
	text-transform:capitalize;
	size:13.5px;
	font-family:"century Gothic";
	text-align:center;
	
}

.tengah
{
	text-align:center;
}


/* canvas navigasi*/

.canvas
{
	width:450px;
	height:300px;
	border-radius:4.5px;
	border-left-radius-color:red;
	background-color:#EAEAEA;
	
}

a
{
	font-size:1.25em;
	font-family:"century Gothic";
	
}
a:link
{
	text-decoration:none;
	color:#454545;
	
}

a:hover
{
	background-color:#2572AF;
	border-radius:8em;
	padding:4px 6px 4px 6px;
	color:#E1E1E1;
	
}

a:active
{
	background-color:#F23539;
	color:#2572AF;
}


</style>

<title>Administrator</title>
</head>
<body>


<link rel="shortcut icon" type="image/x-icon" href="../icons/machine2.png" />
<div class="container">
    <div class="page-header">
    <hr size="30" color="#2572AF" width="100%" />
     <hr size="15" color="#F23539" width="35%" />
        <h1 id="timeline" style="text-align:center;">Administrator Panel</h1>
        <h2 id="timeline" style="text-align:center;">E-Magazine</h2>
    
        
    <hr size="15" color="#F23539" width="25%" /><br>
    <hr size="25" color="#2572AF" width="100%" />

    
<!-- canvas kolom logout -->
 <div style="border:#E4E4E4 3px dashed; float:right;">
    <div align="right" style="font-family:'century Gothic'; font-size:13.75px; text-decoration:none;  "><a href="../index.php" target="_blank"	>Preview Website</a> | <a href="../admin/index2.php">Refresh</a> | <a href="../admin/logout.php"> <font color="#FF0000">Logout</font></a></div>

</div><br>
<!-- end of canvas kolom logout -->   
    
    
    <br />  

	<p style="text-align:center; font-family:'century Gothic'; font-size:15px; text-transform:capitalize;"><font size="+7">A</font>
    dministrator
     <font size="+7">M</font>
     enu</p>
     
     
 
    <table border="0" align="center" class="tengah">
    <tr style="text-align:center;  font-size:1.25em; color:#010000; text-shadow:#557FAA 5px 1px 7px; ">	
    	<td style="border-radius:10px; border:dashed 1px;">ARTIKEL</td><td>&nbsp;</td><td style="border-radius:10px; border:dashed 1px;">FOTO</td><td>&nbsp;</td><td style="border-radius:10px; border:dashed 1px;">PENGUMUMAN</td>
    </tr>
    <tr>
    	<td><hr color="#F23539" ></td><td>&nbsp;</td><td><hr color="#00CC66"></td><td>&nbsp;</td><td><hr color="#6C6C6C"></td>
    </tr>
    <tr>
    	
    	<td><a href="?menu=input_artikel">Input artikel</a> </td> 
        <td>|</td>
        <td><a href="#">Upload Foto </a></td>
        <td>|</td>
        <td style="background-color:;"><a href="#">Input Pengumuman</a></td>
        
        
    </tr>
    <tr>    
        <td><a href="?menu=edit_artikel">Edit  / Hapus Artikel</a></td>
        <td> |</td>
        <td><a href="#">Edit / Hapus Foto</a></td>
        <td> |</td>
    </tr>
    <tr>    
        <td><a href="#"></a></td>
        <td> | </td>
        <td><a href="#"></a></td>
        <td> | </td>
    </tr>
    <tr>    
        <td> <a href="?menu=all_artikel_view">Tampilan Semua Artikel</a></td>
         <td> | </td>
         
        <td><a href="#">Tampilan Semua Foto</a></td>
        <td> | </td>
    </tr>
    
    <tr>
    	<td><hr color="#F23539" ></td><td>&nbsp;</td><td><hr color="#00CC66"></td><td>&nbsp;</td><td><hr color="#6C6C6C"></td>
    </tr>
   
   
    </table>  <br><br>   
    
    
 
    
    </div> <!-- end of container header -->
    
    
    
  <!-- Content Include-->  
    <div align="center" style="background-color:#F12225; background-repeat:repeat-x; border:double #333333;"><p style="padding-top:5px; border-radius:10px; color:#838383;">-------------------------------------------------------------------------------<font face="dimitri swank" size="+2" color="#CCCCCC">E - Magazine Birama</font><font color="#838383">----------------------------------------------------------------------- </font>     </p></div>
       
        <p>
        <!-- Peletakan Content-->
        	<!-- Peletakan Include PHP-->
            	<?php
		if ($_GET['menu']=='Home');
		else if ($_GET['menu']=='input_artikel')
					{include '../admin/input_artikel.php';}
					
		else if ($_GET['menu']=='edit_artikel') 		
					{include 	'../admin/all_artikel_edit.php';}
		
		else if ($_GET['menu']=='full_global_edit') 		
					{include 	'../admin/proses_rubah.php';}
					
		
					
		else if ($_GET['menu']=='all_artikel_view') 		
					{include 	'../admin/all_artikel_view.php';}
					
					
		else if ($_GET['menu']=='full_global_delete') 		
					{include 	'../admin/proses_hapus_artikel.php';}
		
					
					
					
					
		
					
		
				?>
			</p>	
            </div>
           
        	<!-- / Peletakan Content-->
        <!-- / Peletakan Include PHP-->
        
       <!-- footer canvas -->
    		  <div align="left" style="background-color:#3F3D44; background-repeat:repeat-x; border:double #333333; border-radius:10px;">
     <div style="float:right; color:#838383; font-size:1.55em; font-family:'century Gothic'; margin-top:10px; margin-right:25px;">Question and Support<p style="font-family:'century Gothic'; font-size:11px; color:#CCCCCC;"><font color="#FF3300">Email</font> persbiramaunikom@gmail.com</p>
     </div>
        
        	
        <p style="padding-top:5px; border-radius:10px; color:#CCCCCC; font-size:0.85em; font-family:'century Gothic';">@2014 - BIRAMA -  Unikom - Bandung             </p>
        <p style=" color:#CCCCCC; font-size:0.85em; font-size:0.85em; font-family:'century Gothic';">     All right reserved     </p></div> 
    
    
   
   
   
   
   
    
   
<hr size="30" color="#2572AF" width="100%" />
      
</body>
</html>

 
