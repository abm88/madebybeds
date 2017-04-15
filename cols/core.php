<?php 

//include('index.html');

if(isset($_POST['login'])) {
    $user_login = @($_POST['user_login']);
    $user_password = @($_POST['user_password']);
    $user_type = @($_POST['user_type']);
    if($user_login !="" && $password != "" && $user_type != "") { // not empty
    session_start(); //starting the session 
    
    $result = $_POST['user_type'];
    if($_POST['user_type']) {
    $selected = mysql_real_escape_string($_POST['selected_user']); // get the selected text
   
        if($selected==='Administrator'){  // if Admin selected
            if(!empty($_POST['user_login'])) {

        $query = mysql_query("SELECT * FROM users where user_login = '$_POST[user_login]' AND password = '$_POST[password]'") or die(mysql_error()); 
        $row = mysql_fetch_array($query) or die(mysql_error()); 
        if(!empty($row['user_login']) AND !empty($row['password'])) { $_SESSION['user_login'] = $row['password'];
            echo " SUCCESSFULLY LOGIN TO ".$selected;
            header("Location: logged_in_page.php");
                } else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } }
            
        } elseif($selected==='Agency'){ // if Agency selected
                 if(!empty($_POST['user_login'])) {

            $query = mysql_query("SELECT * FROM agency where agency_login = '$_POST[user_login]' AND agency_password = '$_POST[user_password]'") or die(mysql_error()); 
            $row = mysql_fetch_array($query) or die(mysql_error()); 
            if(!empty($row['agency_login']) AND !empty($row['agency_password'])) { $_SESSION['agency_login'] = $row['agency_login'];
                
             
                require_once('agency.php');
                                                                               

        } else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } }

                } elseif($selected==='Staff'){ // if Staff selected
                                if(!empty($_POST['user_login'])) 
        {

    $query = mysql_query("SELECT * FROM staff where staff_login = '$_POST[user_login]' AND staff_password = '$_POST[user_password]'") or die(mysql_error()); 
    $row = mysql_fetch_array($query) or die(mysql_error()); 
    if(!empty($row['staff_login']) AND !empty($row['staff_login'])) { $_SESSION['staff_login'] = $row['staff_password'];
        echo "SUCCESSFULLY LOGIN TO ".$selected;
        include('staff.php');

} else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } }
            
        } // staff

    } 
        
    

}else { echo 'Select the required user and fill the login fields thanks'; } // not filled
    } else {echo ' Faild to proceed somthing went wrong with system ';} 
 ?>