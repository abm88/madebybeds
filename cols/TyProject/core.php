<?php 
//include('index.html');
include('db.php');
if(isset($_POST['login'])) {
    $user_login = @($_POST['user_login']);
    $user_password = @($_POST['user_password']);
    $user_select = @($_POST['login_select']);
    if($user_login !="" && $user_password != "" && $user_select != "") { // not empty
    session_start(); //starting the session 
    
    $result = $_POST['login_select'];
    if($_POST['login_select']) {
    $selected = mysql_real_escape_string($_POST['selected_user']); // get the selected text
   
        if($selected==='Admin'){  // if Admin selected
            if(!empty($_POST['user_login'])) {

        $query = mysql_query("SELECT * FROM user_login where user_login = '$_POST[user_login]' AND user_password = '$_POST[user_password]'") or die(mysql_error()); 
        $row = mysql_fetch_array($query) or die(mysql_error()); 
        if(!empty($row['user_login']) AND !empty($row['user_password'])) { $_SESSION['user_login'] = $row['user_password'];
            echo " SUCCESSFULLY LOGIN TO ".$selected;
            include('admin.php');
                } else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } }
            
        } elseif($selected==='Agency'){ // if Agency selected
                 if(!empty($_POST['user_login'])) {

            $query = mysql_query("SELECT * FROM user_login where user_login = '$_POST[user_login]' AND user_password = '$_POST[user_password]'") or die(mysql_error()); 
            $row = mysql_fetch_array($query) or die(mysql_error()); 
            if(!empty($row['user_login']) AND !empty($row['user_password'])) { $_SESSION['user_login'] = $row['user_password'];
                echo "SUCCESSFULLY LOGIN TO ".$selected;
                include('agency.php');

        } else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } }

                } elseif($selected==='Staff'){ // if Staff selected
                                if(!empty($_POST['user_login'])) 
        {

    $query = mysql_query("SELECT * FROM user_login where user_login = '$_POST[user_login]' AND user_password = '$_POST[user_password]'") or die(mysql_error()); 
    $row = mysql_fetch_array($query) or die(mysql_error()); 
    if(!empty($row['user_login']) AND !empty($row['user_password'])) { $_SESSION['user_login'] = $row['user_password'];
        echo "SUCCESSFULLY LOGIN TO ".$selected;
        include('staff.php');

} else { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; } }
            
        } // staff

    } 
        
    

}else { echo 'Select the required user and fill the login fields thanks'; } // not filled
    } else {echo ' Faild to proceed somthing went wrong with system ';} 
 ?>