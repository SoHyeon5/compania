<?php
  session_start();
  unset($_SESSION["userid"]);
  unset($_SESSION["username"]);
  unset($_SESSION["userlevel"]);
  
  echo("
       <script>
          location.href = 'main_index.php';
         </script>
       ");
?>
