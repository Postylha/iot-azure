<?php
     
     if (isset($_POST['h']))
     {
          echo $_POST['h'];    
          $file1 = fopen("exam.txt","a") or die("Unable to open file!");
          fwrite($file1, "\n". $_POST['h']);
	     fclose($file1);
          
          echo 'server message';
     } else {
          echo 'prazdna stranka';
     }

?>
