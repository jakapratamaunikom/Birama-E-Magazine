
<?php
require"../admin/koneksi.inc";

//$Nama=$_SESSION[nama];

//require_once "fnc_pendaftaran.php";

//pemanggilan fungsi (validasi)
//cek_pendaftaran();
	
	


	//proses memasukkan ke tabel database //field database
$ada_error=false;

// proses $_POST variabel ke tabel database
$id_news=$_POST['id_news'];
$Judul_Berita_News=$_POST['judul_berita_news'];
$Sinopsis_Berita_News=$_POST['sinopsis_berita_news'];
$Isi_Berita_News=$_POST['isi_berita_news'];



$Kategori_News=$_POST['kategori'];
$penerbit=$_POST['penerbit'];
$Link_News=$_POST['link_news'];

/*  proses foto*/
$folder='../foto_artikel/';
$folder = $folder . basename( $_FILES['foto_news']['name']);

$foto_news =($_FILES['foto_news']['name']);
$tanggal_post=date('Y-m-d H:i:s');

/*$name_photo=$_FILES ['foto_news']['name'];
$upload_photo=$dir.$name_photo;
$temp_photo=$_FILES ['foto_news']['tmp_name'];
$proses_photo=move_uploaded_file($_FILES['foto_news']['tmp_name'],$upload_photo);
*/







if ($_POST['judul_berita_news']=='')
{
	echo "<script>alert ('Judul artikel tidak boleh kosong, pembuatan artikel  dibatalkan !!!'); document.location.href='javascript:history.back();'</script>";
	$ada_error=true;

}

	if ($_POST['sinopsis_berita_news']=='')
	{	
		echo "<script>alert ('Sinopsis berita tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
			$ada_error=true;

	}
		if ($_POST['isi_berita_news']=='')
		{
			echo "<script>alert ('Isi berita tidak boleh kosong,  pembuatan artikel dibatalkan !!!'); 	document.location.href='javascript:history.back();';</script>";
				$ada_error=true;

		}
			/*if (trim($_POST[foto_news]==''))
			{
				echo "<script>alert ('Nomer Telepon tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
					$ada_error=true;

			} */
					if ($_POST['kategori']=='')
				{
						echo "<script>alert ('Kategori tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
							$ada_error=true;

				}
						if ($_POST['penerbit']=='')
				{
						echo "<script>alert ('Penerbit tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
							$ada_error=true;

				}
						if ($_POST['link_news']=='')
					{
						echo "<script>alert ('Link download tidak boleh kosong, pembuatan artikel dibatalkan !!!'); document.location.href='javascript:history.back();';</script>";
							$ada_error=true;

					}					
	else
		{					
	
			
			
			
			
				
			
			
	
$proses=mysql_query("insert into artikel_news
	(
	id_news,
	judul_berita_news,
	sinopsis_berita_news,
	isi_berita_news,
	foto_news,
	kategori,
	penerbit,
	link_news,
	tanggal_post
	)	
values 	    		
	('$id_news','$Judul_Berita_News','$Sinopsis_Berita_News','$Isi_Berita_News','$foto_news','$Kategori_News','$penerbit','$Link_News','$tanggal_post')");

  if(move_uploaded_file($_FILES['foto_news']['tmp_name'], $folder))
 {
 echo "<script> alert ('Terima Kasih'); </script>";
 }
 else {
 
 //Gives and error if its not
 echo "Sorry, there was a problem uploading your file.";
 } 	
  		


	if ($proses)
	{
	echo "<script> alert ('Artikel telah diterbitkan .. -- SYSTEM --'); document.location.href='../admin/index2.php'; </script>";} else {echo "<script> alert ('Artikel gagal diterbitkan, silahkan ulangi kembali !!! ')</script>";}
	
	/*if ($proses_photo){echo "<script> alert (' Terima Kasih'); document.location.href='input_artikel.php'; </script>";} else {echo "<script> alert ('Artikel gagal diterbitkan, silahkan ulangi kembali !!! ')</script>";}  */
	
	
												
												}
		
		
?>
