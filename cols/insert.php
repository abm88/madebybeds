<?php

 $connect = mysqli_connect("localhost", "root", "", "madebybeds");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $first_name = mysqli_real_escape_string($connect, $data->first_name);       
      $last_name = mysqli_real_escape_string($connect, $data->last_name);  
      $user_email = mysqli_real_escape_string($connect, $data->user_email); 
      $password = mysqli_real_escape_string($connect, $data->password);
      $user_contact = mysqli_real_escape_string($connect, $data->user_contact);
        
      $query = "INSERT INTO users(user_first_name, user_last_name, user_email, password, user_contact) VALUES ('$first_name', '$last_name','$user_email','$password','$user_contact')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
?>