
<?php

include ('controllers/conect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="auth.css">
  
  
  
</head>
<body>
  


<div class="big_container">
  <div class="w3-container w3-center w3-animate-zoom">
<h1 class="text-center h1"  style="     color: antiquewhite;font-family: serif; margin-top: 32%;font-size: 47px;" >The best restaurants with delivery service</h1>

</div>


<div class="inputs_div">


        <div class= "container col-md-10 big-box">
       
            <h2 class="text-center h2">welcome to our space</h2>

         
            <br>

            <?php if(count($error) > 0): ?>
                  <div class="alert alert-danger text-center">
                      <?php foreach($error as $error): ?>
                      <li style="list-style: none;"><?php echo $error; ?></li>
                      <?php endforeach; ?>
                  </div>
              <?php endif; ?>
              <?php if(isset($_SESSION['message'])): ?>
                  <div class="alert alert-success text-center">
                      <li style="list-style: none;"><?php 
                      echo $_SESSION['message'];
                      unset($_SESSION['message']);
                      ?></li>
                  </div>
              <?php endif; ?>
            <form action="home.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>" >

                <div class="form-group">
                  <label>nom</label>
                  <input type="text" class="form-control" name="nom" placeholder="nom" value="<?php echo $nom; ?>"> 
                </div>
                <div class="form-group">
                <label>prenom</label>
                  <input type="text" class="form-control" name="prenom" placeholder="prenom" value="<?php echo $prenom; ?>">
                </div>
                <div class="form-group">
                <label>email</label>
                  <input type="text" class="form-control" name="email" placeholder="email"  value="<?php echo $email; ?>">  
                </div>
                <div class="form-group">
                  <label>tele</label>
                  <input type="tele" class="form-control" name="tele" placeholder="tele" value="<?php echo $tele; ?>"> 
                </div>
                <br>
                <div class="form-group">
              
                  <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                  
                  <option selected value="<?php echo $name_rep; ?>" name="name_rep">choisir votre repas</option>
                     <option value="">Dinde fumée</option>
                     <option value="">Salmon sushi</option>
                     <option value="">Riz et légume sauté</option>
                     <option value="">Viande et patte</option>
                     <option value="">Poulet</option>
                     <option value="">Brochette Dinde</option>
      
                </select>
                </div> 
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-secondary btn-block" name="contact_message" >Log in </button>
                  <br>

                </div>
            </form>
          </div>
    </div>

 
</div>


</body>
</html>