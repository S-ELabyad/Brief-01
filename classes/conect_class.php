<?php
include_once ('controllers/config.php');

class Contact extends DB
{
    public function contact_message  ($id,$nom ,$prenom,$email,$tele,$name_rep)
    {
        $sql = "INSERT INTO `patient` (id, nom, prenom,email,tele,name_rep) VALUES ('$id','$nom','$prenom','$email' , '$tele' ,'$name_rep')";

        $result = $this->connect()->query($sql);
        return $result;
      
    }

    


    public function contact_validation($nom,$prenom,$email,$tele,$name_rep,$error){
        if (empty($nom)) {
            $error['nom'] = " name required";
        }
        if (empty($prenom)) {
            $error['prenom'] = " prenom required";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "email adress is not valid";
        }
        if (empty($email)) {
            $error['email'] = "email required";
        }
        if (empty($tele)) {
            $error['tele'] = "tele required";
        }
        if (empty($name_rep)) {
            $error['name_rep'] = "name_rep required";
        }
        

        return $error;
    }














}
?>