  <!-- DataBase connection -->
	<?php 

    $user_name = "root";
    $password = "";
    $database = "ex_offenders";
    $server = "localhost";

    mysql_connect($server, $user_name, $password);

    $db_found = mysql_select_db($database);

    if($db_found){
      echo " ";
     
    }else {
      echo "DataBase not found.";
    }  
    ?>
 <!-- DataBase connection -->