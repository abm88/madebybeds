<?php 
if(isset($_POST['exiting'])){
    session_start();
    include('agency.php');
}
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

        $query = mysql_query("SELECT * FROM admin where admin_login = '$_POST[user_login]' AND admin_password = '$_POST[user_password]'") or die(mysql_error()); 
        $row = mysql_fetch_array($query) or die(mysql_error()); 
        if(!empty($row['admin_login']) AND !empty($row['admin_password'])) { $_SESSION['admin_login'] = $row['admin_password'];
            echo " SUCCESSFULLY LOGIN TO ".$selected;
            include('admin.php');
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