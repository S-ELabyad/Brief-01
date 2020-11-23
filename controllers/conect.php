
<?php

include_once ('classes/conect_class.php');

$contact = new Contact();

$error  = array();
$id='';
$nom = '';
$prenom = '';
$email = '';
$tele = '';
$name_rep= '';
   

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
     
      $contact->contact_message($nom, $prenom, $email,$tele,$name_rep);
  
      $_SESSION['message'] = "you have created ur order successfuly ";
  }
     
    

?>
