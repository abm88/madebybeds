<?php

 $connect = mysqli_connect("localhost", "root", "", "madebybeds");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $project_subject = mysqli_real_escape_string($connect, $data->project_subject);       
      $project_type = mysqli_real_escape_string($connect, $data->project_type);  
      $project_name = mysqli_real_escape_string($connect, $data->project_name); 
      $project_description = mysqli_real_escape_string($connect, $data->project_description);
      $upload_image = mysqli_real_escape_string($connect, $data->upload_image);
        
      $query = "INSERT INTO projects(project_subject, project_type, project_name, project_description, project_images) VALUES ('$project_subject', '$project_type','$project_name','$project_description','$upload_image')";  
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