<?php 
mysql_connect("localhost","root","") or die ("Not connected");

mysql_selectdb("test")or die("Database not found");

?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    
    <title>Testing </title>
    
    <body>
        <form method="POST" action="test_upload.php" enctype="multipart/form-data">
            <input type="file" name="file_img[]" multiple/>
            <input type="submit" name="btn_upload" value="Upload"/>
        </form>
        <?php 
        if(isset($_POST["btn_upload"])){
            
            for($i = 0; $i<count($filename = $_FILES["file_img"]["name"]); $i++){
                
                $filetmp = $_FILES["file_img"]["tmp_name"][$i];
                $filename = $_FILES["file_img"]["name"][$i];
                $filetype = $_FILES["file_img"]["type"][$i];
                $filepath = "images/".$filename;
                
            move_uploaded_file($filetmp, $filepath);
            
            $sql = "insert into img_upload(img_name, img_path, img_type) values(
                '$filename',
                '$filepath',
                '$filetype'
                )";
                $result = mysql_query($sql);
        }
            }
            
        ?>
    </body>
</html>