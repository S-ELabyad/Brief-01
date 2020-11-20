<?php

include ('controllers/config.php');

class Users extends DB
{
    public function sign_up($user_name, $user_email, $user_password)
    {
        $sql = "INSERT INTO `client`(user_name, user_email, user_password) VALUES('$user_name','$user_email','$user_password')";
        
        $result = $this->connect()->query($sql);
        return $result;
    }

    public function signupvalidation($user_name,$user_email,$user_password,$error)
    {
        if (empty($user_name)) {
            $error['user_name'] = "User name required";
        }
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $error['user_email'] = "Email adress is not valid";
        }
        if (empty($user_email)) {
            $error['user_email'] = "Email required";
        }
      
        if (empty($user_password)) {
            $error['user_password'] = "Password required";
        }
       
      
      
    

        
        
        return $error;
    }

   

 

 
}
?>
