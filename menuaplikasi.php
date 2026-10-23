<?php
   require_once("validpas.php");
   
   // Validasi sesi
   validasi_sesi();    
?>
   
<!DOCTYPE HTML>
<html>
   <head>
      <title>Contoh Sesi</title>
   </head>
   <body BGCOLOR="#C4DFE6">
       <div style="display: flex; align-items: center;">
           <img src="https://static.independent.co.uk/2023/02/10/12/newFile-1.jpg" width="180" height="150"alt="HIMAKSI">
	       <h1> &nbsp &nbsp &nbsp COMPUTING SYSTEM  (CS)</h1>
	   </div>
	   <hr>
      <h2><u>Menu Utama</u></h2>
	    <p><a href="http://127.0.0.1/TK_2/SimulasiPinjaman/penjualan/index.php">Simulasi Pinjaman</a></p>
        <p><a href="http://127.0.0.1/TK_2/BayarGaji/index.PHP">Pembayaran Gaji</a></p>
        <p><a href="http://127.0.0.1/TK_2/EntriAkun/index.PHP">Entri Akun/GL</a></p>
      <p><a href="logout.php">Logout</a></p>
   </body>
</html>
