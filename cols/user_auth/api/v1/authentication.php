<?php 
$app->get('/session', function() {
    $db = new DbHandler();
    $session = $db->getSession();
    $response["user_id"] = $session['user_id'];
    $response["user_email"] = $session['user_email'];
    $response["user_first_name"] = $session['user_first_name'];
    
    echoResponse(200, $session);
});

$app->post('/login', function() use ($app) {
    require_once 'passwordHash.php';
    $r = json_decode($app->request->getBody());
    verifyRequiredParams(array('user_email', 'password'),$r->user);
    $response = array();
    $db = new DbHandler();
    $password = $r->user->password;
    $user_email = $r->user->user_email;
    $user = $db->getOneRecord("select user_id, user_first_name, user_last_name, password, user_email, user_created_date from users where  user_email='$user_email'");
    if ($user != NULL) {
        if(passwordHash::check_password($user['password'],$password)){
        $response['status'] = "success";
        $response['message'] = 'Logged in successfully.';
        $response['user_first_name'] = $user['user_first_name'];
        $response['user_id'] = $user['user_id'];
        $response['user_email'] = $user['user_email'];
        $response['user_ceated_date'] = $user['user_ceated_date'];
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_email'] = $email;
        $_SESSION['user_first_name'] = $user['user_first_name'];
        } else {
            $response['status'] = "error";
            $response['message'] = 'Login failed. Incorrect credentials';
        }
    }else {
            $response['status'] = "error";
            $response['message'] = 'No such user is registered';
        }
    echoResponse(200, $response);
});
$app->post('/signUp', function() use ($app) {
    $response = array();
    $r = json_decode($app->request->getBody());
    verifyRequiredParams(array('user_email', 'name', 'password'),$r->user);
    require_once 'passwordHash.php';
    $db = new DbHandler();
    
    $user_first_name = $r->user->user_first_name;
    $user_email = $r->user->user_email;
    //$address = $r->customer->address;
    $password = $r->user->password;
    $isUserExists = $db->getOneRecord("select 1 from users where email='$email'");
    if(!$isUserExists){
        $r->user->password = passwordHash::hash($password);
        $tabble_name = "users";
        $column_names = array('user_first_name', 'user_last_name', 'user_email', 'password', 'user_contact');
        $result = $db->insertIntoTable($r->user, $column_names, $tabble_name);
        if ($result != NULL) {
            $response["status"] = "success";
            $response["message"] = "User account created successfully";
            $response["user_id"] = $result;
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['user_id'] = $response["user_id"];
            $_SESSION['user_first_name'] = $user_first_name;
            $_SESSION['user_contact'] = $user_contact;
            $_SESSION['user_email'] = $user_email;
            echoResponse(200, $response);
        } else {
            $response["status"] = "error";
            $response["message"] = "Failed to create User. Please try again";
            echoResponse(201, $response);
        }            
    }else{
        $response["status"] = "error";
        $response["message"] = "An user with the provided phone or email exists!";
        echoResponse(201, $response);
    }
});
$app->get('/logout', function() {
    $db = new DbHandler();
    $session = $db->destroySession();
    $response["status"] = "info";
    $response["message"] = "Logged out successfully";
    echoResponse(200, $response);
});
?>