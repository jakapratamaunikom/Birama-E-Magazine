<?php
include "../admin/koneksi.inc";
$delete=mysql_query("delete from artikel_news where judul_berita_news='$_GET[judul_berita_news]'") or die (mysql_error());
if($delete){echo "<script>alert('Artikel berhasil dihapus');document.location.href='../admin/index2.php?menu=edit_artikel';</script>";}
 else
 {echo "<script>alert('Maaf, artikel belum atau gagal dihapus');document.location.href='../admin/index2.php?menu=edit_artikel';</script>";}
?>