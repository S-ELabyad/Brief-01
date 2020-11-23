
<?php

include_once ('classes/conect_class.php');

$contact = new Contact();

$error  = array();

$nom = '';
$prenom = '';
$email = '';
$tele = '';
   

 if(isset($_POST['contact_message']))
 {
      $id=$_POST['id'];
      $nom=$_POST['nom'];
      $prenom=$_POST['prenom'];
      $email=$_POST['email'];
      $tele=$_POST['tele'];
      $name_rep=$_POST['name_rep'];
  
   }
   if(count($error)=== 0){
      //hashing the password before saving the data to the database
      // $user_password = password_hash($user_password, PASSWORD_DEFAULT);
      //saving the profile picture
      // $user_picture = $user->save_profile_picture();     
      // registering a new user and sending the data to the database
      $contact->contact_message($nom, $prenom, $email,$tele,$name_rep);
      //sending a register confirmation message to the user
      $_SESSION['message'] = "you have created ur order successfuly ";
  }
     
    

?>
