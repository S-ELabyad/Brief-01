
<?php
include ('controllers/auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="auth.css">
  
  
  
</head>
<body>
  

<div class="big_container">

<div class="inputs_div">


        <div class= "container col-md-10 big-box">
       
            <h2 class="text-center h2">welcome to our space</h2>

         
            <br>
            <form action="" method="POST">
                <div class="form-group">
                  <label>user name</label>
                  <input type="text" class="form-control" name="user_name" placeholder="user name" value="<?php echo $user_name; ?>"  >
                </div>
                <div class="form-group">
                  <label>user email</label>
                  <input type="text" class="form-control" name="user_email" placeholder="user email"  value="<?php echo $user_email; ?>"  >
                </div>
                <div class="form-group">
                  <label>password</label>
                  <input type="password" class="form-control" name="user_password" placeholder="password" >
                </div>
                <br>
                <div class="form-group">
                  <button type="submmit" class="btn btn-secondary btn-block" name="submit" >Log in </button>
                  <br>

                </div>
            </form>
          </div>
    </div>

 
</div>


</body>
</html>