<?php

include('class/userclass.php');

$user = new Users();
$error = array();

$user_name = '';
$user_email = '';


/***********************************************************signning up***************************************************************/
if (isset($_POST['signup'])) {
    $user_name = htmlspecialchars($_POST['user_name']);
    $user_email = htmlspecialchars($_POST['user_email']);
    $user_password = $_POST['user_password'];


    $error = $user->signupvalidation($user_name,$user_email, $user_password,$error);

    $con = $user->connect();
    // $emailQuery = "SELECT * FROM client WHERE user_email = ? LIMIT 1";
    $stm = $con->prepare($emailQuery);
    $stm->bind_param('s', $user_email);
    $stm->execute();
    $result = $stm->get_result();
    $usercount = $result->num_rows;
   
    if(count($error)=== 0){
        //hashing the password before saving the data to the database
        $user_password = password_hash($user_password, PASSWORD_DEFAULT);
      
        // registering a new user and sending the data to the database
        $user->sign_up($user_name, $user_email, $user_password );
        //sending a register confirmation message to the user
        $_SESSION['message'] = "you have created ur account successfuly <a href = 'index.php'>welcome</a>";
    }
}
?>