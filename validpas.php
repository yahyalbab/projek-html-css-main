<?php
   // Awali sesi
   session_start();
   
   function validasi_pemakai() 
   {
      $pemakai = $_SESSION["pemakai"];
      $password = $_SESSION["sandi"];
      
      $pemakai_valid_1 = "johan";
      $password_valid_1 = md5("han982");   

      $pemakai_valid_2 = "amanda";  
      $password_valid_2 = md5("aman7788");   
      
      if ((($pemakai == $pemakai_valid_1) and 
           ($password == $password_valid_1)) or
          (($pemakai == $pemakai_valid_2) and 
           ($password == $password_valid_2)))
         return(TRUE);
      else
         return(FALSE);     
   }
   
   function validasi_sesi()
   {
      if (!validasi_pemakai()) 
      {
         $_SESSION["pesan"] = "Pemakai atau password harap diisi dengan benar";
         header("Location: http://127.0.0.1/TK_2/login.php");
         exit();
      }
   }
?>
