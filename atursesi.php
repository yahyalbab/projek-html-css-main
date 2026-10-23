<?php
   require_once("validpas.php");
      
   // Penentuan variabel post
   if (isset($_POST["pemakai"]))
      $pemakai = $_POST["pemakai"];
   else
      $pemakai = "";
      
   if (isset($_POST["sandi"]))
      $password = $_POST["sandi"];
   else
      $password = "";

   if (empty($pemakai) or empty($password)) {
      header("Location: http://127.0.0.1/TK_2/login.php");
      exit();
   }
   
   // Buat variabel sesi
   $_SESSION["pemakai"] = $pemakai;
   $_SESSION["sandi"] = md5($password);
   
   // Validasi sesi  
   validasi_sesi();  
   
   // Arahkan ke menuaplikasi.php
   header("Location: http://127.0.0.1/TK_2/menuaplikasi.php");
   exit();
?>
